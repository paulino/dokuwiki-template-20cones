<?php

/**
 * Default options for the "20cones template" DokuWiki template
 *
 * Read the README for details of howto config this template.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Paulino Ruiz de Clavijo Vázquez <paulino@dte.us.es>
 * @link http://www.dokuwiki.org/template:20cones
 */


if (!defined("DOKU_INC")){
    die();
}

$meta["20cones_htmltopbar"] = array("onoff"); // TRUE: Use html fixed or wiki page for topbar
$meta["20cones_pagetopbar"] = array("string"); // pagename
$meta["20cones_showdokutitle"] = array("onoff");