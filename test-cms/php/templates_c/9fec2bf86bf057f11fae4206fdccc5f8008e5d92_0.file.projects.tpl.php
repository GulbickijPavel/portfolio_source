<?php /* Smarty version 3.1.24, created on 2015-11-13 16:43:25
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/projects.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:164945646051dac80c6_40328335%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fec2bf86bf057f11fae4206fdccc5f8008e5d92' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/projects.tpl',
      1 => 1447429305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164945646051dac80c6_40328335',
  'variables' => 
  array (
    'projects' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5646051dccf9b8_73105487',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5646051dccf9b8_73105487')) {
function content_5646051dccf9b8_73105487 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '164945646051dac80c6_40328335';
?>
        <section class="jumbotron" id="projects">
            <div class="experience-content">
                <h2><?php echo smarty_function_translation(array('langEn'=>"Projects"),$_smarty_tpl);?>

                </h2>
                <hr>
                <ul class="bxslider">
                    <?php
$_from = $_smarty_tpl->tpl_vars['projects']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                    <li>
                        <h3> <?php echo $_smarty_tpl->tpl_vars['item']->value['projectname'];?>
</h3>
                        <ul id="proj-inner-slider" class="bxslider inner">
                            <li>
                                <img src="..<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
">
<!--
                                <a><picture>
                                   <source media="(min-width: 64em)" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
">
                                   <source media="(min-width: 37.5em)" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
">
                                   <source srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
">
                                   <img srcset="stop.jpg" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
-->
                            </li>
                            <li>
                                <img src="..<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
">
<!--
                                <a><picture>
                                   <source media="(min-width: 64em)" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
">
                                   <source media="(min-width: 37.5em)" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
">
                                   <source srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
">
                                   <img srcset="stop.jpg" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
-->
                            </li>
                            <li>
                                <img src="..<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
">
<!--
                                <a><picture>
                                   <source media="(min-width: 64em)" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
">
                                   <source media="(min-width: 37.5em)" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
">
                                   <source srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
">
                                   <img srcset="stop.jpg" alt="This picture loads on non-supporting browsers.">
                                </picture></a></a>
-->
                            </li>
                        </ul>
                        <article class="experience-desc">
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'en') {?> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionEn'];?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'lt') {?> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionLt'];?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'ru') {?> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionRu'];?>

                            <?php }?>
                        </article>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </ul>
            </div>   
        </section><?php }
}
?>