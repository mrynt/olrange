<?php
/* Smarty version 3.1.29, created on 2016-08-27 23:26:02
  from "C:\xampp\htdocs\olrange\application\views\web\home.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c2056abfa0a8_51198811',
  'file_dependency' => 
  array (
    '29b9fd66c36964b59ff8eb928c8ccbd8c9d26c0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\olrange\\application\\views\\web\\home.html',
      1 => 1472333159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c2056abfa0a8_51198811 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo: Fullsize Header - Bootstrap Carousel</title>
<meta name="description" content="Fullsize Header - Bootstrap Carousel - Collection by sevenXdemo - More Information: www.sevenX.de/blog" />
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.0.js"><?php echo '</script'; ?>
>
<style>
body {
	padding-top:50px;
}

.carousel-control.left, .carousel-control.right {
	background-image:none !important;
}
.carousel-inner .item img {
	width:100%;
	height:100%;
}
.carousel-indicators {
	bottom:5px;
	left:0;
	width:auto;
	padding:5px 25px 5px 25px;
	margin-left:0;
	background:rgba(0,0,0,0.7);
}
.carousel-indicators li {
	border-radius:0;
	width:8px;
	height:8px;
	background:#fff;
}
.carousel-indicators .active {
	width:10px;
	height:10px;
	background:#39b3d7;
	border-color:#39b3d7;
}

.carousel-control {
	background:	#39b3d7;
	color:#fff;
	padding: 4px 0;
	width:26px;
	top:auto;	
	left:auto;
	bottom:12px;
	opacity:0.85;
}
.carousel-control.right {
	right:10px;
}

.carousel-control.left {
	right: 46px;
}
.carousel-caption {
	top:auto;
	width:auto;
	right:auto;
	bottom:60px;
	left:0;
	padding:20px;
	background:rgba(0,0,0,0.70);
	text-align:left;
  	height:auto;
	max-width:50%;

}
</style>

</head>
<body>

<div class="container">
    <div id="myCarousel" class="carousel slide">
       <div class="carousel-inner">
        <article class="item active">
          <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value[0]->image;?>
" style="height:400px;width:1200px;">
          <div class="carousel-caption">
            <h3><?php echo $_smarty_tpl->tpl_vars['banner']->value[0]->title;?>
</h3>  
			<p class="tagline"></p>
            <p><a class="btn btn-info btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
web/detailarticle?id=<?php echo $_smarty_tpl->tpl_vars['banner']->value[0]->id;?>
">View More</a></p>
          </div>
        </article>
         <article class="item">
          <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value[1]->image;?>
" style="height:400px;width:1200px;">
          <div class="carousel-caption">
            <h3><?php echo $_smarty_tpl->tpl_vars['banner']->value[1]->title;?>
</h3>
            <p><a class="btn btn-info btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
web/detailarticle?id=<?php echo $_smarty_tpl->tpl_vars['banner']->value[1]->id;?>
">View More</a></p>
          </div>
        </article> 
        <article class="item">
          <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value[2]->image;?>
" style="height:400px;width:1200px;">
          <div class="carousel-caption">
            <h3><?php echo $_smarty_tpl->tpl_vars['banner']->value[2]->title;?>
</h3>
            <p><a class="btn btn-info btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
web/detailarticle?id=<?php echo $_smarty_tpl->tpl_vars['banner']->value[2]->id;?>
">View More</a></p>
          </div>
        </article>                      
      </div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>        
      <!-- Controls -->
      <div class="carousel-controls">
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="fa fa-angle-double-left"></span>
          </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="fa fa-angle-double-right"></span>
          </a>
      </div>
    </div> 
	<br>
	<div class="container-fluid">
		
		 <div class="row">
		 <?php
$_from = $_smarty_tpl->tpl_vars['article']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_articles_0_saved_item = isset($_smarty_tpl->tpl_vars['articles']) ? $_smarty_tpl->tpl_vars['articles'] : false;
$_smarty_tpl->tpl_vars['articles'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['articles']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['articles']->value) {
$_smarty_tpl->tpl_vars['articles']->_loop = true;
$__foreach_articles_0_saved_local_item = $_smarty_tpl->tpl_vars['articles'];
?>
			<div class="col-md-4">
			<img src="<?php echo $_smarty_tpl->tpl_vars['articles']->value->image;?>
" style="height:300px;width:360px;">
			<br />
			<h2><?php echo $_smarty_tpl->tpl_vars['articles']->value->title;?>
</h2> 
			  <p><a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
web/detailarticle?id=<?php echo $_smarty_tpl->tpl_vars['articles']->value->id;?>
">View details &raquo;</a></p>
			</div>
			<?php
$_smarty_tpl->tpl_vars['articles'] = $__foreach_articles_0_saved_local_item;
}
if ($__foreach_articles_0_saved_item) {
$_smarty_tpl->tpl_vars['articles'] = $__foreach_articles_0_saved_item;
}
?>
				<hr>
		 </div>
	</div>
</div>
<?php echo '<script'; ?>
 src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

	$('#myCarousel').carousel({
		interval:   4000
	});
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
