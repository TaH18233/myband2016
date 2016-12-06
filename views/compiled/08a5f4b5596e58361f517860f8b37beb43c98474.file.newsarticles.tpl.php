<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 23:41:09
         compiled from "views/newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26625272855ffd3ef1e0e99-64931865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a5f4b5596e58361f517860f8b37beb43c98474' => 
    array (
      0 => 'views/newsarticles.tpl',
      1 => 1444340467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26625272855ffd3ef1e0e99-64931865',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ffd3ef24a1e4_63209208',
  'variables' => 
  array (
    'data' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffd3ef24a1e4_63209208')) {function content_55ffd3ef24a1e4_63209208($_smarty_tpl) {?>
<section id="content">
    <section id="articles">
        <article>
    <?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>

        <h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
        <content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['text'];?>
</content>
    <?php } ?>
        </article>
    </section>
<?php }} ?>
