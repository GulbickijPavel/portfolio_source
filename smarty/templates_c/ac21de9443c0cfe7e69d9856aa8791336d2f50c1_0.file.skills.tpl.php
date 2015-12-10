<?php /* Smarty version 3.1.24, created on 2015-10-29 13:00:46
         compiled from "smarty/templates/sections/skills.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:110165631fc5e086d91_74178837%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac21de9443c0cfe7e69d9856aa8791336d2f50c1' => 
    array (
      0 => 'smarty/templates/sections/skills.tpl',
      1 => 1442335312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110165631fc5e086d91_74178837',
  'variables' => 
  array (
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5631fc5e10bab1_85436265',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5631fc5e10bab1_85436265')) {
function content_5631fc5e10bab1_85436265 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '110165631fc5e086d91_74178837';
?>
 
        <section class="jumbotron" id="skills"> 
            <h2><?php echo smarty_function_translation(array('langEn'=>"Skills"),$_smarty_tpl);?>

                <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
                <a class="btn btn-primary right control" id="skil-button"><?php echo smarty_function_translation(array('langEn'=>"Control"),$_smarty_tpl);?>
</a>
                <?php }?>
            </h2>
            <hr>
            <div class="content">
                <h3><?php echo smarty_function_translation(array('langEn'=>"Main"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>1),$_smarty_tpl);?>

                <h3><?php echo smarty_function_translation(array('langEn'=>"Secondary"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>2),$_smarty_tpl);?>

                <h3><?php echo smarty_function_translation(array('langEn'=>"Other"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>3),$_smarty_tpl);?>

            </div> 
        </section><?php }
}
?>