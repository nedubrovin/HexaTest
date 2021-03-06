<?php
namespace Page;

class RegistrationSuccesfullPage
{
    public static $URL = '';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    static $clickHereToLogIn = "//a[contains(text(), 'Log In')]";

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
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