<?php
require_once('../vendor/stripe/init.php');

$stripe = array(
  "secret_key"      => "sk_test_JhnKwnGJc7ZfVusQOfdrYpUf",
  "publishable_key" => "pk_test_qCSniVFp8yINjCrB37zB7nJc"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
