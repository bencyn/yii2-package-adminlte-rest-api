<?php

namespace api\assets;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $js = [
        'datatables/dataTables.bootstrap.min.js',
        'jvectormap/jquery-jvectormap-1.2.2.min.js',
        'jvectormap/jquery-jvectormap-world-mill-en.js',
        'chart.js/Chart.js'

        // more plugin Js here
    ];
    public $css = [
        'datatables/dataTables.bootstrap.css',
        'jvectormap/jquery-jvectormap-1.2.2.css',
        'Ionicons/css/ionicons.min.css'

        // more plugin CSS here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}

?>