<?php
use Page\RegistrationPage;
use Page\LoginPage;
$I = new AcceptanceTester($scenario);
$I->wantTo('register new account and log in');
$registrationPage = new RegistrationPage($I);
$registrationPage->registerUser("John","Doe","john1","john1@com.net","555","555");
$I->see('Click here to register');
$loginPage = new LoginPage($I);
$loginPage->signIn("john1","555");

$I->see('Profile info');