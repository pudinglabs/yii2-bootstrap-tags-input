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
 * @author Mustoharin mustoharin@yahoo.com
 * @since 1.0
 */
class TagsInputAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-tagsinput';

    public $js = [
    	'js/dist/bootstrap-tagsinput.js'
    ];

    public $css = [
    	'js/dist/bootstrap-tagsinput.css'
    ];
    
    public $depends = [
    	'yii\web\JqueryAsset'
    ];
}
