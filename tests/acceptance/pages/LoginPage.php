<?php

/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 14.08.2016
 * Time: 17:59
 */
class LoginPage
{
    const URL = '/login';

    static $loginLoginField = './/*[@id=\'content\']/div[2]/form/fieldset/div[1]/input';
    static $loginPasswordField = './/*[@id=\'content\']/div[2]/form/fieldset/div[2]/input';
    static $signInButton = '#sign-in';
    static $registrationLink = '.register_href';

    /*static function row($id)
    {
        return $signInButton ." .article-$id";
    }*/
}
?>