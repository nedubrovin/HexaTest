<?php
namespace Page;

class RegistrationPage
{
    public static $URL = '/register';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    public static $firstNameField = "//*[@name='first_name']";
    public static $lastNameField = "//*[@name='last_name']";
    public static  $signloginField = "//*[@name='login']";
    public static  $emailField = "//*[@name='email']";
    public static  $passwordField = "//*[@name='pwd1']";
    public static  $passwordAgainField = "//*[@name='pwd2']";
    public static  $registrationButton = "//*[@id='register']";

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function registerUser($firstName, $lastName, $login, $email, $password, $passwordAgain){

        $I = $this->tester;

        $I->amOnPage('/register');
        $I->fillField(self::$firstNameField,$firstName);
        $I->fillField(self::$lastNameField,$lastName);
        $I->fillField(self::$signloginField,$login);
        $I->fillField(self::$emailField,$email);
        $I->fillField(self::$passwordField,$password);
        $I->fillField(self::$passwordAgainField,$passwordAgain);
        $I->click(self::$registrationButton);
        $I->click(RegistrationSuccesfullPage::$clickHereToLogIn);

        return $this;
        }
    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }
}