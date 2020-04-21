<?php
require_once 'init.php';

switch ($action) {
    default :
        include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->generateView ();
        break;
    case 'calcCompute' :
        include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->process ();
        break;
    case 'action1' :
        break;
    case 'action2' :
        break;
}
