<?php /* Smarty version Smarty-3.1.19, created on 2016-07-03 02:42:59
         compiled from "/var/www/html/admin805iduuwe/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4277125115778de23120645-73581865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f551b8ae9d11e9cddf01b593f1172c5b093f96' => 
    array (
      0 => '/var/www/html/admin805iduuwe/themes/default/template/content.tpl',
      1 => 1435853688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4277125115778de23120645-73581865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5778de23125cb5_64031443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778de23125cb5_64031443')) {function content_5778de23125cb5_64031443($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
