<?php
/**
 * Matrix Block Use plugin for Craft CMS 3.x
 *
 * Matrix  blocks use entries list
 *
 * @link      http://site.url
 * @copyright Copyright (c) 2021 Ye. Sokolov
 */

namespace yesokolov\matrixblockuse\controllers;

use yesokolov\matrixblockuse\MatrixBlockUse;

use Craft;
use craft\web\Controller;

/**
 * @author    Ye. Sokolov
 * @package   MatrixBlockUse
 * @since     0.0.1
 */
class MainController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the MainController actionIndex() method';

        return $result;
    }

    /**
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the MainController actionDoSomething() method';

        return $result;
    }
}
