<?php /* Smarty version Smarty-3.1.18, created on 2015-10-09 09:06:12
         compiled from "views/searchres.tpl" */ ?>
<?php /*%%SmartyHeaderCode:512509079561132b4cc2262-21801341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9479409b74c9766d5828983a8891cc01e883fbe1' => 
    array (
      0 => 'views/searchres.tpl',
      1 => 1444374369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '512509079561132b4cc2262-21801341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561132b4dc6621_17561782',
  'variables' => 
  array (
    'searchval' => 0,
    'result' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561132b4dc6621_17561782')) {function content_561132b4dc6621_17561782($_smarty_tpl) {?><style>
    .article{
        color:white;
        text-align: center;
    }
    #searchval{
        color: red;
        text-align: center;
        text-shadow: 8px 7px 8px yellow;
    }
</style>

<section>
<h1 id="searchval"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['searchval']->value, 'UTF-8');?>
</h1>
<?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value) {
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>

<div class="article">
<h1 class="articletitle"><?php echo ucfirst($_smarty_tpl->tpl_vars['newsItem']->value['title']);?>
</h1>
<p class="articletext"><b><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['text'];?>
</b></p>
</div>

<?php } ?>
</section>
<?php }} ?>
