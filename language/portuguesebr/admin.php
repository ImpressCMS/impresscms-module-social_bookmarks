<?php
/**
* $Id: admin.php 68 2008-02-09 17:10:51Z xoops-magazine $
* Module: social-bookmarks
* Author: Rene Sato <www.impresscms.de>
* Licence: GNU
*/

// --- define language begin ---
if( !defined('SOCIAL_BOOKMARKS_LANG_AM_LOADED') ) 
{
define('SOCIAL_BOOKMARKS_LANG_AM_LOADED', 1);

define('_MI_SOCIAL_BOOKMARKS_NAME','Social-Bookmarks');
define('_MI_SOCIAL_BOOKMARKS_DESC','Mostrar diversos Sociais Bookmarks em um bloco');

define("_SOCIAL_BOOKMARKS_MODIFSAVE","Banco de Dados atualizado corretamente!");
define("_SOCIAL_BOOKMARKS_MODULE_NAME","social_bookmarks");
define("_SOCIAL_BOOKMARKS_EDIT","Preferências");
define("_SOCIAL_BOOKMARKS_HELPTEXT1","<br /><br />Obrigado pela instalação. 
<br />Aqui é uma indicação de como o módulo pode ser utilizado.<br /><br />");
define("_SOCIAL_BOOKMARKS_HELPTEXT2","O módulo tem uma pequena administração, em que o Bookmarks pode ser criado. Este módulo pode ser utilizado, agora só deve ser visível para o bloco. Para fazer isso, apenas sobre as 'system admin &gt; blocks' 	
E depois ir ao bloco com o nome 'Social-Bookmarks'. Este bloco é agora na posição desejada e colocar activado. Ela então olha na casa como se segue:
<br /><img src='".XOOPS_URL."/modules/social_bookmarks/images/hilfe/sb-block_en.png' height='193' width='373' title='social bookmarks em um bloco'>");
define("_SOCIAL_BOOKMARKS_HELPTEXT3","Informações e baixar uma nova versão do: <a href='http://www.xoops-magazine.com/index.php?campaign=social_bookmarks/en/administartion' target='_blank' title='new window: XOOPS-magazine.com'>XOOPS-magazine.com</a>
<br /><br /><br /><small>Obrigado para <a href='http://www.laanix.de/showpost.php?p=196097&postcount=1' target='_blank' title='new window: laanix.de'>Schaum2</a>, <a href='http://www.lupusc.org' target='_blank' title='new window: lupusc.org'>LupusC</a>, <a href='http://www.myxoops.org/userinfo.php?uid=10094' target='_blank' title='new window: Muki'>Muki</a> and <a href='http://www.simple-xoops.de/' target='_blank' title='new window: Alfred'>Alfred</a></small>");
define("_SOCIAL_BOOKMARKS_SET_HELPINFO","O que é isto?");
}
// --- define language end ---
?>