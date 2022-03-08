<?php declare(strict_types=1);
/**
 * ****************************************************************************
 * ModuleInstaller - MODULE FOR XOOPS
 * Copyright (c) Michael Beck (mamba)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Michael Beck (mamba)
 * @license         https://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @author          Michael Beck (mamba)
 *
 * ****************************************************************************
 */

require_once __DIR__ . '/preloads/autoloader.php';

$moduleDirName = basename(__DIR__);

$modversion['version']             = '1.5.1';
$modversion['module_status']       = 'Beta 1';
$modversion['release_date']        = '2022/02/20';
$modversion['name']                = _MI_INSTALLER_NAME;
$modversion['description']         = _MI_INSTALLER_DESC;
$modversion['author']              = 'Michael Beck';
$modversion['nickname']            = 'Mamba';
$modversion['credit']              = 'XOOPS Development Team';
$modversion['credits']             = 'XOOPS Development Team Credits';
$modversion['help']                = 'page=help';
$modversion['license']             = 'GNU GPL 2.0';
$modversion['license_url']         = 'www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']            = 1; //1 indicates supported by XOOPS Dev Team, 0 means 3rd party supported
$modversion['image']               = 'assets/images/logoModule.png';
$modversion['dirname']             = basename(__DIR__);
$modversion['modicons16']          = 'assets/images/icons/16';
$modversion['modicons32']          = 'assets/images/icons/32';
$modversion['module_website_url']  = 'www.xoops.org/';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '7.4';
$modversion['min_xoops']           = '2.5.10';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = ['mysql' => '5.5'];

// SQL Tables
// $modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
// $modversion['tables'][0] = 'installer';

// Admin menu
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';
$modversion['hasMain']    = 0;
// Set to 1 if you want to display menu generated by system module
$modversion['system_menu'] = 1;

// Search
$modversion['hasSearch'] = 0;

// Smarty
$modversion['use_smarty'] = 1;
