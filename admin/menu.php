<?php

//use XoopsModules\Moduleinstaller;

use Xmf\Module\Admin;
use XoopsModules\Moduleinstaller\Helper;

include dirname(__DIR__) . '/preloads/autoloader.php';

$moduleDirName      = basename(dirname(__DIR__));
$moduleDirNameUpper = mb_strtoupper($moduleDirName);
/** @var \XoopsModules\Moduleinstaller\Helper $helper */
$helper = Helper::getInstance();
$helper->loadLanguage('common');
$helper->loadLanguage('feedback');

$pathIcon32 = Admin::menuIconPath('');
if (is_object($helper->getModule())) {
    $pathModIcon32 = $helper->url($helper->getModule()->getInfo('modicons32'));
}

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
    'title' => _MI_INSTALLER_MENU_04,
    'link'  => 'admin/activate.php',
    'icon'  => $pathIcon32 . '/button_ok.png',
];

$adminmenu[] = [
    'title' => _MI_INSTALLER_MENU_05,
    'link'  => 'admin/deactivate.php',
    'icon'  => $pathIcon32 . '/link_break.png',
];

$adminmenu[] = [
    'title' => _MI_INSTALLER_ADMIN_ABOUT,
    'link'  => 'admin/about.php',
    'icon'  => $pathIcon32 . '/about.png',
];
