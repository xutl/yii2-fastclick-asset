<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\fastclick;

use yii\web\AssetBundle;

/**
 * Class FastclickAsset
 * @package xutl\fastclick
 */
class FastclickAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/fastclick/lib';

    /**
     * @inherit
     */
    public $js = [
        'fastclick.js',
    ];
}