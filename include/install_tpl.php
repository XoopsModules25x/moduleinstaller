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
 * Installer template file
 *
 * See the enclosed file license.txt for licensing information.
 * If you did not receive this file, get it at http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @copyright   XOOPS Project (http://xoops.org)
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      Kris <kris@frxoops.org>
 * @author      DuGris (aka L. JEN) <dugris@frxoops.org>
 **/

defined('XOOPS_INSTALL') || die('XOOPS Installation wizard die');

include_once dirname(dirname(dirname(__DIR__))) . '/language/' . $wizard->language . '/global.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo _LANGCODE; ?>" lang="<?php echo _LANGCODE; ?>">

<head>
    <title>
        <?php echo XOOPS_VERSION . ' : ' . XOOPS_INSTALL_WIZARD; ?>
        (<?php echo ($wizard->pageIndex + 1) . '/' . count($wizard->pages); ?>)
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo _INSTALL_CHARSET ?>"/>
    <link rel="shortcut icon" type="image/ico" href="../favicon.ico"/>
    <link charset="UTF-8" rel="stylesheet" type="text/css" media="all" href="assets/css/style.css"/>
    <?php
    if (file_exists('language/' . $wizard->language . '/style.css')) {
        echo '<link charset="UTF-8" rel="stylesheet" type="text/css" media="all" href="language/' . $wizard->language . '/style.css" />';
    } else {
        $xoTheme->addStylesheet(XOOPS_URL . '/modules/' . $xoopsModule->getVar('dirname') . '/assets/css/style.css');
    }
    ?>

    <script type="text/javascript" src="./../assets/js/prototype.js"></script>
    <script type="text/javascript" src="./../assets/js/xo-installer.js"></script>
</head>

<body>

<div id="xo-content">

    <form id='<?php echo $wizard->pages[$wizard->currentPage]['name']; ?>' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>

        <?php echo $content; ?>

        <div id="buttons">
            <?php if (@$pageHasForm) {
            ?>
            <button type="submit">
                <?php

                } else {
                ?>
                <button type="button" accesskey="n" onclick="location.href='<?php echo 'index.php';
                ?>'">
                    <?php

                    } ?>
                    <?php echo BUTTON_NEXT; ?>
                </button>
        </div>
    </form>

</div>
</body>
</html>
