<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 15:03:17
         compiled from "views\searchres.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1858756112395bc15e8-44960867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f2841cb848396c0ae9f703f74c18616b5b2d1ee' => 
    array (
      0 => 'views\\searchres.tpl',
      1 => 1443963363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858756112395bc15e8-44960867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchval' => 0,
    'result' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56112395c516f0_56872227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56112395c516f0_56872227')) {function content_56112395c516f0_56872227($_smarty_tpl) {?><section>
<h1 id="searchval"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['searchval']->value, 'UTF-8');?>
</h1>
<?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value) {
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>

<div class="article" style="background-image:url(img/<?php echo $_smarty_tpl->tpl_vars['newsItem']->value['image'];?>
); background-repeat:no-repeat; background-size:cover;">
<h1 class="articletitle"><?php echo ucfirst($_smarty_tpl->tpl_vars['newsItem']->value['title']);?>
</h1>
<p class="articletext"><b><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['content'];?>
</b></p>
</div>

<?php } ?>
</section>
<?php }} ?>
