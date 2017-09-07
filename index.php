<?php 

require 'CoinPayments.php';

// Create an instance of the class
$CP = new \MineSQL\CoinPayments();

// Set the merchant ID and secret key (can be found in account settings on CoinPayments.net)
$CP->setMerchantId('YOUR MERCHANT ID');
$CP->setSecretKey('YOUR SECRET KEY');


// You are required to set the currency, amount and item name for coinpayments. cmd, reset, and merchant are automatically created within the class
// there are many optional settings that you should probably set as well: https://www.coinpayments.net/merchant-tools-buttons

//REQUIRED
$CP->setFormElement('currency', 'USD');                    //Currency in which Invoice bill generated
$CP->setFormElement('allow_currencies', 'BTC,LTC,LTCT');   //here you can give list of currency allowable for payment
$CP->setFormElement('amountf', 10.0);                      //Amount for per Item
$CP->setFormElement('item_name', 'T-shirt');               //Invoice item name
$CP->setFormElement('allow_quantity',1);                   //Minimum number of quantity
$CP->setFormElement('want_shipping',0);                    //Shipping not require


//$CP->setFormElement('cancel_url','localhost/Restaurant_System/');
//OPTIONAL
$CP->setFormElement('custom', 'customValue235');
$CP->setFormElement('ipn_url', 'http://minesql.me/ipn/cp');

// After you have finished configuring all your form elements, 
//you can call the CoinPayments::createForm method to invoke 
// the creation of a usable html form.
echo $CP->createForm();

