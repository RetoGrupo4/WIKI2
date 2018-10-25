<?php
/* Smarty version 3.1.32, created on 2018-10-18 11:23:58
  from '/var/www/html/prestashop/themes/classic/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc8512ed11098_48430964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5071c65143f9062cedd01639c15c77482ef8321e' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/contact.tpl',
      1 => 1537364655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc8512ed11098_48430964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1204663295bc8512ed0ae12_68839455', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13354056345bc8512ed0c083_83671281', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5088365535bc8512ed0fc68_74842571', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_1204663295bc8512ed0ae12_68839455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_1204663295bc8512ed0ae12_68839455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'left_column'} */
class Block_13354056345bc8512ed0c083_83671281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_13354056345bc8512ed0c083_83671281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="left-column" class="col-xs-12 col-sm-3">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'left_column'} */
/* {block 'page_content'} */
class Block_5088365535bc8512ed0fc68_74842571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_5088365535bc8512ed0fc68_74842571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
}
