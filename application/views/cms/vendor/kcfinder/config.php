<?php

/** This file is part of KCFinder project
  *
  *      @desc Base configuration file
  *   @package KCFinder
  *   @version 2.51
  *    @author Pavel Tzonkov <pavelc@users.sourceforge.net>
  * @copyright 2010, 2011 KCFinder Project
  *   @license http://www.opensource.org/licenses/gpl-2.0.php GPLv2
  *   @license http://www.opensource.org/licenses/lgpl-2.1.php LGPLv2
  *      @link http://kcfinder.sunhater.com
  */

// IMPORTANT!!! Do not remove uncommented settings in this file even if
// you are using session configuration.
// See http://kcfinder.sunhater.com/install for setting descriptions

//Manual config http://docs.cksource.com/ckfinder_2.x_api/symbols/CKFinder.config.html

$_CONFIG = array(
    'disabled' => false,
    'denyZipDownload' => false,
    'denyUpdateCheck' => false,
    'denyExtensionRename' => false,
    'defaultSortBy '=>'date',

    'theme' => "dark",

    'uploadURL' => "http://localhost:1234/olrange/assets/image/",
    'uploadDir' => 'C:\xampp\htdocs\olrange\assets\image',

    'dirPerms' => 0755,
    'filePerms' => 0644,

    'access' => array(

        'files' => array(
            'upload' => true,
            'delete' => true,
            'copy' => true,
            'move' => true,
            'rename' => true
        ),

        'dirs' => array(
            'create' => true,
            'delete' => true,
            'rename' => true
        )
    ),

    'deniedExts' => "exe com msi bat php phps phtml php3 php4 cgi pl",

    'types' => array(

        // CKEditor & FCKEditor types
        'files'   =>  "",
        'flash'   =>  "swf",
        'images'  =>  "*img",

        // TinyMCE types
        'file'    =>  "doc pdf zip",
        'media'   =>  "swf flv avi mpg mpeg qt mov wmv asf rm pdf",
        'image'   =>  "*img",
    ),

    'filenameChangeChars' => array(/*
        ' ' => "_",
        ':' => "."
    */),

    'dirnameChangeChars' => array(/*
        ' ' => "_",
        ':' => "."
    */),

    'mime_magic' => "",
    'maxImageWidth' => 1024,
    'maxImageHeight' => 1024,
    'thumbWidth' => 60,
    'thumbHeight' => 60,

    'thumbsDir' => ".thumbs",

    'jpegQuality' => 80,

    'cookieDomain' => "",
    'cookiePath' => "",
    'cookiePrefix' => 'KCFINDER_',

    // THE FOLLOWING SETTINGS CANNOT BE OVERRIDED WITH SESSION CONFIGURATION
    '_check4htaccess' => true,
   //'_tinyMCEPath' => "assets/plugins/tinymcpuk/jscripts/tiny_mce",
    '_tinyMCEPath' => "../tinymcpuk/jscripts/tiny_mce",

    '_sessionVar' => &$_SESSION['KCFINDER'],
    //'_sessionLifetime' => 30,
    //'_sessionDir' => "/full/directory/path",

    //'_sessionDomain' => ".mysite.com",
    //'_sessionPath' => "/my/path",
);

?>