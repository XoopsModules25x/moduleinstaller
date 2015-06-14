<?php
/**
 * Module Installer module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright	The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @package	    moduleinstaller
 * @since		1.0
 * @author 	    XOOPS Development Team
 * @version	$Id $
**/

require_once '../../../include/cp_header.php';
include 'admin_header.php';
xoops_cp_header();

    $indexAdmin = new ModuleAdmin();

    echo $indexAdmin->addNavigation('index.php');
    echo $indexAdmin->renderIndex();

include "admin_footer.php";
