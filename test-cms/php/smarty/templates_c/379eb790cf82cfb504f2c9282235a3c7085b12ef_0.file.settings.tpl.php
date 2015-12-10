<?php /* Smarty version 3.1.24, created on 2015-11-02 13:27:07
         compiled from "C:/wamp/www/portfolio.lt/smarty/templates/settings/settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:291495637569b8afd53_80212629%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '379eb790cf82cfb504f2c9282235a3c7085b12ef' => 
    array (
      0 => 'C:/wamp/www/portfolio.lt/smarty/templates/settings/settings.tpl',
      1 => 1444655040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291495637569b8afd53_80212629',
  'variables' => 
  array (
    'translations' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5637569b9c9194_96426825',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5637569b9c9194_96426825')) {
function content_5637569b9c9194_96426825 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '291495637569b8afd53_80212629';
echo $_smarty_tpl->getSubTemplate ('../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<!--Junior full stack web developer-->
    <div class="container">
        <div class="main" id="main">
            <div class="jumbotron">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#translations" data-toggle="tab"><?php echo smarty_function_translation(array('langEn'=>"Translations"),$_smarty_tpl);?>
</a></li>
                  <li><a href="#profile" data-toggle="tab">Punktas1</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade active in" id="translations">
                    <div class="row">
                         <div class="form-group col-xs-6">
                            <label class="form-group col-xs-3 text-center"><!-<?php echo smarty_function_translation(array('langEn'=>"Search"),$_smarty_tpl);?>
--></label>
                        </div>
                        <div class="form-group col-xs-6">
                            <input type="text" class="form-control" id="searchfield" value="" placeholder="<?php echo smarty_function_translation(array('langEn'=>"Search"),$_smarty_tpl);?>
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
                        <div id="translations-table">
                            <?php
$_from = $_smarty_tpl->tpl_vars['translations']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                            <div id="translation<?php echo $_smarty_tpl->tpl_vars['item']->value['translationid'];?>
">
                                <div class="form-group col-xs-3">
                                  <input type="text" class="form-control list" id="lt<?php echo $_smarty_tpl->tpl_vars['item']->value['translationid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['lt'];?>
">
                                </div>
                                <div class="form-group col-xs-3">
                                  <input type="text" class="form-control list" id="en<?php echo $_smarty_tpl->tpl_vars['item']->value['translationid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['en'];?>
">
                                </div>
                                <div class="form-group col-xs-3">
                                  <input type="text" class="form-control list" id="ru<?php echo $_smarty_tpl->tpl_vars['item']->value['translationid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ru'];?>
">
                                </div>
                                <div class="form-group col-xs-3">
                                    <div class="form-group row">
                                        <img alt="save" src="../images/save.png" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['translationid'];?>
" class="form-group save col-xs-4 list" title="save">

                                        <img alt="delete" src="../images/delete.png" id="del<?php echo $_smarty_tpl->tpl_vars['item']->value['translationid'];?>
" class="form-group delete col-xs-4 list" title="delete">
                                        <label><?php echo $_smarty_tpl->tpl_vars['item']->value['translationid'];?>
</label>
<!--                                        <img alt="success" src="../images/success.png" id="okimg<?php echo $_smarty_tpl->tpl_vars['item']->value['translationid'];?>
" class="form-group ok-msg col-xs-4 ">-->
                                    </div>
                                </div>
                            </div>

                            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile">
                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('../footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo '<script'; ?>
>
        $('.translations-btn').click(function(){
            $('.editor').toggleClass('open');
        });
        $(".save").click(function(event){
            var id = this.id, 
                ru = $('#'+"ru" + id+'').val(),
                en = $('#'+"en" + id+'').val(),
                lt = $('#'+"lt" + id+'').val(),
                request =$.ajax({
                method: "POST",
                url:"../php/actions/save.php",
                data: { sectionname: "translations", trid: id, langru: ru, langen: en, langlt: lt }
            });
            request.success(function(data) {
                 var rufield = $(data).find('#'+"ru" + id+'').val(),
                     enfield = $(data).find('#'+"en" + id+'').val(),
                     ltfield = $(data).find('#'+"lt" + id+'').val();
                 $('#'+"ru" + id+'').val(rufield);
                 $('#'+"en" + id+'').val(enfield);
                 $('#'+"lt" + id+'').val(ltfield);
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
                location.reload();
            });

            request.fail(function( jqXHR, textStatus ) {
              alert( "Request failed: " + textStatus );
            });
        });
        $("#searchfield").on("input", function(e){
            console.log("lt field has been changed");
            
            var ltval = $("#searchfield").val();
            console.log(ltval);
            if(ltval === ""){
                 $('.list').show();
            }
            else{
                $('.list').hide();
                var entry = $('#translations :input').filter(function(){ return this.value.indexOf(ltval) != -1 })[1],
                idtosearch = entry.id.slice(2);
                $('#lt'+idtosearch+'').show();
                $('#en'+idtosearch+'').show();
                $('#ru'+idtosearch+'').show();
                $('#'+idtosearch+'').show();
                $('#del'+idtosearch+'').show();
                if ($('#lt'+idtosearch+'').length){
                    $("#translations-table").prepend($('#translation'+idtosearch+''));
                }
            }
        });
    <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>