<?php /* Smarty version 3.1.24, created on 2015-12-04 11:01:49
         compiled from "C:/wamp/www/smarty/templates/sections/contacts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:49675661648dc5a266_58704827%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26b08f13aa9884c6677ba18a25713dff710f1af9' => 
    array (
      0 => 'C:/wamp/www/smarty/templates/sections/contacts.tpl',
      1 => 1449223237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49675661648dc5a266_58704827',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5661648ddc5738_24502018',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661648ddc5738_24502018')) {
function content_5661648ddc5738_24502018 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '49675661648dc5a266_58704827';
?>
    <div id="contactForm-container">    
        <div id= "contactForm" class="jumbotron">
            <p class="contact-forminfo">      
                Github: <a href="https://github.com/GulbickijPavel" target="_blank"> https://github.com/GulbickijPavel </a> <br>
                <a href="files/cv.pdf" target="_blank" download="cv.pdf"> <?php echo smarty_function_translation(array('langId'=>"85"),$_smarty_tpl);?>
</a>
            </p>
            
            <form class="form-horizontal contact-form" id="contact-form">
              <fieldset>
                <legend><?php echo smarty_function_translation(array('langId'=>"17"),$_smarty_tpl);?>
 <?php echo smarty_function_translation(array('langId'=>"18"),$_smarty_tpl);?>
</legend>
                <span class="help-block"><?php echo smarty_function_translation(array('langId'=>"19"),$_smarty_tpl);?>
</span>
                <div class="input-group">
                    <span class="input-group-addon"><?php echo smarty_function_translation(array('langId'=>"9"),$_smarty_tpl);?>
*</span>
                    <input type="text" class="form-control" id="inputCompany" name="company" data-validation="length" data-validation-length="min3"  data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"58"),$_smarty_tpl);?>
" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><?php echo smarty_function_translation(array('langId'=>"14"),$_smarty_tpl);?>
,<?php echo smarty_function_translation(array('langId'=>"15"),$_smarty_tpl);?>
*</span>
                    <input type="text" class="form-control" id="inputSender"  placeholder="Vardenis, Pavardenis" name="nameSurname" data-validation="custom" data-validation-regexp="^([ a-zA-Zа-яА-Я]+)$" data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"55"),$_smarty_tpl);?>
" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><?php echo smarty_function_translation(array('langId'=>"4"),$_smarty_tpl);?>
*</span>
                    <input class="form-control" data-validation="email" data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"56"),$_smarty_tpl);?>
" id="cemail"  placeholder="Email" name="email" data-validation-optional="true">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><?php echo smarty_function_translation(array('langId'=>"13"),$_smarty_tpl);?>
</span>
                    <input type="phone" class="form-control" id="inputPhone"  placeholder="+370 XXX XXXXX" name="phone" data-validation="custom" data-validation-regexp="^([ +0-9]+)$" data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"57"),$_smarty_tpl);?>
" data-validation-optional="true" >
                </div>
                <div class="form-group">
                  <label for="textArea" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langId'=>"16"),$_smarty_tpl);?>
 *</label>
                  <div class="col-lg-10">
                    <textarea class="form-control editor" rows="3" id="editor" name="comments" data-validation="length" data-validation-length="min3"  data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"59"),$_smarty_tpl);?>
" data-validation-optional="true" ></textarea>
                  </div>
                </div>
                <div class="form-group right">
                  <div class="col-lg-10 col-lg-offset-2 confirmation">
                    <div class="right">
                        <button type="reset" id="cform-cancel" class="btn btn-default"><?php echo smarty_function_translation(array('langId'=>"20"),$_smarty_tpl);?>
</button>
                        <button type="submit" class="btn btn-primary "><?php echo smarty_function_translation(array('langId'=>"21"),$_smarty_tpl);?>
</button>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
        </div>
    </div>
    <div id="backgroundPopup">&nbsp;</div><?php }
}
?>