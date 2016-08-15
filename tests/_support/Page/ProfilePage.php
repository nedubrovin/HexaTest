<?php
namespace Page;

class ProfilePage
{
    public static $URL = '/profile';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    public static $profileWindowHeader = '.form>h1';
    public static $firstNameField = 'first_name';
    public static $lastNameField = 'last_name';
    public static $loginField = 'login';
    public static $emailField = 'email';
    public static $passwordField = 'pwd1';
    public static $passwordAgainField = 'pwd2';
    public static $changeButton = "//*[@type='submit']";
    public static $titleText = '.form.wide';
    public static $uploadPhotoButton = '.image>input';
    public static $logoutButton = '.menu-items>a';

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function changeUserData ($firstname, $lastName, $login, $email, $password, $passwordAgain)
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->fillField(self::$firstNameField, $firstname);
        $I->fillField(self::$lastNameField, $lastName);
        $I->fillField(self::$loginField, $login);
        $I->fillField(self::$emailField, $email);
        $I->fillField(self::$passwordField, $password);
        $I->fillField(self::$passwordAgainField, $passwordAgain);
        $I->click(self::$changeButton);

        return $this;
    }

    public function verifyUserData ($firstname, $lastName, $login, $email)
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->canSeeInField(self::$firstNameField, $firstname);
        $I->canSeeInField(self::$lastNameField, $lastName);
        $I->canSeeInField(self::$loginField, $login);
        $I->canSeeInField(self::$emailField, $email);

        return $this;
    }
    public function uploadPhoto ($fileName)
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->attachFile(self::$uploadPhotoButton, $fileName);

        return $this;
    }

    public function logout ()
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$logoutButton);

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