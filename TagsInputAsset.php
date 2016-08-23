<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace pudinglabs\tagsinput;

use yii\web\AssetBundle;

/**
 * 
 * @author Mustoharin admin@pudinglabs.web.id
 * @since 1.0
 */
class TagsInputAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-tagsinput';

    public $js = [
    	'dist/bootstrap-tagsinput.js'
    ];

    public $css = [
    	'dist/bootstrap-tagsinput.css'
    ];
    
    public $depends = [
    	'yii\web\JqueryAsset'
    ];
}
