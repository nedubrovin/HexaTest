<?php
use Page\LoginPage;
/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 15.08.2016
 * Time: 17:23
 */
$I = new AcceptanceTester($scenario);
$I->wantTo('validate text on page');
$loginPage = new LoginPage($I);
$loginPage->checkText();