<?php
use Page\ProfilePage;
use Page\RegistrationPage;
use Page\LoginPage;

$I = new AcceptanceTester($scenario);
$I->wantTo('change user profile data');
$registrationPage = new RegistrationPage($I);
$registrationPage->registerUser("John","Doe","john1","john1@com.net","555","555");
$loginPage = new LoginPage($I);
$loginPage->signIn("john1","555");

$profilePage = new ProfilePage($I);
$profilePage->changeUserData("Sam","Smith","sam1","sam1@com.net","123","123");
$profilePage->verifyUserData("Sam","Smith","sam1","sam1@com.net");
$profilePage->logout();