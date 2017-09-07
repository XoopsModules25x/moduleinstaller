<?php

// defined('XOOPS_ROOT_PATH') || exit('Restricted access.');

$moduleDirName = basename(dirname(__DIR__));

if (false !== ($moduleHelper = Xmf\Module\Helper::getHelper($moduleDirName))) {
} else {
    $moduleHelper = Xmf\Module\Helper::getHelper('system');
}

$pathIcon32 = \Xmf\Module\Admin::menuIconPath('');
//$pathModIcon32 = $moduleHelper->getModule()->getInfo('modicons32');

$moduleHelper->loadLanguage('modinfo');

$adminmenu = [];

$i                      = 1;
$adminmenu[$i]['title'] = _MI_INSTALLER_MENU_00;
$adminmenu[$i]['link']  = 'admin/index.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/home.png';
++$i;
$adminmenu[$i]['title'] = _MI_INSTALLER_MENU_01;
$adminmenu[$i]['link']  = 'admin/install.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/add.png';
++$i;
$adminmenu[$i]['title'] = _MI_INSTALLER_MENU_03;
$adminmenu[$i]['link']  = 'admin/update.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/update.png';
++$i;
$adminmenu[$i]['title'] = _MI_INSTALLER_MENU_02;
$adminmenu[$i]['link']  = 'admin/uninstall.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/delete.png';
++$i;
$adminmenu[$i]['title'] = _MI_INSTALLER_ADMIN_ABOUT;
$adminmenu[$i]['link']  = 'admin/about.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/about.png';
