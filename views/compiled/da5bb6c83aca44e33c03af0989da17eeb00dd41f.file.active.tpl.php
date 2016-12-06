<?php /* Smarty version Smarty-3.1.18, created on 2016-11-04 00:58:03
         compiled from "views/active.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172181005556110ffc25f0a5-28961713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da5bb6c83aca44e33c03af0989da17eeb00dd41f' => 
    array (
      0 => 'views/active.tpl',
      1 => 1478217459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172181005556110ffc25f0a5-28961713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56110ffc2e80c7_07786938',
  'variables' => 
  array (
    'page' => 0,
    'number' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56110ffc2e80c7_07786938')) {function content_56110ffc2e80c7_07786938($_smarty_tpl) {?><style>
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
