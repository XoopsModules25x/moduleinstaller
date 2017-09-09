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

$adminmenu[] = [
    'title' => _MI_INSTALLER_MENU_00,
    'link'  => 'admin/index.php',
    'icon'  => $pathIcon32 . '/home.png',
];

$adminmenu[] = [
    'title' => _MI_INSTALLER_MENU_01,
    'link'  => 'admin/install.php',
    'icon'  => $pathIcon32 . '/add.png',
];

$adminmenu[] = [
    'title' => _MI_INSTALLER_MENU_03,
    'link'  => 'admin/update.php',
    'icon'  => $pathIcon32 . '/update.png',
];

$adminmenu[] = [
    'title' => _MI_INSTALLER_MENU_02,
    'link'  => 'admin/uninstall.php',
    'icon'  => $pathIcon32 . '/delete.png',
];

$adminmenu[] = [
    'title' => _MI_INSTALLER_ADMIN_ABOUT,
    'link'  => 'admin/about.php',
    'icon'  => $pathIcon32 . '/about.png',
];
