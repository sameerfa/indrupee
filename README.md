# indrupee
Converts number to Indian Rupee Format. In Words, In Crores, In Lakhs, With Indian Commas, To other Fiat Currency and Crypto Currency

## Installation

```php
composer require fasamr/indrupee
```

## Usage

**Create an instance**

```php
<?php
$rupee = new \IndRupee\IndRupee(); ?>
```

**Examples**
```php
<?php echo $rupee->inwords(51111111.88);
// Five Crore Eleven Lakhs Eleven Thousands One Hundred and Eleven Rupees Eight Eight Paise
```

```php
<?php $echo $rupee->withcomma(51111111.88,1);
// will return 5,11,11,111.88, if you want rupee symbol prefix (&#8377;) add second parameter as 1 or 0
```

```php
<?php echo $rupee->incrores(50222587.689,2,1);
// will return 5.02 Crores, 2nd parameter '2' defines number of decimal points needed,
//3rd parameter adds prefix (&#8377;) when 1 or 0
```

```php
<?php echo $rupee->inlakhs(90222587,2,0);
// will return 902.23 Lakhs, 2nd parameter for number of decimal points, 3rd for inr symbol prefix
```

```php
<?php echo $rupee->fiatconvert("USD","INR",1);
// will return 74.38
```

```php
<?php echo $rupee->cryptoconvert("INR","BTC",1);
// will return 2796810.45
```

```php
<?php echo $rupee->inwords($rupee->cryptoconvert("INR","BTC",1));
// will return Twenty Seven Lakhs Ninety Six Thousands Eight Hundred and Ten Rupees Four Five Paise
```
