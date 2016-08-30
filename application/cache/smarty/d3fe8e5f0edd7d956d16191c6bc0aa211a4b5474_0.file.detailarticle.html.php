<?php
/* Smarty version 3.1.29, created on 2016-08-29 17:34:21
  from "C:\xampp\htdocs\olrange\application\views\web\detailarticle.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c455fd7aa591_26246784',
  'file_dependency' => 
  array (
    'd3fe8e5f0edd7d956d16191c6bc0aa211a4b5474' => 
    array (
      0 => 'C:\\xampp\\htdocs\\olrange\\application\\views\\web\\detailarticle.html',
      1 => 1472484832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_57c455fd7aa591_26246784 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="wrapper">
<div class="header">
	<h1>SIMPLE ARTICLE</h1>
</div>
	<div class="container">
	<div class="content">
	<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" value="Back Home">Back Home</a>
		<div class="col-md-9">
			<h1><b><?php echo $_smarty_tpl->tpl_vars['getarticle']->value[0]->title;?>
</b></h1>
			<hr>
		</div>
		<article>
			<div  align="justify" class="col-md-9">
			<br />
			<div id="article">
			<?php echo $_smarty_tpl->tpl_vars['getarticle']->value[0]->body;?>

			</div>
			</div>
		</article>
		</div>
	</div>
	<div class="footer bottom">
		<h4><center>MARIYANTO</center></h4>
	</div>
</div>
	<hr>	
</body>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){ 
		  $("#article img").attr("width","825");
		  $("#article img").attr("height","300");
		  $("#article img").addClass("img-responsive");
    });
<?php echo '</script'; ?>
>
</html><?php }
}
