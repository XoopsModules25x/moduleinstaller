<?php

// defined('XOOPS_ROOT_PATH') || die('Restricted access');

use XoopsModules\Moduleinstaller;

// require_once __DIR__ . '/../class/Helper.php';
//require_once __DIR__ . '/../include/common.php';
$helper = Moduleinstaller\Helper::getInstance();

$pathIcon32 = \Xmf\Module\Admin::menuIconPath('');
$pathModIcon32 = $helper->getModule()->getInfo('modicons32');

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
