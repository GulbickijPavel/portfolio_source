    <div id="translations-main" ng-controller="TranslationList">
            <div>
              <ul>
                <li class="translations-list">
                   <div class="form-group col-xs-6">
                    <label class="form-group col-xs-3 text-center"><!-{translation langEn="Search"}--></label>
                    </div>
                    <div class="form-group col-xs-6">
                        <input ng-model="query" type="text" class="form-control" id="searchfield" value="" placeholder="{translation langEn="Search"}">
                    </div>
                    <div>
                        <label class="form-group col-xs-3">Lt</label>
                        <label class="form-group col-xs-3">En</label>
                        <label class="form-group col-xs-3">Ru</label>
                        <label class="form-group col-xs-3">{translation langEn="Controls"}</label>
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
                          <input type="text" class="form-control list" id="lt{literal}{{translation.translationid}}{/literal}" value="{literal}{{translation.lt}}{/literal}">
                        </div>
                        <div class="form-group col-xs-3">
                          <input type="text" class="form-control list" id="en{literal}{{translation.translationid}}{/literal}" value="{literal}{{translation.en}}{/literal}">
                        </div>
                        <div class="form-group col-xs-3">
                          <input type="text" class="form-control list" id="ru{literal}{{translation.translationid}}{/literal}" value="{literal}{{translation.ru}}{/literal}">
                        </div>
                        <div class="form-group col-xs-3">
                            <div class="form-group row">
                                <img alt="save" src="../images/save.png" id="{literal}{{translation.translationid}}{/literal}" class="form-group save col-xs-4 list" title="save">

                                <img alt="delete" src="../images/delete.png" id="del{literal}{{translation.translationid}}{/literal}" class="form-group delete col-xs-4 list" title="delete">
                                <img alt="success" src="../images/success.png" id="okimg{literal}{{translation.translationid}}{/literal}" class="form-group ok-msg col-xs-4 ">
                            </div>
                        </div>
                    </div>
                </li>
              </ul>
            </div>
        </div>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/angular/translations/controllers.js"></script>
    <script>
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
    </script>