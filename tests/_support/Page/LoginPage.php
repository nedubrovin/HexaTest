<?php
namespace Page;

class LoginPage
{
    // include url of current page
    public static $URL = '/login';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    static $usernameField = "//*[@name='login']";
    static $passwordField = "//*[@name='password']";
    static $signInButton = '#sign-in';
    static $registrationLink = '.register_href';
    static $loginWindowHeader = '.form>h1';

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function signIn ($name, $password)
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->fillField(self::$usernameField, $name);
        $I->fillField(self::$passwordField, $password);
        $I->click(self::$signInButton);
        return $this;
    }

    public function checkText ()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->see('Login', LoginPage::$loginWindowHeader);
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