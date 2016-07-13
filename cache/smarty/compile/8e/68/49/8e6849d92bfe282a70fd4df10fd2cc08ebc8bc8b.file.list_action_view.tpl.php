<?php /* Smarty version Smarty-3.1.19, created on 2016-07-04 20:14:02
         compiled from "/var/www/html/admin805iduuwe/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1668288170577b25fa24cbd3-65354606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e6849d92bfe282a70fd4df10fd2cc08ebc8bc8b' => 
    array (
      0 => '/var/www/html/admin805iduuwe/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1435853688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1668288170577b25fa24cbd3-65354606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577b25fa258ed4_36327633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577b25fa258ed4_36327633')) {function content_577b25fa258ed4_36327633($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
