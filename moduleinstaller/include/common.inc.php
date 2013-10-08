<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * Installer common include file
 *
 * See the enclosed file license.txt for licensing information.
 * If you did not receive this file, get it at http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      DuGris (aka L. JEN) <dugris@frxoops.org>
 * @version     $Id: common.inc.php 10042 2012-08-08 22:34:35Z beckmi $
**/

/**
 * If non-empty, only this user can access this installer
 */
define('INSTALL_USER', '');
define('INSTALL_PASSWORD', '');

define('XOOPS_INSTALL', 1);

// options for mainfile.php
if (empty($xoopsOption['hascommon'])) {
    $xoopsOption['nocommon'] = true;
    session_start();
}
include_once '../../../mainfile.php';
if (!defined("XOOPS_ROOT_PATH")) {
    define("XOOPS_ROOT_PATH", str_replace("\\", "/", realpath('../')));
}
/*
error_reporting( 0 );
if (isset($xoopsLogger)) {
    $xoopsLogger->activated = false;
}
error_reporting(E_ALL);
$xoopsLogger->activated = true;
*/

include './../class/installwizard.php';
include_once '../../../include/version.php';
include_once '../../../include/functions.php';
include_once '../../../class/module.textsanitizer.php';

$pageHasHelp = false;
$pageHasForm = false;

$wizard = new XoopsInstallWizard();
if (!$wizard->xoInit()) {
    exit();
}

if (!@is_array($_SESSION['settings'])) {
    $_SESSION['settings'] = array();
}

?>