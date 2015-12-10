<?php /* Smarty version 3.1.24, created on 2015-11-02 13:28:18
         compiled from "C:/wamp/www/portfolio.lt/smarty/templates/main/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21856563756e23fce17_69927189%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '130c1791a22105b87b2b992bd07b8ac3b8ef57be' => 
    array (
      0 => 'C:/wamp/www/portfolio.lt/smarty/templates/main/footer.tpl',
      1 => 1444655040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21856563756e23fce17_69927189',
  'variables' => 
  array (
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_563756e24665a5_48989666',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563756e24665a5_48989666')) {
function content_563756e24665a5_48989666 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21856563756e23fce17_69927189';
?>
        <footer>&copy PGulbickij.lt 2015</footer>
        <?php echo '<script'; ?>
 type="text/javascript" src=" http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/vendor/velocity.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/script.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/jquery.fittext.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/slider/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/portfolio/portfolio.lt/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/portfolio/portfolio.lt/js/bootswatch.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap-gallery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.43/jquery.form-validator.min.js"><?php echo '</script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['cms']->value == 'false') {?>
<!--        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/imgprev.js"><?php echo '</script'; ?>
>-->
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['cms']->value == 'true') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/jquery.confirm.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/magicsuggest-min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/ckeditor/sample.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"><?php echo '</script'; ?>
>
        <?php }?>

<?php }
}
?>