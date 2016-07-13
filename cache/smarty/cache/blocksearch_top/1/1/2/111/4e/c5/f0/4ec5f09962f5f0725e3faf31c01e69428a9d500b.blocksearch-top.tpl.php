<?php /*%%SmartyHeaderCode:14549279195778cda3972533-87262468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ec5f09962f5f0725e3faf31c01e69428a9d500b' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1435853690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14549279195778cda3972533-87262468',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5783985a58e998_81029573',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783985a58e998_81029573')) {function content_5783985a58e998_81029573($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//13.76.35.172/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Cari" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Cari</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
