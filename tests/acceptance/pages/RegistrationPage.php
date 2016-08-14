<?php

/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 14.08.2016
 * Time: 21:09
 */
class RegistrationPage
{
    const URL = '/register';

    static $firstNameField = './/*[@id=\'content\']/div[2]/form/fieldset/div[1]/input';
    static $lastNameField = './/*[@id=\'content\']/div[2]/form/fieldset/div[2]/input';
    static $signloginField = './/*[@id=\'content\']/div[2]/form/fieldset/div[3]/input';
    static $emailField = './/*[@id=\'content\']/div[2]/form/fieldset/div[4]/input';
    static $passwordField = './/*[@id=\'pwd1\']';
    static $passwordAgainField = './/*[@id=\'pwd2\']';
    static $registrationButton = './/*[@id=\'register\']';

}