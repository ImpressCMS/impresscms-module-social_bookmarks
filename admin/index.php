<?php
/**
* $Id: index.php 68 2008-02-09 17:10:51Z xoops-magazine $
* Module: social-bookmarks
* Author: Rene Sato <www.impresscms.de>
* Licence: GNU
*/

include ('admin_header.php');

$op = 'Choice';

if ( isset($HTTP_POST_VARS['op']) ) {
	$op = trim($HTTP_POST_VARS['op']);
} elseif ( isset($HTTP_GET_VARS['op']) ) {
	$op = trim($HTTP_GET_VARS['op']);
}

function Choice() {
	global $xoopsModule;
    	xoops_cp_header();

    	OpenTable();
    	global $xoopsModule;
  		echo "<strong>Social Bookmarks</strong> Version: " . round($xoopsModule->getVar('version') / 100, 2) ."<br />";
  		echo " "._SOCIAL_BOOKMARKS_HELPTEXT1. "<br />" ;
		echo " "._SOCIAL_BOOKMARKS_HELPTEXT2. "<br />" ;
		echo " "._SOCIAL_BOOKMARKS_HELPTEXT3. "<br />" ;
    	CloseTable();
    	xoops_cp_footer();
}

switch($op) {
	case "Config":
		Config();
		break;
	case "Save":
		Save($cfgCounter, $HTTP_POST_VARS["cfgTitleIndex"], $HTTP_POST_VARS["cfgImageIndex"], $HTTP_POST_VARS["cfgTitleItem"], $HTTP_POST_VARS["cfgImageItem"], $HTTP_POST_VARS["topics_array"]);
		break;
	default:
		Choice();
		break;
}
?>