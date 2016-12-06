<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 14:49:36
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10012561111f08f1916-47866819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1443962961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10012561111f08f1916-47866819',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561111f0908af1_54647951',
  'variables' => 
  array (
    'data' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561111f0908af1_54647951')) {function content_561111f0908af1_54647951($_smarty_tpl) {?>
<section id="content">
    <section id="articles">
        <article>
    <?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>

        <h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
 <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
        <content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
    <?php } ?>
        </article>
    </section>
<?php }} ?>
