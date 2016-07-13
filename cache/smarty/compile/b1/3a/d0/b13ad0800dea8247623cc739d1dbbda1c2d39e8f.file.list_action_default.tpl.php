<?php /* Smarty version Smarty-3.1.19, created on 2016-07-03 02:43:43
         compiled from "/var/www/html/admin805iduuwe/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1588790065778de4f23d830-08547031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b13ad0800dea8247623cc739d1dbbda1c2d39e8f' => 
    array (
      0 => '/var/www/html/admin805iduuwe/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1435853688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1588790065778de4f23d830-08547031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5778de4f249d72_46506811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778de4f249d72_46506811')) {function content_5778de4f249d72_46506811($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
