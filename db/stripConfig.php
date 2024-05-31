<?php
require "stripe-php-master/init.php";

$Publishablekey="pk_test_51P4RhdSFMb4DZzjTL6e1kopKwD9eUEOIXg2xwKPpbYV5SUJZvTFKoX8xADKBH5JLFoiaXEvnKAvUVOc9E5CFtekf00qYG2l9Fg";
$Secretkey="sk_test_51P4RhdSFMb4DZzjTZy0T7kqABaVaj5u9Bg4ofs8TnFvB2iAugc9VVFGPUL43oOuS5BVGfivrnUpWZaHd0OXZeVjg00mp3wv1OI";

\Stripe\Stripe::setApiKey("$Secretkey");

?>