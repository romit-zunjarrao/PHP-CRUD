<?php
/**
 * Created by PhpStorm.
 * User: romit
 * Date: 29-04-2019
 * Time: 11:58 PM
 */
require_once ("db-setting.php");
require_once("functions.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$birthDate = $_POST['birthDate'];
$lunchCost = $_POST['lunchCost'];
$studentId = $_POST['studentId'];

$newUser = insertNewUser($firstname,$lastname,$email,$street,$city,$state,$zip,$phone,$birthDate,$lunchCost,$studentId);

echo $newUser;