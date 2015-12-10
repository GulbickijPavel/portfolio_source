<?php /* Smarty version 3.1.24, created on 2015-11-23 16:47:16
         compiled from "C:/wamp/www/smarty/templates/sections/experience.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:68275653350444b9b5_06727756%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07df77737704cca56b7d9ed89b8a9a0eb64973c5' => 
    array (
      0 => 'C:/wamp/www/smarty/templates/sections/experience.tpl',
      1 => 1447429834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68275653350444b9b5_06727756',
  'variables' => 
  array (
    'experience' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56533504666b32_81384310',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56533504666b32_81384310')) {
function content_56533504666b32_81384310 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '68275653350444b9b5_06727756';
?>

        <section class="jumbotron" id="experience">
            <div class="experience-content">
                <h2><?php echo smarty_function_translation(array('langEn'=>"Experience"),$_smarty_tpl);?>
</h2>
                <hr>
                <ul class="bxslider">
                <?php
$_from = $_smarty_tpl->tpl_vars['experience']->value;
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
                    <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['company'];?>
</h3>
                    <div class="experience-info"> 
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['logo']) {?>  
                        <div class="company-logo">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
">
                        </div>
                        <?php }?>
                        <span>
                        <?php echo smarty_function_translation(array('langEn'=>"Address"),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
<br>
                        <?php echo smarty_function_translation(array('langEn'=>"Website"),$_smarty_tpl);?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
</a><br>
                        <?php echo smarty_function_translation(array('langEn'=>"Work period"),$_smarty_tpl);?>
:  - <?php if ($_smarty_tpl->tpl_vars['item']->value['periodend'] != "now") {
echo $_smarty_tpl->tpl_vars['item']->value['periodend'];
}?> <?php if ($_smarty_tpl->tpl_vars['item']->value['periodend'] == "now") {
echo smarty_function_translation(array('langEn'=>"now"),$_smarty_tpl);
}?><br>
                        <?php echo smarty_function_translation(array('langEn'=>"Position"),$_smarty_tpl);?>
: <?php echo smarty_function_translation(array('langEn'=>$_smarty_tpl->tpl_vars['item']->value['position']),$_smarty_tpl);?>
<br>
                        </span>
                    </div>
                   
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'en') {?>
                    <div class="experience-desc"><?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionEn'];?>
</div> 
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'ru') {?>
                    <div class="experience-desc"><?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionRu'];?>
</div> 
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'lt') {?>
                    <div class="experience-desc"><?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionLt'];?>
</div> 
                    <?php }?>
                </li>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </ul>
            </div>   
        </section>
<?php }
}
?>