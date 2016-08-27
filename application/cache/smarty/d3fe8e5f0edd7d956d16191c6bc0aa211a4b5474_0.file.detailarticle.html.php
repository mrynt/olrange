<?php
/* Smarty version 3.1.29, created on 2016-08-27 23:03:44
  from "C:\xampp\htdocs\olrange\application\views\web\detailarticle.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c20030a937e3_21943477',
  'file_dependency' => 
  array (
    'd3fe8e5f0edd7d956d16191c6bc0aa211a4b5474' => 
    array (
      0 => 'C:\\xampp\\htdocs\\olrange\\application\\views\\web\\detailarticle.html',
      1 => 1472331821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c20030a937e3_21943477 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Bootstrap Blog Template">
    <meta name="author" content="Vijaya Anand">
    <title>Home</title>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.0.js"><?php echo '</script'; ?>
>
<style>
body {
	padding-top:50px;
}

</style>

</head>
<body>
	<div class="container">
	<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" value="Back Home">Back Home</a>
		<div class="col-md-9">
			<h1><b><?php echo $_smarty_tpl->tpl_vars['getarticle']->value[0]->title;?>
</b></h1>
			<hr>
		</div>
		<br>
		<article>
			<div  align="justify" class="col-md-9">
			<br />
			<div id="article">
			<?php echo $_smarty_tpl->tpl_vars['getarticle']->value[0]->body;?>

			</div>
			</div>
		</article>
	</div>
	<br />
	<br />
	<br />
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
