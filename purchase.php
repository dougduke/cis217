<?php

/**
 * Created by PhpStorm.
 * User: Doug Duke
 * Date: 7/31/14
 * Time: 1:38 PM
 */

  $name = $_POST[name];
  $address = $_POST[address];
  $submit = $_POST[submit];
  $purch = $_POST[purchase];

//  echo 'name ' + $name;
//  echo $address;
//  echo $submit;

  $purchase =<<<PURCH

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Page Title</title>
</head>
<body>
<section class="container">
  <h1>Purchase Page</h1>
  <p> 'name ' + $name;</p>
  <p> 'address' + $address</p>
</section>
</body>
</html>

PURCH;

  echo $purchase;
  $message = "Name: " . $name . "\nAddress" . $address . "\nOrder: " . $purch . "";
  mail('doug.duke@rocketmail.com', 'Pizza Order', $message);
  echo "message sent";