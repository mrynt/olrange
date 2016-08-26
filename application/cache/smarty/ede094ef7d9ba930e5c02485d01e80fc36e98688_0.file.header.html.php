<?php
/* Smarty version 3.1.29, created on 2016-08-26 23:40:10
  from "C:\xampp\htdocs\olrange\application\views\cms\pages\layout\header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c0b73acfffd4_69540995',
  'file_dependency' => 
  array (
    'ede094ef7d9ba930e5c02485d01e80fc36e98688' => 
    array (
      0 => 'C:\\xampp\\htdocs\\olrange\\application\\views\\cms\\pages\\layout\\header.html',
      1 => 1472247604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c0b73acfffd4_69540995 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../application/views/cms/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../application/views/cms/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../application/views/cms/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../application/views/cms/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../application/views/cms/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Simple Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
				<a style="margin-right:25px;font-size:20px;" href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    <?php if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?> 
					 <?php
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_menus_0_saved_item = isset($_smarty_tpl->tpl_vars['menus']) ? $_smarty_tpl->tpl_vars['menus'] : false;
$_smarty_tpl->tpl_vars['menus'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['menus']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['menus']->value) {
$_smarty_tpl->tpl_vars['menus']->_loop = true;
$__foreach_menus_0_saved_local_item = $_smarty_tpl->tpl_vars['menus'];
?>
                        <li>
                            <a <?php if (($_smarty_tpl->tpl_vars['menus']->value->domain) == ($_smarty_tpl->tpl_vars['activate']->value)) {?>class="active"}<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['menus']->value->domain;?>
"><i class="fa <?php echo $_smarty_tpl->tpl_vars['menus']->value->icon;?>
 fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['menus']->value->menu;?>
</a>
                        </li>
                      <?php
$_smarty_tpl->tpl_vars['menus'] = $__foreach_menus_0_saved_local_item;
}
if ($__foreach_menus_0_saved_item) {
$_smarty_tpl->tpl_vars['menus'] = $__foreach_menus_0_saved_item;
}
?>
                     <?php }?>  
                       <h1></h1>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav><?php }
}
