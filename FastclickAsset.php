<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\fastclick;

use yii\web\AssetBundle;

class Asset extends AssetBundle
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