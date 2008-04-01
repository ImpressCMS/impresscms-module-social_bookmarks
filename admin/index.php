<?php
/**
* $Id: index.php 68 2008-02-09 17:10:51Z xoops-magazine $
* Module: social-bookmarks
* Author: Rene Sato <www.impresscms.de>
* Licence: GNU
*/

include ('admin_header.php');

$op = 'Choice';

if ( isset($_POST['op']) ) {
	$op = trim($_POST['op']);
} elseif ( isset($_GET['op']) ) {
	$op = trim($_GET['op']);
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
		Save($cfgCounter, $_POST["cfgTitleIndex"], $_POST["cfgImageIndex"], $_POST["cfgTitleItem"], $_POST["cfgImageItem"], $_POST["topics_array"]);
		break;
	default:
		Choice();
		break;
}
?>