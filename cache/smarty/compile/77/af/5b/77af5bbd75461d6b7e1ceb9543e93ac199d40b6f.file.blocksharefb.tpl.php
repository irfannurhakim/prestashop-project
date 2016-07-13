<?php /* Smarty version Smarty-3.1.19, created on 2016-07-03 01:51:25
         compiled from "/var/www/html/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16852662405778d20dab5897-54269671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77af5bbd75461d6b7e1ceb9543e93ac199d40b6f' => 
    array (
      0 => '/var/www/html/modules/blocksharefb/blocksharefb.tpl',
      1 => 1467187190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16852662405778d20dab5897-54269671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5778d20dab9ea4_02288626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778d20dab9ea4_02288626')) {function content_5778d20dab9ea4_02288626($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="_blank"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
