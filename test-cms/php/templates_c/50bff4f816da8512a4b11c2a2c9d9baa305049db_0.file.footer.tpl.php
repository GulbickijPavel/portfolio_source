<?php /* Smarty version 3.1.24, created on 2015-10-29 16:07:27
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/main/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:83995632362fd18188_69092366%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50bff4f816da8512a4b11c2a2c9d9baa305049db' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/main/footer.tpl',
      1 => 1445357141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83995632362fd18188_69092366',
  'variables' => 
  array (
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5632362fd857a4_39528049',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5632362fd857a4_39528049')) {
function content_5632362fd857a4_39528049 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '83995632362fd18188_69092366';
?>
            </div>
        </div>
        <footer><div class="fixed-contacts"></div> &copy PGulbickij.lt 2015</footer>
        <?php echo '<script'; ?>
 type="text/javascript" src=" http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
             $(function(){
                $( "*", document.body ).on('contextmenu', function(event) {
                    event.stopPropagation();
                    var domElement = $( this ).get( 0 );
                    console.log(domElement.text);
                    console.log(domElement.innerHTML);
                    console.log(domElement.val());
                    //alert("Clicked on - " + domElement.innerHTML);
                    return false;
                });
            });
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="build/combined.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="build/script.min.js"><?php echo '</script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['cms']->value == 'true') {?>
        <?php echo '<script'; ?>
 src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/ckeditor/sample.js">     <?php echo '</script'; ?>
>
        
    
        <?php }?>

<?php }
}
?>