<?php

require "/pages/LoginPage.php";

$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnUrl("http://task.hexa.com.ua/login");


$I->seeElement(LoginPage::$signInButton);
$I->click(LoginPage::$registrationLink);
$I->see('Register');


?>

