<?php
//require "/pages/LoginPage.php";
require "/pages/RegistrationPage.php";
require "/pages/RegistrationSuccessfulPage.php";

$I = new AcceptanceTester($scenario);
$I->wantTo('register account');

//
$I->amOnPage(RegistrationPage::URL);
$I->seeElement(RegistrationPage::$firstNameField);
$I->fillField(RegistrationPage::$firstNameField, "John");
$I->fillField(RegistrationPage::$lastNameField, "Doe");
$I->fillField(RegistrationPage::$signloginField, "john1");
$I->fillField(RegistrationPage::$emailField, "john1@com.net");
$I->fillField(RegistrationPage::$passwordField, "555");
$I->fillField(RegistrationPage::$passwordAgainField, "555");
$I->click(RegistrationPage::$registrationButton);
$I->click(RegistrationSuccessfulPage::$clickHereToLogIn);
$I->fillField(LoginPage::$loginLoginField,"john1");
$I->fillField(LoginPage::$loginPasswordField,"555");
$I->see('Profile info');
//$I->click(LoginPage::$registrationLink);


//$I->see('Register');

