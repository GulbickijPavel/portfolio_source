<?php /* Smarty version 3.1.24, created on 2015-10-29 16:43:35
         compiled from "C:/wamp/www/portfolio/portfolio.lt/test-cms/settings/translations.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1804356323ea7d10b42_53922420%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0f138483475663109411a5d1ef10412a8425189' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/test-cms/settings/translations.tpl',
      1 => 1446128210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1804356323ea7d10b42_53922420',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56323ea7de78f1_44950430',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56323ea7de78f1_44950430')) {
function content_56323ea7de78f1_44950430 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1804356323ea7d10b42_53922420';
?>
    <div id="translations-main" ng-controller="TranslationList">
            <div>
              <ul>
                <li class="translations-list">
                   <div class="form-group col-xs-6">
                    <label class="form-group col-xs-3 text-center"><!-<?php echo smarty_function_translation(array('langEn'=>"Search"),$_smarty_tpl);?>
--></label>
                    </div>
                    <div class="form-group col-xs-6">
                        <input ng-model="query" type="text" class="form-control" id="searchfield" value="" placeholder="<?php echo smarty_function_translation(array('langEn'=>"Search"),$_smarty_tpl);?>
">
                    </div>
                    <div>
                        <label class="form-group col-xs-3">Lt</label>
                        <label class="form-group col-xs-3">En</label>
                        <label class="form-group col-xs-3">Ru</label>
                        <label class="form-group col-xs-3"><?php echo smarty_function_translation(array('langEn'=>"Controls"),$_smarty_tpl);?>
</label>
                        <div class="form-group col-xs-3">
                          <input type="text" class="form-control" id="new-lt" value="" placeholder="Naujas">
                        </div>
                        <div class="form-group col-xs-3">
                          <input type="text" class="form-control" id="new-en" value="" placeholder="new">
                        </div>
                        <div class="form-group col-xs-3">
                          <input type="text" class="form-control" id="new-ru" value="" placeholder="Новый">
                        </div>
                        <div class="form-group col-xs-3">
                            <div class="form-group row">
                            <img alt="save" src="../images/save.png" id="new-translation" class="form-group save col-xs-4" title="save">
                            <img alt="success" src="../images/success.png" id="save-success" class="form-group ok-msg col-xs-4">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="translations-list" ng-repeat="translation in translations | filter:query">
                    <div id="translation">
                        <div class="form-group col-xs-3">
                          <input type="text" class="form-control list" id="lt{{translation.translationid}}" value="{{translation.lt}}">
                        </div>
                        <div class="form-group col-xs-3">
                          <input type="text" class="form-control list" id="en{{translation.translationid}}" value="{{translation.en}}">
                        </div>
                        <div class="form-group col-xs-3">
                          <input type="text" class="form-control list" id="ru{{translation.translationid}}" value="{{translation.ru}}">
                        </div>
                        <div class="form-group col-xs-3">
                            <div class="form-group row">
                                <img alt="save" src="../images/save.png" id="{{translation.translationid}}" class="form-group save col-xs-4 list" title="save">

                                <img alt="delete" src="../images/delete.png" id="del{{translation.translationid}}" class="form-group delete col-xs-4 list" title="delete">
                                <img alt="success" src="../images/success.png" id="okimg{{translation.translationid}}" class="form-group ok-msg col-xs-4 ">
                            </div>
                        </div>
                    </div>
                </li>
              </ul>
            </div>
        </div>
    <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/angular/translations/controllers.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $( document ).ready(function() {
        $(document).on("click", ".save", function(){
            var id = this.id, 
                ru = $('#'+"ru"+id+'').val(),
                en = $('#'+"en"+id+'').val(),
                lt = $('#'+"lt"+id+'').val();
                console.log(ru);
                console.log(en);
                console.log(lt);
                request =$.ajax({
                method: "POST",
                url:"../php/actions/save.php",
                data: { sectionname: "translations", trid: id, langru: ru, langen: en, langlt: lt }
            });
            request.success(function(data) {
//                console.log(data);
//                 var rufield = $(data).find('#'+"ru"+id+'').text(),
//                     enfield = $(data).find('#'+"en"+id+'').val(),
//                     ltfield = $(data).find('#'+"lt"+id+'').val();
//                console.log(rufield);
//                console.log(enfield);
//                console.log(ltfield);
//                 $('#'+"ru" + id+'').val(rufield);
//                 $('#'+"en" + id+'').val(enfield);
//                 $('#'+"lt" + id+'').val(ltfield);
                $('#okimg'+ id +'').show();
            });

            request.fail(function( jqXHR, textStatus ) {
              alert( "Request failed: " + textStatus );
            });
        });
        $("#new-translation").click(function(event){
            var ru = $('#new-ru').val(),
                en = $('#new-en').val(),
                lt = $('#new-lt').val(),
                request =$.ajax({
                method: "POST",
                url:"../php/actions/save.php",
                data: { sectionname: "translations-new", langru: ru, langen: en, langlt: lt }
            });
            request.success(function(data) {
             /*    var rufield = $(data).find('#'+"ru" + id+'').val(),
                     enfield = $(data).find('#'+"en" + id+'').val(),
                     ltfield = $(data).find('#'+"lt" + id+'').val();
                 $('#'+"ru" + id+'').val(rufield);
                 $('#'+"en" + id+'').val(enfield);
                 $('#'+"lt" + id+'').val(ltfield);*/
                
                $('#save-success').show();
               // location.reload();
            });

            request.fail(function( jqXHR, textStatus ) {
              alert( "Request failed: " + textStatus );
            });
        });
    });
    <?php echo '</script'; ?>
><?php }
}
?>