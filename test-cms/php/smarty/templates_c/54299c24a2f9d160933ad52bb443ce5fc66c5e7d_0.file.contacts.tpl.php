<?php /* Smarty version 3.1.24, created on 2015-11-02 13:26:54
         compiled from "C:/wamp/www/portfolio.lt/smarty/templates/sections/contacts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:216655637568eadb8e8_81392272%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54299c24a2f9d160933ad52bb443ce5fc66c5e7d' => 
    array (
      0 => 'C:/wamp/www/portfolio.lt/smarty/templates/sections/contacts.tpl',
      1 => 1444655040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216655637568eadb8e8_81392272',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5637568ebc2093_41591014',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637568ebc2093_41591014')) {
function content_5637568ebc2093_41591014 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '216655637568eadb8e8_81392272';
?>
        <section class="jumbotron" id="contacts">
            <h2><?php echo smarty_function_translation(array('langEn'=>"Contacts"),$_smarty_tpl);?>
</h2>
            <hr>
            <form class="form-horizontal" id="contact-form">
              <fieldset>
                <legend><?php echo smarty_function_translation(array('langId'=>"17"),$_smarty_tpl);?>
 <?php echo smarty_function_translation(array('langId'=>"18"),$_smarty_tpl);?>
</legend>
                <span class="help-block"><?php echo smarty_function_translation(array('langId'=>"19"),$_smarty_tpl);?>
</span>
                 <div class="form-group">
                  <label for="inputCompany" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langId'=>"9"),$_smarty_tpl);?>
 *</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputCompany" name="company" data-validation="length" data-validation-length="min3"  data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"58"),$_smarty_tpl);?>
" data-validation-optional="true" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSender" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langId'=>"14"),$_smarty_tpl);?>
,<?php echo smarty_function_translation(array('langId'=>"15"),$_smarty_tpl);?>
 *</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputSender"  placeholder="Vardenis, Pavardenis" name="nameSurname" data-validation="custom" data-validation-regexp="^([ a-zA-Zа-яА-Я]+)$" data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"55"),$_smarty_tpl);?>
" data-validation-optional="true" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="cemail" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langId'=>"4"),$_smarty_tpl);?>
 *</label>
                  <div class="col-lg-10">
                    <input class="form-control" data-validation="email" data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"56"),$_smarty_tpl);?>
" id="cemail"  placeholder="Email" name="email" data-validation-optional="true">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPhone" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langId'=>"13"),$_smarty_tpl);?>
</label>
                  <div class="col-lg-10">
                    <input type="phone" class="form-control" id="inputPhone"  placeholder="+370 XXX XXXXX" name="phone" data-validation="custom" data-validation-regexp="^([ +0-9]+)$" data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"57"),$_smarty_tpl);?>
" data-validation-optional="true" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="textArea" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langId'=>"16"),$_smarty_tpl);?>
 *</label>
                  <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="textArea"  name="comments" data-validation="length" data-validation-length="min3"  data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"59"),$_smarty_tpl);?>
" data-validation-optional="true" ></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2 confirmation">
                    <button type="reset" class="btn btn-default"><?php echo smarty_function_translation(array('langId'=>"20"),$_smarty_tpl);?>
</button>
                    <button type="submit" class="btn btn-primary"><?php echo smarty_function_translation(array('langId'=>"21"),$_smarty_tpl);?>
</button>
                  </div>
                </div>
              </fieldset>
            </form>
        </section>
        </div>
    </div><?php }
}
?>