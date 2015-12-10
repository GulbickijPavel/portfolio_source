<?php /* Smarty version 3.1.24, created on 2015-12-04 11:17:18
         compiled from "C:/wamp/www/smarty/templates/sections/skills.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:287645661682e7d69e5_90555547%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '412e0de03b9c38ef0ba89dadb693af4e463b558d' => 
    array (
      0 => 'C:/wamp/www/smarty/templates/sections/skills.tpl',
      1 => 1448974318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287645661682e7d69e5_90555547',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5661682e8a5a98_61712868',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661682e8a5a98_61712868')) {
function content_5661682e8a5a98_61712868 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '287645661682e7d69e5_90555547';
?>
 
        <section class="jumbotron" id="skills"> 
            <h2><?php echo smarty_function_translation(array('langEn'=>"Skills"),$_smarty_tpl);?>

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