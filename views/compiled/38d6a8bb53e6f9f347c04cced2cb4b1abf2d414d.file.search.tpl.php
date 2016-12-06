<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 15:03:13
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2344556112224a1ca77-31919307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1443963789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2344556112224a1ca77-31919307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56112224ad9a45_78547256',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56112224ad9a45_78547256')) {function content_56112224ad9a45_78547256($_smarty_tpl) {?>
<form method="post" action="?page=search" id="searchform">
  <input type="text" name="searchval" id="searchtext" placeholder="Type what you are searching for."/>
  <input type="submit" name="submit" value="SEARCH" id="searchsubmit"/>
</form>
<?php }} ?>
