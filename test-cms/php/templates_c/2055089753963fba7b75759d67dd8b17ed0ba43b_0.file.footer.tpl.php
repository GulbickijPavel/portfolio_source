<?php /* Smarty version 3.1.24, created on 2015-11-30 16:35:10
         compiled from "C:/wamp/www/test-cms/smarty/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12569565c6caec26185_99265873%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2055089753963fba7b75759d67dd8b17ed0ba43b' => 
    array (
      0 => 'C:/wamp/www/test-cms/smarty/templates/footer.tpl',
      1 => 1448897707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12569565c6caec26185_99265873',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565c6caec6c694_79131716',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565c6caec6c694_79131716')) {
function content_565c6caec6c694_79131716 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12569565c6caec26185_99265873';
?>
    <!-- jQuery -->
   
    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="/test-cms/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Metis Menu Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="/test-cms/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdn.ckeditor.com/4.5.5/full/ckeditor.js"><?php echo '</script'; ?>
>
    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="/test-cms/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/build/combined.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/build/script.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/test-cms/js/script.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/test-cms/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>