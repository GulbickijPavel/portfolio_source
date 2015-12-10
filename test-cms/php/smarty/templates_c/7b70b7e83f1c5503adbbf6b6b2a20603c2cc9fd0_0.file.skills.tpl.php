<?php /* Smarty version 3.1.24, created on 2015-11-02 13:26:41
         compiled from "C:/wamp/www/portfolio.lt/smarty/templates/sections/skills.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2731563756816aa471_41324595%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b70b7e83f1c5503adbbf6b6b2a20603c2cc9fd0' => 
    array (
      0 => 'C:/wamp/www/portfolio.lt/smarty/templates/sections/skills.tpl',
      1 => 1444655040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2731563756816aa471_41324595',
  'variables' => 
  array (
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56375681746898_52996832',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56375681746898_52996832')) {
function content_56375681746898_52996832 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2731563756816aa471_41324595';
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