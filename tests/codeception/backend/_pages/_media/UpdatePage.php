<?php
/**
 * @file      UpdatePage.php
 * @date      12/9/2015
 * @time      4:37 AM
 * @author    Agiel K. Saputra <13nightevil@gmail.com>
 * @copyright Copyright (c) 2015 Agiel K. Saputra
 * @license   http://www.writesdown.com/license/
 */


namespace tests\codeception\backend\_pages\_media;


use yii\codeception\BasePage;

/**
 * Class UpdatePage
 *
 * @property \tests\codeception\frontend\FunctionalTester | \tests\codeception\frontend\AcceptanceTester | \tests\codeception\backend\FunctionalTester | \tests\codeception\backend\AcceptanceTester $actor
 *
 * @package tests\codeception\backend\_pages\_media
 * @author  Agiel K. Saputra <13nightevil@gmail.com>
 * @since   0.1.2
 */
class UpdatePage extends BasePage
{
    /**
     * @var array
     */
    public $route = ['/media/update', 'id' => 1];

    /**
     * @param array $data
     */
    public function submit(array $data){
        foreach ($data as $field => $value) {
            $fieldType = $field == 'media_excerpt' || $field == 'media_content' ? 'textarea' : 'input';
            $this->actor->fillField($fieldType . '[name="Media[' . $field . ']"]', $value);
        }
        $this->actor->click('Update', '#media-update-form');

        // Wait to submit
        if(method_exists($this->actor, 'wait')){
            $this->actor->wantTo(3);
        }
    }
}