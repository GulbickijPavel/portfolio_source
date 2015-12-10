<?php /* Smarty version 3.1.24, created on 2015-11-30 15:31:01
         compiled from "C:/wamp/www/smarty/templates/sections/projects.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29838565c5da549bb66_41397883%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8e0827967063bce79acd4707e785caaaa73e79e' => 
    array (
      0 => 'C:/wamp/www/smarty/templates/sections/projects.tpl',
      1 => 1448893685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29838565c5da549bb66_41397883',
  'variables' => 
  array (
    'projects' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565c5da5639cc8_00689831',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565c5da5639cc8_00689831')) {
function content_565c5da5639cc8_00689831 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29838565c5da549bb66_41397883';
?>
        <section class="jumbotron" id="projects">
            <h2><?php echo smarty_function_translation(array('langEn'=>"Projects"),$_smarty_tpl);?>
</h2>
            <hr>
            <ul class="projects-list">
                <h4>Projects list</h4>
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
                <li><?php echo $_smarty_tpl->tpl_vars['item']->value['projectname'];?>
</li>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            </ul>
            <div class="projects-content">

                <ul class="bxslider projects">
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
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='<?php echo $_smarty_tpl->tpl_vars['item']->value['image1high'];?>
'>
                                   <source media="(min-width: 37.5em)" srcset='<?php echo $_smarty_tpl->tpl_vars['item']->value['image1med'];?>
'>
                                   <source srcset='<?php echo $_smarty_tpl->tpl_vars['item']->value['image1low'];?>
'>
                                   <img src='<?php echo $_smarty_tpl->tpl_vars['item']->value['image1low'];?>
' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='<?php echo $_smarty_tpl->tpl_vars['item']->value['image2high'];?>
'>
                                   <source media="(min-width: 37.5em)" srcset='<?php echo $_smarty_tpl->tpl_vars['item']->value['image2med'];?>
'>
                                   <source srcset='<?php echo $_smarty_tpl->tpl_vars['item']->value['image2low'];?>
'>
                                   <img src='<?php echo $_smarty_tpl->tpl_vars['item']->value['image2med'];?>
' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='<?php echo $_smarty_tpl->tpl_vars['item']->value['image3high'];?>
'>
                                   <source media="(min-width: 37.5em)" srcset='<?php echo $_smarty_tpl->tpl_vars['item']->value['image3med'];?>
'>
                                   <source srcset='<?php echo $_smarty_tpl->tpl_vars['item']->value['image3low'];?>
'>
                                   <img src='<?php echo $_smarty_tpl->tpl_vars['item']->value['image3med'];?>
' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
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