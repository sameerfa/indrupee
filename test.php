<?php
require_once './src/IndRupee.php';
//error_reporting(0);

// creates a new object
$test = new \IndRupee\IndRupee();

echo "In Words-> ".$test->inwords(51111111.88)."\n";
echo "With Comma-> ".$test->withcomma(51111111.88,1)."\n";
echo "In Crores-> ".$test->incrores(50222587.689,2,1)."\n";
echo "In Lakhs-> ".$test->inlakhs(90222587,2,0)."\n";
