<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 15:21:44
         compiled from "views/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18800215835609039d783e43-54779158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5abde709b61a24bcb481c41b799b146cd662fe' => 
    array (
      0 => 'views/pagination.tpl',
      1 => 1443963014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18800215835609039d783e43-54779158',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5609039d7870d1_31431481',
  'variables' => 
  array (
    'pages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5609039d7870d1_31431481')) {function content_5609039d7870d1_31431481($_smarty_tpl) {?><div id="paginationnews">
    <ul>
      <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
      <li>
        <a href="?page=home&page_nr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="pagenum<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
      </li>
      <?php }} ?>
    </ul>
</div>
<?php }} ?>
