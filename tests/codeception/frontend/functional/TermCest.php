<?php
/**
 * @file      TermCest.php
 * @date      12/6/2015
 * @time      11:06 PM
 * @author    Agiel K. Saputra <13nightevil@gmail.com>
 * @copyright Copyright (c) 2015 Agiel K. Saputra
 * @license   http://www.writesdown.com/license/
 */


namespace tests\codeception\frontend\functional;


use tests\codeception\common\fixtures\PostCommentFixture;
use tests\codeception\common\fixtures\PostFixture;
use tests\codeception\common\fixtures\PostTypeFixture;
use tests\codeception\common\fixtures\PostTypeTaxonomyFixture;
use tests\codeception\common\fixtures\TaxonomyFixture;
use tests\codeception\common\fixtures\TermFixture;
use tests\codeception\common\fixtures\TermRelationshipFixture;
use tests\codeception\frontend\FunctionalTester;
use yii\helpers\Url;

/**
 * Class TermCest
 *
 * @package tests\codeception\frontend\functional
 * @author  Agiel K. Saputra <13nightevil@gmail.com>
 * @since   0.1.2
 */
class TermCest
{
    /**
     * This method is called before each cest class test method
     *
     * @param FunctionalTester $I
     */
    public function _before($I)
    {
        $postTypeFixture = new PostTypeFixture();
        $postTypeFixture->load();

        $taxonomyFixture = new TaxonomyFixture();
        $taxonomyFixture->load();

        $postTypeTaxonomyFixture = new PostTypeTaxonomyFixture();
        $postTypeTaxonomyFixture->load();

        $termFixture = new TermFixture();
        $termFixture->load();

        $postFixture = new PostFixture();
        $postFixture->load();

        $termRelationshipFixture = new TermRelationshipFixture();
        $termRelationshipFixture->load();

        $postCommentFixture = new PostCommentFixture();
        $postCommentFixture->load();
    }

    /**
     * This method is called after each cest class test method, even if test failed.
     *
     * @param FunctionalTester $I
     */
    public function _after($I)
    {
    }

    /**
     * This method is called when test fails.
     *
     * @param FunctionalTester $I
     */
    public function _failed($I)
    {
    }

    /**
     * @param FunctionalTester $I
     */
    public function testView(FunctionalTester $I){
        $I->wantTo('ensure that term view page works');

        $I->amOnPage(Url::to(['/term/view', 'id'=>1]));
        $I->see('Category: Sample Category', 'h1');
        $I->seeLink('Sample Post');

        $I->amOnPage(Url::to(['/term/view', 'term_slug' => 'sample-category']));
        $I->see('Category: Sample Category', 'h1');
        $I->seeLink('Sample Post');
    }
}