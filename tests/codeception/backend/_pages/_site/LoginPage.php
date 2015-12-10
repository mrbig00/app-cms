<?php
/**
 * @file      LoginPage.php
 * @date      12/6/2015
 * @time      11:20 PM
 * @author    Agiel K. Saputra <13nightevil@gmail.com>
 * @copyright Copyright (c) 2015 Agiel K. Saputra
 * @license   http://www.writesdown.com/license/
 */

namespace tests\codeception\backend\_pages\_site;
use yii\codeception\BasePage;

/**
 * Class LoginPage
 *
 * @property \tests\codeception\frontend\FunctionalTester | \tests\codeception\frontend\AcceptanceTester | \tests\codeception\backend\FunctionalTester | \tests\codeception\backend\AcceptanceTester $actor
 *
 * @package tests\codeception\backend\_pages\_site
 * @author  Agiel K. Saputra <13nightevil@gmail.com>
 * @since   0.1.2
 */
class LoginPage extends BasePage
{
    /**
     * @var array
     */
    public $route = ['/site/login'];

    /**
     * @param array $data
     */
    public function submit(array $data)
    {
        foreach ($data as $field => $value) {
            $this->actor->fillField('input[name="LoginForm[' . $field . ']"]', $value);
        }
        $this->actor->click('Signin', '#login-form');

        // Wait
        if (method_exists($this->actor, 'wait')){
            $this->actor->wait(3);
        }
    }
}