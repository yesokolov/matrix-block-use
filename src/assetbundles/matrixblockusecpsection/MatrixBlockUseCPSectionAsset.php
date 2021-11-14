<?php
/**
 * Matrix Block Use plugin for Craft CMS 3.x
 *
 * Matrix  blocks use entries list
 *
 * @link      http://site.url
 * @copyright Copyright (c) 2021 Ye. Sokolov
 */

namespace yesokolov\matrixblockuse\assetbundles\matrixblockusecpsection;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Ye. Sokolov
 * @package   MatrixBlockUse
 * @since     0.0.1
 */
class MatrixBlockUseCPSectionAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@yesokolov/matrixblockuse/assetbundles/matrixblockusecpsection/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/MatrixBlockUse.js',
        ];

        $this->css = [
            'css/MatrixBlockUse.css',
        ];

        parent::init();
    }
}
