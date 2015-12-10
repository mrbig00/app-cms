<?php
/**
 * @file      ContactPage.php
 * @date      12/6/2015
 * @time      10:24 PM
 * @author    Agiel K. Saputra <13nightevil@gmail.com>
 * @copyright Copyright (c) 2015 Agiel K. Saputra
 * @license   http://www.writesdown.com/license/
 */


namespace tests\codeception\frontend\_pages;


use yii\codeception\BasePage;

/**
 * Class ContactPage
 *
 * @property \tests\codeception\frontend\FunctionalTester | \tests\codeception\frontend\AcceptanceTester | \tests\codeception\backend\FunctionalTester | \tests\codeception\backend\AcceptanceTester $actor
 *
 * @package tests\codeception\frontend\_pages
 * @author  Agiel K. Saputra <13nightevil@gmail.com>
 * @since   0.1.2
 */
class ContactPage extends BasePage
{
    public $route = ['/site/contact'];

    /**
     * @param array $data
     */
    public function submit(array $data)
    {
        foreach ($data as $field => $value) {
            $inputType = $field === 'body' ? 'textarea' : 'input';
            $this->actor->fillField($inputType . '[name="ContactForm[' . $field . ']"]', $value);
        }
        $this->actor->click('contact-button');

        if (method_exists($this->actor, 'wait')){
            $this->actor->wait(3);
        }
    }
}