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

use craft\elements\MatrixBlock;
use yesokolov\matrixblockuse\MatrixBlockUse;

use Craft;
use craft\web\Controller;
use craft\elements\Entry;
use yesokolov\matrixblockuse\assetbundles\matrixblockusecpsection\MatrixBlockUseCPSectionAsset;

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
    protected $allowAnonymous = ['index'];

    // Public Methods
    // =========================================================================

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $entries = Entry::findAll();
        $e = 0;
        foreach ($entries as $entry){
//            $rEntries[$e] = array('title' => $entry -> title, 'section' => $entry->section->name);

            $blocks = MatrixBlock::find()->owner($entry)->all();
            $b = 0;
            foreach($blocks as $block){
                $rBlocks[$block->type->name][$entry->section->name][] = $entry->title;
                $b++;
            }
            $e++;
        }
        return $this -> renderTemplate('matrix-block-use/matrix-block-use.twig', [ 'blocks' => $rBlocks ]);
    }
}
