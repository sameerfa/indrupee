<?php
require_once './src/IndRupee.php';
//error_reporting(0);

// creates a new object
$test = new \IndRupee\IndRupee();

echo "In Words-> ".$test->inwords(51111111.88)."<br>";
echo "With Comma-> ".$test->withcomma(51111111.88,1)."<br>";
echo "In Crores-> ".$test->incrores(50222587.689,2,1)."<br>";
echo "In Lakhs-> ".$test->inlakhs(90222587,2,0)."<br>";
echo "USD to INR-> ".$test->fiatconvert("USD","INR",1)."<br>";
echo "BTC to INR-> ".$test->cryptoconvert("INR","BTC",1)."<br>";
echo "BTC to INR In Words-> ".$test->inwords($test->cryptoconvert("INR","BTC",1))."<BR>";
