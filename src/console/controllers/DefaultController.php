<?php
/**
 * Matrix Block Use plugin for Craft CMS 3.x
 *
 * Matrix  blocks use entries list
 *
 * @link      http://site.url
 * @copyright Copyright (c) 2021 Ye. Sokolov
 */

namespace yesokolov\matrixblockuse\console\controllers;

use yesokolov\matrixblockuse\MatrixBlockUse;

use Craft;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Default Command
 *
 * @author    Ye. Sokolov
 * @package   MatrixBlockUse
 * @since     0.0.1
 */
class DefaultController extends Controller
{
    // Public Methods
    // =========================================================================

    /**
     * Handle matrix-block-use/default console commands
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'something';

        echo "Welcome to the console DefaultController actionIndex() method\n";

        return $result;
    }

    /**
     * Handle matrix-block-use/default/do-something console commands
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'something';

        echo "Welcome to the console DefaultController actionDoSomething() method\n";

        return $result;
    }
}
