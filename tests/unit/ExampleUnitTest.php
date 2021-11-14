<?php
/**
 * Matrix Block Use plugin for Craft CMS 3.x
 *
 * Matrix  blocks use entries list
 *
 * @link      http://site.url
 * @copyright Copyright (c) 2021 Ye. Sokolov
 */

namespace yesokolov\matrixblockusetests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use yesokolov\matrixblockuse\MatrixBlockUse;

/**
 * ExampleUnitTest
 *
 *
 * @author    Ye. Sokolov
 * @package   MatrixBlockUse
 * @since     0.0.1
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            MatrixBlockUse::class,
            MatrixBlockUse::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
