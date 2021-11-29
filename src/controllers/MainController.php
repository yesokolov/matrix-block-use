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
<<<<<<< HEAD
    protected $allowAnonymous = ['index'];
=======
    protected $allowAnonymous = ['index','generate-excel'];
>>>>>>> 587dbf9 (to pull)

    // Public Methods
    // =========================================================================

    /**
     * @return mixed
     */
    public function actionIndex()
    {
<<<<<<< HEAD
        $entries = Entry::findAll();
        $e = 0;
        foreach ($entries as $entry){
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
=======
        $rBlocks = MatrixBlockUse::getData();
        return $this -> renderTemplate('matrix-block-use/matrix-block-use.twig', [ 'blocks' => $rBlocks ]);
    }
    public function actionGenerateExcel(){
        $rBlocks = MatrixBlockUse::getData();
        $excelFile = MatrixBlockUse::generateExcel($rBlocks);
        $excelFile -> save('excel-file.xlsx');
        return $this->redirect('excel-file.xlsx');
    }
>>>>>>> 587dbf9 (to pull)
}
