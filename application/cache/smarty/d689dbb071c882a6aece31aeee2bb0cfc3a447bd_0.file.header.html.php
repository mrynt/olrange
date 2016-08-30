<?php
/* Smarty version 3.1.29, created on 2016-08-29 17:44:44
  from "C:\xampp\htdocs\olrange\application\views\web\header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c4586c519918_87194603',
  'file_dependency' => 
  array (
    'd689dbb071c882a6aece31aeee2bb0cfc3a447bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\olrange\\application\\views\\web\\header.html',
      1 => 1472485481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c4586c519918_87194603 ($_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Article</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.0.js"><?php echo '</script'; ?>
>
<style>
body {
	margin: 0px auto;
	height: 1300px;
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

.header{
	width:100%;
	height:75px;
	background-color:#f7f7f7;
	position:fixed;
	z-index:100;
}

.header h1{
	padding:0px 30px;
	color:grey;
	font-size:300%;
}

.btn{
	margin-top: 15px;
}

.footer{
	bottom:-352px;
	width:100%;
	background-color:#f7f7f7;
	height:75px;
    line-height:150px;
    position:relative;
}

.footer h4{
	padding:23px;
	color:grey;
}
.carousel {
    margin-top: 100px;
}

.content {
    margin-top: 100px;
}
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(assets/image/loader2.gif) center no-repeat #fff;
}
</style>
<?php echo '<script'; ?>
>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(document).ready(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
<?php echo '</script'; ?>
>
</head>
<?php }
}
