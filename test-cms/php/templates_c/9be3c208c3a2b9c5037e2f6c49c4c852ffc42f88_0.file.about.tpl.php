<?php /* Smarty version 3.1.24, created on 2015-11-03 11:47:39
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32753563890cb8addd9_42506275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be3c208c3a2b9c5037e2f6c49c4c852ffc42f88' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/about.tpl',
      1 => 1446547294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32753563890cb8addd9_42506275',
  'variables' => 
  array (
    'about' => 0,
    'item' => 0,
    'livingplace' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_563890cba76ec0_61233248',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563890cba76ec0_61233248')) {
function content_563890cba76ec0_61233248 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32753563890cb8addd9_42506275';
?>
    <section class="jumbotron" id="about">
            <div class="about-content">
                <h2><?php echo smarty_function_translation(array('langId'=>"40"),$_smarty_tpl);?>
</h2>
                <hr>
                <?php
$_from = $_smarty_tpl->tpl_vars['about']->value;
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
        <img class="my-photo" alt="Pavel Gulbickij photo" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['userphoto'];?>
">
                <?php $_smarty_tpl->tpl_vars["livingplace"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['item']->value['livingplace']), null, 0);?>
                <div class="about"> 
                    <span>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['surname'];?>
<br>
                        <?php echo smarty_function_translation(array('langId'=>"3"),$_smarty_tpl);?>
: <?php echo smarty_function_translation(array('langEn'=>((string)$_smarty_tpl->tpl_vars['livingplace']->value)),$_smarty_tpl);?>
<br>
                        <?php echo smarty_function_translation(array('langId'=>"6"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
 <br>
                        <?php echo smarty_function_translation(array('langId'=>"4"),$_smarty_tpl);?>
: <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</a> <br>                   
                    </span>
                </div>
                <article class="ar-about">
                   <h6><?php echo smarty_function_translation(array('langId'=>"1"),$_smarty_tpl);?>
 </h6>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'en') {?> 
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['infoEn'];?>

                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'lt') {?> 
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['infoLt'];?>

                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'ru') {?> 
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['infoRu'];?>

                    <?php }?>
                </article>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            </div> 
        </section>  
<?php }
}
?>