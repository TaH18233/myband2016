<?php /* Smarty version Smarty-3.1.18, created on 2016-10-05 16:06:41
         compiled from "views/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:926714495561127f65ea147-87581389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad77a03206b670fbd775331b985abd5c190387c' => 
    array (
      0 => 'views/search.tpl',
      1 => 1475676396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '926714495561127f65ea147-87581389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561127f66480d3_35451437',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561127f66480d3_35451437')) {function content_561127f66480d3_35451437($_smarty_tpl) {?><style>
    #searchform{
        width: 20%;
        height: auto;
        margin-left: 45%;
        background-color: white;
    }
</style>

<form method="post" action="?page=search" id="searchform">
    <input type="text" name="searchval" id="searchtext" placeholder="Type for your search"/>
    <input type="submit" name="submit" value="SEARCH" id="searchsubmit"/>
</form>
<?php }} ?>
