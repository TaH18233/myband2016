<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 22:35:04
         compiled from "views/songs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1569723875610fd0a9ca414-20790144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce6145c11321a33d3b20b342c050f198f5bdc534' => 
    array (
      0 => 'views/songs.tpl',
      1 => 1444336499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1569723875610fd0a9ca414-20790144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5610fd0aa81ec0_11458365',
  'variables' => 
  array (
    'pages' => 0,
    'i' => 0,
    'result' => 0,
    'games' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5610fd0aa81ec0_11458365')) {function content_5610fd0aa81ec0_11458365($_smarty_tpl) {?><style>
    .content{
        color white;
        margin: auto;
        width: 94%;
        height: auto;
        padding: 5px;
    }

    .video{
        width: 100%;
        height: 300px;
        margin: 30px 0;

    }

    .video iframe{
        float: left;
        margin-left: 2%;
        box-shadow: 0px 9px 10px -2px yellow;
    }

    .text{
        text-align: left;
        color: red;
        font-size: 20px;
        text-shadow: 8px 7px 8px yellow;
        float: right;
        width: 50%;
        height: 290px;
        padding: 5px;
        overflow: hidden;
    }

    .text p{
        text-shadow: none;
        float: left;
        color: white;
        width: 60%;
        margin: 20px auto;
        text-align: left;
        font-family: sans-serif;
    }

    @media (max-width: 700px) {
        .video iframe{
            width: 100%;
        }

        .text{
            margin-bottom: 20px;
            width: 100%;
            height: 200px;
        }
    }

    #img{
        width: 200px;
        height: 290px;
        float: right;
        box-shadow: 0px 9px 10px -2px yellow;
    }
</style>
<div id="paginationnews">
    <ul>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li>
                <a href="?page=games&page_nr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="pagenum<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
            </li>
        <?php }} ?>
    </ul>
</div>

<div class="content">
    <?php  $_smarty_tpl->tpl_vars['games'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['games']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['games']->key => $_smarty_tpl->tpl_vars['games']->value) {
$_smarty_tpl->tpl_vars['games']->_loop = true;
?>
        <div class="video">
            <iframe width="40%" height="100%" src="<?php echo $_smarty_tpl->tpl_vars['games']->value['video'];?>
" frameborder="0" allowfullscreen></iframe>
            <div class="text">
                <img id="img" src="images/gamecovers/<?php echo $_smarty_tpl->tpl_vars['games']->value['image'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['games']->value['title'];?>

                <?php echo $_smarty_tpl->tpl_vars['games']->value['info'];?>

            </div>
        </div>
    <?php } ?>


<?php }} ?>
