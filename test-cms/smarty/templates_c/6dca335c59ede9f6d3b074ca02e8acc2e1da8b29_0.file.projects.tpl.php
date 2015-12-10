<?php /* Smarty version 3.1.24, created on 2015-10-14 19:21:36
         compiled from "smarty/templates/sections/projects/projects.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5026561e8110f187d2_93269199%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dca335c59ede9f6d3b074ca02e8acc2e1da8b29' => 
    array (
      0 => 'smarty/templates/sections/projects/projects.tpl',
      1 => 1444730026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5026561e8110f187d2_93269199',
  'variables' => 
  array (
    'is_admin' => 0,
    'projectslist' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_561e811113da39_59207466',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561e811113da39_59207466')) {
function content_561e811113da39_59207466 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5026561e8110f187d2_93269199';
?>
        <section class="jumbotron" id="projects">
            <div class="experience-content">
                <h2><?php echo smarty_function_translation(array('langEn'=>"Projects"),$_smarty_tpl);?>

                    <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
                    <a class="btn btn-primary right control" id="proj-button"><?php echo smarty_function_translation(array('langEn'=>"Control"),$_smarty_tpl);?>
</a>
                <?php }?>
                </h2>
                <hr>
                <ul class="bxslider">
                    <?php
$_from = $_smarty_tpl->tpl_vars['projectslist']->value;
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
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
">
                                   <source media="(min-width: 37.5em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
">
                                   <source srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
">
                                   <img srcset="stop.jpg" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
">
                                   <source media="(min-width: 37.5em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
">
                                   <source srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
">
                                   <img srcset="stop.jpg" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
">
                                   <source media="(min-width: 37.5em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
">
                                   <source srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
">
                                   <img srcset="stop.jpg" alt="This picture loads on non-supporting browsers.">
                                </picture></a></a>
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