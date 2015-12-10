<?php /* Smarty version 3.1.24, created on 2015-10-29 14:48:29
         compiled from "C:/wamp/www/portfolio/portfolio.lt/test-cms/smarty/templates/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6960563223ad40f784_38902661%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c8fcfa8ca4200d80685b2c4daf36a39f966755a' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/test-cms/smarty/templates/404.tpl',
      1 => 1445355009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6960563223ad40f784_38902661',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_563223ad48c7a1_23794976',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563223ad48c7a1_23794976')) {
function content_563223ad48c7a1_23794976 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6960563223ad40f784_38902661';
?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/bootstrap.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/styles.css">
  </head>
    <body class="not-found-main">
        <img class="not-found-image-container" src="images/404.png" alt="404">
        <span class="main-text"><strong><?php echo smarty_function_translation(array('langId'=>"71"),$_smarty_tpl);?>
</strong></span>
        <span class="explanation"><?php echo smarty_function_translation(array('langId'=>"72"),$_smarty_tpl);?>
</span>
        <a href="en"><?php echo smarty_function_translation(array('langId'=>"73"),$_smarty_tpl);?>
</a>
    </body>
</html><?php }
}
?>