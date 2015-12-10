<?php
/**
 * @file      IndexPage.php
 * @date      12/7/2015
 * @time      9:54 PM
 * @author    Agiel K. Saputra <13nightevil@gmail.com>
 * @copyright Copyright (c) 2015 Agiel K. Saputra
 * @license   http://www.writesdown.com/license/
 */


namespace tests\codeception\backend\_pages\_post;


use yii\codeception\BasePage;

/**
 * Class IndexPage
 *
 * @property \tests\codeception\frontend\FunctionalTester | \tests\codeception\frontend\AcceptanceTester | \tests\codeception\backend\FunctionalTester | \tests\codeception\backend\AcceptanceTester $actor
 *
 * @package tests\codeception\backend\_pages\_post
 * @author  Agiel K. Saputra <13nightevil@gmail.com>
 * @since   0.1.2
 */
class IndexPage extends BasePage
{
    /**
     * @var array
     */
    public $route = ['/post/index', 'post_type' => '1'];

    /**
     * @param array $data
     */
    public function submit(array $data)
    {
        $this->actor->click('button[data-target="#post-search"]');

        // Wait to toggle
        if (method_exists($this->actor, 'wait')) {
            $this->actor->wait(3);
        }

        foreach ($data as $field => $value) {
            $this->actor->fillField('#post-search input[name="Post[' . $field . ']"]', $value);
        }
        $this->actor->click('Search', '#post-search');

        // Wait to submit
        if (method_exists($this->actor, 'wait')) {
            $this->actor->wait(3);
        }
    }
}