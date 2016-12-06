<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 14:53:59
         compiled from "views\active.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21865561111f08941f9-24812449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4651ca9ed54382abb4680a3902b8c98b928a13ab' => 
    array (
      0 => 'views\\active.tpl',
      1 => 1443963234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21865561111f08941f9-24812449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561111f089b4d4_01643302',
  'variables' => 
  array (
    'page' => 0,
    'number' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561111f089b4d4_01643302')) {function content_561111f089b4d4_01643302($_smarty_tpl) {?><style>
    a#p<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

    {
        border-bottom: 2px solid white;
    }
    <?php if (isset($_smarty_tpl->tpl_vars['number']->value)) {?>
    a#pagenum<?php echo $_smarty_tpl->tpl_vars['number']->value;?>

    {
      border-bottom: 2px solid white;
    }
    <?php }?>
</style>
<?php }} ?>
