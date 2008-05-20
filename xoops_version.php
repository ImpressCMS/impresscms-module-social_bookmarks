<?php
/**
* $Id: xoops_version.php 68 2008-02-09 17:10:51Z xoops-magazine $
* Module: social-bookmarks
* Author: Rene Sato <www.impresscms.de>
* Licence: GNU
*/

$SOCIAL_BOOKMARKS_DIRNAME   = basename( dirname( __FILE__ ) );
$SOCIAL_BOOKMARKS_ROOT_PATH = XOOPS_ROOT_PATH.'/modules/'.$SOCIAL_BOOKMARKS_DIRNAME;
$SOCIAL_BOOKMARKS_URL       = XOOPS_URL.'/modules/'.$SOCIAL_BOOKMARKS_DIRNAME;

if( ! preg_match( '/^(\D+)(\d*)$/' , $SOCIAL_BOOKMARKS_DIRNAME , $regs ) )
{	echo ( 'invalid dirname: ' . htmlspecialchars( $SOCIAL_BOOKMARKS_DIRNAME ) );	}
$SOCIAL_BOOKMARKS_NUMBER = $regs[2] === '' ? '' : intval( $regs[2] ) ;

if ( $regs[1] == 'social_bookmarks' )
{
	$name_ext = ' '.$SOCIAL_BOOKMARKS_NUMBER;
}
else
{
	$name_ext = ':'.$SOCIAL_BOOKMARKS_DIRNAME;
}

$modversion['name'] = _MI_SOCIAL_BOOKMARKS_NAME.$name_ext;
$modversion['version'] = 0.4;
$modversion['description'] = _MI_SOCIAL_BOOKMARKS_DESC;
$modversion['credits'] = '';
$modversion['author']   = "Rene Sato | ImpressCMS.de";
$modversion['help'] = '';
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['image']    = 'images/'.$SOCIAL_BOOKMARKS_DIRNAME.'_slogo.png';
$modversion['iconsmall'] = "images/social_iconsmall.png";
$modversion['iconbig'] = "images/social_iconbig.png";
$modversion['dirname']  = $SOCIAL_BOOKMARKS_DIRNAME;

// Admin
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Menu
$modversion['hasMain'] = 1;

// Search
$modversion['hasSearch'] = 0;

// Blocks
$modversion['blocks'][1]['file'] = "social_bookmarks.php";
$modversion['blocks'][1]['name'] = _MB_SOCIAL_BOOKMARKS_NAME;
$modversion['blocks'][1]['template'] = "social_bookmarks_all.html";
$modversion['blocks'][1]['description'] = _MB_SOCIAL_BOOKMARKS_DESC;
$modversion['blocks'][1]['show_func'] = "show_bookmarks";

// data for table 'config'
$i=1;
$modversion['config'][$i]['name']		= 'book_wong';  // www.mister-wong.de/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_WONG";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_webnews';  // www.webnews.de/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_WEBNEWS";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_icio_de';  // www.icio.de/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_ICIO_DE";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_oneview';  // beta.oneview.de/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_ONEVIEW";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_folkd';  // www.folkd.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_FOLKD";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_yigg';  // yigg.de/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_YIGG";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_linkarena';  // www.linkarena.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_LINKARENA";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_digg';  // digg.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_DIGG";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_icio_us';  // del.icio.us/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_ICIO_US";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_reddit';  // http://reddit.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_REDDIT";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_simpy';  // http://www.simpy.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_SIMPY";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_stumbleupon';  // www.stumbleupon.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_STUMBLEUPON";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_slashdot';  // slashdot.org/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_SLASHDOT";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_netscape';  // www.netscape.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_NETSCAPE";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_furl';  // www.furl.net/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_FURL";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_yahoo';  // www.yahoo.com
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_YAHOO";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_spurl';  // www.spurl.net
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_SPURL";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_google';  // www.google.com
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_GOOGLE";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_blinklist';  // www.blinklist.com
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_BLINKLIST";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_blogmarks_net';  //  blogmarks.net/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_BLOGMARKS";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_diigo_us';  // www.diigo.com
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_DIIGO";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_technorati';  // www.technorati.com
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_TECHNORATI";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_newsvine';  // www.newsvine.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_NEWSVINE";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_blinkbits';  // www.blinkbits.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_BLINKBITS";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_gnolia';  // ma.gnolia.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_GNOLIA";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_smarking';  // smarking.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_SMARKING";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_netvouz';  // www.netvouz.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_NET_VOUZ";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_facebook';  // www.facebook.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_FACEBOOK";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

$i++;
$modversion['config'][$i]['name']		= 'book_ask';  // www.ask.com/
$modversion['config'][$i]['title']		= "_MD_BOOKMARKS_LI_ASK";
$modversion['config'][$i]['formtype']	= 'yesno';
$modversion['config'][$i]['valuetype']	= 'int';
$modversion['config'][$i]['default']	= 1;
$modversion['config'][$i]['description']= '';

unset($i);

?>