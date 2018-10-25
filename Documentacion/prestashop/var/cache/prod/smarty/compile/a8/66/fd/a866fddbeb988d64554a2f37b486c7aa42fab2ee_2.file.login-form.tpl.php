<?php
/* Smarty version 3.1.32, created on 2018-10-18 11:23:32
  from '/var/www/html/prestashop/themes/classic/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc85114bcc9b1_01589434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a866fddbeb988d64554a2f37b486c7aa42fab2ee' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/customer/_partials/login-form.tpl',
      1 => 1537364655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5bc85114bcc9b1_01589434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20236831955bc85114bc09b6_03912569', 'login_form');
?>

<?php }
/* {block 'login_form_errors'} */
class Block_3845404545bc85114bc11b8_32534970 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_20704714835bc85114bc34c1_43957764 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_12329246795bc85114bc7aa3_28255753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_2641488505bc85114bc4953_60976766 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12329246795bc85114bc7aa3_28255753', 'form_field', $this->tplIndex);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_5984312265bc85114bcb1b0_70024380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_18846505545bc85114bcab57_22503798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-sm-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5984312265bc85114bcb1b0_70024380', 'form_buttons', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_20236831955bc85114bc09b6_03912569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_20236831955bc85114bc09b6_03912569',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_3845404545bc85114bc11b8_32534970',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_20704714835bc85114bc34c1_43957764',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_2641488505bc85114bc4953_60976766',
  ),
  'form_field' => 
  array (
    0 => 'Block_12329246795bc85114bc7aa3_28255753',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_18846505545bc85114bcab57_22503798',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_5984312265bc85114bcb1b0_70024380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3845404545bc85114bc11b8_32534970', 'login_form_errors', $this->tplIndex);
?>


  <form id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20704714835bc85114bc34c1_43957764', 'login_form_actionurl', $this->tplIndex);
?>
" method="post">

    <section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2641488505bc85114bc4953_60976766', 'login_form_fields', $this->tplIndex);
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18846505545bc85114bcab57_22503798', 'login_form_footer', $this->tplIndex);
?>


  </form>
<?php
}
}
/* {/block 'login_form'} */
}
