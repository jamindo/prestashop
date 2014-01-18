<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 11:47:43
         compiled from "C:\xampp\htdocs\prestashop\modules\tgg_atos\admin-tpl\tgg_atos-back-admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25052d7b8cf5f5029-79914488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd920b34608df5a028af7d18a83eb67c4ba4da4ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\tgg_atos\\admin-tpl\\tgg_atos-back-admin.tpl',
      1 => 1389030508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25052d7b8cf5f5029-79914488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pos_select' => 0,
    'module_version' => 0,
    'validation_string' => 0,
    'errors' => 0,
    'error' => 0,
    'module_dir' => 0,
    'highlights' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7b8cfb03c54_02941494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7b8cfb03c54_02941494')) {function content_52d7b8cfb03c54_02941494($_smarty_tpl) {?>
<style type="text/css">
	#content label {
		width: 300px;
		clear: left;
		padding-top: 0.6em;
	}
	#content label.highlighted {color: #F00;}
	#content div.margin-form {
		padding-left: 320px;
		padding-top: 0.6em;
	}
	#content input[type='text'][disabled] {
		background-color: #CCC;
		border-color: #999;
	}
	#tab-pane-tgg_atos {width: 100%;}
</style>

<script type="text/javascript">
<!--
	var pos_select = <?php echo $_smarty_tpl->tpl_vars['pos_select']->value;?>
;
	function loadTab(id) {}

	if (helpboxes)
	{
	    $(function()
	    {
	        if ($('select'))
	        {
	            $('select').focus(function() { $(this).parent().find('.hint:first').css('display', 'block'); });
	            $('select').blur(function() { $(this).parent().find('.hint:first').css('display', 'none'); });
	        }
	    });
	}
	
//-->
</script>


<script src="../js/tabpane.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="../css/tabpane.css">
<h2><?php echo smartyTranslate(array('s'=>'Atos by TrogloGeek','mod'=>'tgg_atos'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['module_version']->value;?>
)</h2>

<?php if ($_smarty_tpl->tpl_vars['validation_string']->value){?>
	<div class="conf confirm">
		<h3><?php echo $_smarty_tpl->tpl_vars['validation_string']->value;?>
</h3>
	</div>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['errors']->value)){?>
	<div class="alert error" style="width: auto">
    	<h3><?php echo smartyTranslate(array('s'=>'There are some errors','mod'=>'tgg_atos'),$_smarty_tpl);?>
</h3>
        <ol>
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        	<li class="bullet"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
        <?php } ?>
        </ol>
    </div>
<?php }?>

<a href="http://prestashop.blog.capillotracteur.fr/category/modules/tgg-atos-sips-prestashop-module-gratuit/" target="_blank">
	<img src="../img/admin/world.gif" width="16" height="16" />
	<?php echo smartyTranslate(array('s'=>'Module\'s website','mod'=>'tgg_atos'),$_smarty_tpl);?>

</a>
-
<a href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
doc-atos-sips-prestashop.odt" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Read module documentation in Open Office format','mod'=>'tgg_atos'),$_smarty_tpl);?>
">
	<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
odt.gif" width="16" height="16" alt="<?php echo smartyTranslate(array('s'=>'ODT format (Open Office)','mod'=>'tgg_atos'),$_smarty_tpl);?>
" />
	<?php echo smartyTranslate(array('s'=>'Documentation (french version only)','mod'=>'tgg_atos'),$_smarty_tpl);?>

</a>
-
<a href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
doc-atos-sips-prestashop.pdf" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Read module documentation in PDF (Adobe Reader) format','mod'=>'tgg_atos'),$_smarty_tpl);?>
">
	<img src="../img/admin/pdf.gif" width="16" height="16" alt="<?php echo smartyTranslate(array('s'=>'PDF format (Adobe)','mod'=>'tgg_atos'),$_smarty_tpl);?>
" />
	<?php echo smartyTranslate(array('s'=>'Documentation (french version only)','mod'=>'tgg_atos'),$_smarty_tpl);?>

</a>

<br /><br />

<form action="<?php echo $_SERVER['REQUEST_URI'];?>
" enctype="multipart/form-data" method="post">
	<input type="hidden" name="tabs" id="tabs" value="0">
	<div class="tab-pane" id="tab-pane-tgg_atos">
		<div class="tab-page">
			<h4 class="tab"><?php echo smartyTranslate(array('s'=>'Basic','mod'=>'tgg_atos'),$_smarty_tpl);?>
<?php if (count($_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> (<?php echo count($_smarty_tpl->tpl_vars['highlights']->value['BASIC']);?>
)<?php }?></h2>
			<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_path']->value).('tgg_atos-back-admin-basic.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div style="clear: both; text-align: center;">
				<input type="submit" name="updateBasic" class="button" />
			</div>
		</div>
		<div class="tab-page">
			<h4 class="tab"><?php echo smartyTranslate(array('s'=>'Graphic','mod'=>'tgg_atos'),$_smarty_tpl);?>
<?php if (count($_smarty_tpl->tpl_vars['highlights']->value['GRAPHIC'])){?> (<?php echo count($_smarty_tpl->tpl_vars['highlights']->value['GRAPHIC']);?>
)<?php }?></h2>
			<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_path']->value).('tgg_atos-back-admin-graphic.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div style="clear: both; text-align: center;">
				<input type="submit" name="updateGraphic" class="button" />
			</div>
		</div>
		<div class="tab-page">
			<h4 class="tab"><?php echo smartyTranslate(array('s'=>'Advanced','mod'=>'tgg_atos'),$_smarty_tpl);?>
<?php if (count($_smarty_tpl->tpl_vars['highlights']->value['ADVANCED'])){?> (<?php echo count($_smarty_tpl->tpl_vars['highlights']->value['ADVANCED']);?>
)<?php }?></h2>
			<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_path']->value).('tgg_atos-back-admin-advanced.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div style="clear: both; text-align: center;">
				<input type="submit" name="updateAdvanced" class="button" />
			</div>
		</div>
		<div class="tab-page">
			<h4 class="tab"><?php echo smartyTranslate(array('s'=>'2/3 times payment','mod'=>'tgg_atos'),$_smarty_tpl);?>
<?php if (count($_smarty_tpl->tpl_vars['highlights']->value['23TIMES'])){?> (<?php echo count($_smarty_tpl->tpl_vars['highlights']->value['23TIMES']);?>
)<?php }?></h2>
			<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_path']->value).('tgg_atos-back-admin-23times.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div style="clear: both; text-align: center;">
				<input type="submit" name="update23Times" class="button" />
			</div>
		</div>
	</div>
	<div style="clear: both; text-align: center; padding-top: 1.5em;">
		<input type="submit" name="restoreDefault" class="button" value="<?php echo smartyTranslate(array('s'=>'Restore default configuration','mod'=>'tgg_atos'),$_smarty_tpl);?>
" />
	</div>
</form>
<?php }} ?>