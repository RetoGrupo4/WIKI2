<?php
/* Smarty version 3.1.32, created on 2018-10-18 11:23:12
  from '/var/www/html/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc85100614e04_12707187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c57d521f48c9387410c4fbec3d93de882f8a3e57' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/page.tpl',
      1 => 1537364655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc85100614e04_12707187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3996155415bc8510060f7f3_75065716', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14955724005bc85100610698_79318802 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_6634753365bc8510060fe91_32882704 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14955724005bc85100610698_79318802', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_3992206875bc85100612295_59500974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_3998722605bc85100612b40_15848359 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_181841275bc85100611c74_58119756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3992206875bc85100612295_59500974', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3998722605bc85100612b40_15848359', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2337591915bc85100613eb3_82736627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11385148665bc851006138a6_61999887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2337591915bc85100613eb3_82736627', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3996155415bc8510060f7f3_75065716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3996155415bc8510060f7f3_75065716',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_6634753365bc8510060fe91_32882704',
  ),
  'page_title' => 
  array (
    0 => 'Block_14955724005bc85100610698_79318802',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_181841275bc85100611c74_58119756',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3992206875bc85100612295_59500974',
  ),
  'page_content' => 
  array (
    0 => 'Block_3998722605bc85100612b40_15848359',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11385148665bc851006138a6_61999887',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2337591915bc85100613eb3_82736627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6634753365bc8510060fe91_32882704', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181841275bc85100611c74_58119756', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11385148665bc851006138a6_61999887', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
