<?php
/**
 * @file      ProfilePage.php
 * @date      12/6/2015
 * @time      11:57 PM
 * @author    Agiel K. Saputra <13nightevil@gmail.com>
 * @copyright Copyright (c) 2015 Agiel K. Saputra
 * @license   http://www.writesdown.com/license/
 */


namespace tests\codeception\backend\_pages\_user;


use yii\codeception\BasePage;

/**
 * Class ProfilePage
 *
 * @property \tests\codeception\frontend\FunctionalTester | \tests\codeception\frontend\AcceptanceTester | \tests\codeception\backend\FunctionalTester | \tests\codeception\backend\AcceptanceTester $actor
 *
 * @package tests\codeception\backend\_pages\_user
 * @author  Agiel K. Saputra <13nightevil@gmail.com>
 * @since   0.1.2
 */
class ProfilePage extends BasePage
{
    /**
     * @var array
     */
    public $route = ['/user/profile'];

    /**
     * @param array $data
     */
    public function submit(array $data){
        foreach ($data as $field => $value) {
            $this->actor->fillField('input[name="User[' . $field . ']"]', $value);
        }
        $this->actor->click('Update', '#user-profile-form');

        if (method_exists($this->actor, 'wait')){
            $this->actor->wait(3);
        }
    }
}