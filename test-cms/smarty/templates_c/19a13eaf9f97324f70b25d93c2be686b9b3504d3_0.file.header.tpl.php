<?php /* Smarty version 3.1.24, created on 2015-10-29 12:58:44
         compiled from "smarty/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170395631fbe4405842_20085603%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19a13eaf9f97324f70b25d93c2be686b9b3504d3' => 
    array (
      0 => 'smarty/templates/header.tpl',
      1 => 1445958633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170395631fbe4405842_20085603',
  'variables' => 
  array (
    'showMenu' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5631fbe4472e55_87948747',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5631fbe4472e55_87948747')) {
function content_5631fbe4472e55_87948747 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170395631fbe4405842_20085603';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content='<?php echo smarty_function_translation(array('langEn'=>"Junior full stack web developer"),$_smarty_tpl);?>
,<?php echo smarty_function_translation(array('langEn'=>"personal portfolio website"),$_smarty_tpl);?>
'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/bootstrap.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/styles.css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/magicsuggest-min.css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/slider/jquery.bxslider.css">
  </head>
    <body>
        <?php if ($_smarty_tpl->tpl_vars['showMenu']->value == 'true') {?> 
            <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ('sections/contacts/contacts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php }?>
        <div class="container">
            <?php if ($_smarty_tpl->tpl_vars['showMenu']->value == 'true') {?>
            <div id="floating" class="floating-contacts">
            </div>
            <?php }?>
            <div class="main" id="main">
                 <span class="cms"><?php echo $_smarty_tpl->tpl_vars['cms']->value;?>
</span>
                <?php }
}
?>