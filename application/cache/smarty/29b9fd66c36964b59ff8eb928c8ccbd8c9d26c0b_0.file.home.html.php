<?php
/* Smarty version 3.1.29, created on 2016-08-29 17:41:37
  from "C:\xampp\htdocs\olrange\application\views\web\home.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c457b1a76a91_41430072',
  'file_dependency' => 
  array (
    '29b9fd66c36964b59ff8eb928c8ccbd8c9d26c0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\olrange\\application\\views\\web\\home.html',
      1 => 1472485293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_57c457b1a76a91_41430072 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\olrange\\system\\libs\\plugins\\modifier.truncate.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="se-pre-con"></div>
<div class="wrapper">
<div class="header">
	<h1>SIMPLE ARTICLE</h1>
</div>
<div class="container">
    <div id="myCarousel" class="carousel slide">
       <div class="carousel-inner" id="banner">
        <article class="item active">
          <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value[0]->image;?>
" style="height:400px;width:1200px;">
          <div class="carousel-caption">
		  <?php if (isset($_smarty_tpl->tpl_vars['banner']->value)) {?>
            <h3><b><?php echo $_smarty_tpl->tpl_vars['banner']->value[0]->title;?>
</b></h3>  
			<p align="justify" class="tagline"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['banner']->value[0]->body),130,'');?>
</p>
            <p><a class="btn btn-info btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
web/detailarticle?id=<?php echo $_smarty_tpl->tpl_vars['banner']->value[0]->id;?>
">View More</a></p>
          </div>
        </article>
         <article class="item">
          <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value[1]->image;?>
" style="height:400px;width:1200px;">
          <div class="carousel-caption">
            <h3><b><?php echo $_smarty_tpl->tpl_vars['banner']->value[1]->title;?>
</b></h3>
			<p align="justify" class="tagline"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['banner']->value[1]->body),130,'');?>
</p>
            <p><a class="btn btn-info btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
web/detailarticle?id=<?php echo $_smarty_tpl->tpl_vars['banner']->value[1]->id;?>
">View More</a></p>
          </div>
        </article> 
        <article class="item">
          <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value[2]->image;?>
" style="height:400px;width:1200px;">
          <div class="carousel-caption">
            <h3><b><?php echo $_smarty_tpl->tpl_vars['banner']->value[2]->title;?>
</b></h3>
			<p align="justify" class="tagline"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['banner']->value[2]->body),130,'');?>
</p>
            <p><a class="btn btn-info btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
web/detailarticle?id=<?php echo $_smarty_tpl->tpl_vars['banner']->value[2]->id;?>
">View More</a></p>
          </div>
        </article> 
		<?php }?>
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
	<hr>
	 <center><h1>LIST ARTICLE</h1></center>
	<hr>
	<br />
	<div class="container-fluid">
		
		 <div class="row" id="article" style="display: none">
		 <?php if (isset($_smarty_tpl->tpl_vars['article']->value)) {?>
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
" style="height:200px;width:260px;">
			<br />
			<h2><?php echo $_smarty_tpl->tpl_vars['articles']->value->title;?>
</h2> 
			<hr>
			<p align="justify"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['articles']->value->body),330,'');?>
 </p>
			<br>
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
			<?php }?>
				<hr>
		 </div>
	</div>
</div>	
	<div class="footer navbar-relative-bottom">
		<h4><center>MARIYANTO</center></h4>
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

<?php echo '<script'; ?>
>
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 200) {
    $('#article').fadeIn();
  } else {
    $('#article').fadeOut();
  }
});
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
