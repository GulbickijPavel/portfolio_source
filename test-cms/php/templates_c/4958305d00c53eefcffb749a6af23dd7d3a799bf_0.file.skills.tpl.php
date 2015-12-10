<?php /* Smarty version 3.1.24, created on 2015-10-29 14:53:13
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/skills.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20027563224c9d4bd71_55124818%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4958305d00c53eefcffb749a6af23dd7d3a799bf' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/skills.tpl',
      1 => 1442335312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20027563224c9d4bd71_55124818',
  'variables' => 
  array (
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_563224c9e5d4b4_21785445',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563224c9e5d4b4_21785445')) {
function content_563224c9e5d4b4_21785445 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20027563224c9d4bd71_55124818';
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