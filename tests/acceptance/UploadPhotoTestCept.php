<?php
use Page\ProfilePage;
use Page\RegistrationPage;
use Page\LoginPage;

$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$registrationPage = new RegistrationPage($I);
$registrationPage->registerUser("John","Doe","john1","john1@com.net","555","555");
$loginPage = new LoginPage($I);
$loginPage->signIn("john1","555");
$profilePage = new ProfilePage($I);
$profilePage->uploadPhoto('enot.jpg');
$I->see('Photo have being successfully uploaded');
$profilePage->logout();