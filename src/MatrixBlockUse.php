<?php
/**
 * Matrix Block Use plugin for Craft CMS 3.x
 *
 * Matrix  blocks use entries list
 *
 * @link      http://site.url
 * @copyright Copyright (c) 2021 Ye. Sokolov
 */

namespace yesokolov\matrixblockuse;


use Craft;
use craft\base\Plugin;
<<<<<<< HEAD
=======
use craft\elements\Entry;
use craft\elements\MatrixBlock;
>>>>>>> 587dbf9 (to pull)
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\console\Application as ConsoleApplication;
use craft\web\UrlManager;
use craft\events\RegisterUrlRulesEvent;
<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
>>>>>>> 587dbf9 (to pull)

use yii\base\Event;

/**
 * Class MatrixBlockUse
 *
 * @author    Ye. Sokolov
 * @package   MatrixBlockUse
 * @since     0.0.1
 *
 */
class MatrixBlockUse extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var MatrixBlockUse
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '0.0.1';

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    /**
     * @var bool
     */
    public $hasCpSection = true;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        if (Craft::$app instanceof ConsoleApplication) {
            $this->controllerNamespace = 'yesokolov\matrixblockuse\console\controllers';
        }

        Event::on(
            UrlManager::class,
            UrlManager::EVENT_REGISTER_CP_URL_RULES,
            function (RegisterUrlRulesEvent $event) {
                $event->rules['matrix-block-use'] = 'matrix-block-use/main';
            }
        );
<<<<<<< HEAD
=======
        Event::on(
            UrlManager::class,
            UrlManager::EVENT_REGISTER_CP_URL_RULES,
            function (RegisterUrlRulesEvent $event) {
                $event->rules['matrix-block-use/generate-excel'] = 'matrix-block-use/main/generate-excel';
            }
        );
>>>>>>> 587dbf9 (to pull)

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'matrix-block-use',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================
<<<<<<< HEAD

=======
    public static function getData(){
        $entries = Entry::findAll();
        $e = 0;
        foreach ($entries as $entry){
            $blocks = MatrixBlock::find()->owner($entry)->all();
            $b = 0;
            foreach($blocks as $block){
                $rBlocks[$block->type->name][$entry->section->name][$entry->title] = array('url' => $entry->getUrl(), 'title' =>$entry->title);
                $b++;
            }
            $e++;
        }
        return $rBlocks;
    }
    public static function generateExcel($data){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $letters = array('','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $rowNum = 1;
        foreach (array_keys($data) as $block){
            $blockCell = 'A'.$rowNum;
            $sheet->setCellValue($blockCell, $block);
            foreach (array_keys($data[$block]) as $section){
                $sectionCell = 'B'.$rowNum;
                $sheet->setCellValue($sectionCell, $section);
                foreach ($data[$block][$section] as $entry) {
                    $entryCell = 'C'.$rowNum;
                    $entryLink = $entry['title'];
                    $spreadsheet->getActiveSheet()->setCellValue($entryCell, $entryLink);
                    $spreadsheet->getActiveSheet()->getCell($entryCell)->getHyperlink()->setUrl($entry['url']);

                    $rowNum++;
                }
                $rowNum++;
            }
            $rowNum++;
        }
        $writer = new Xlsx($spreadsheet);

        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        return $writer;
    }
>>>>>>> 587dbf9 (to pull)
}
