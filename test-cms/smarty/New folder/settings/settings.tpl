<!DOCTYPE html>
<html ng-app="translations">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {assign var="desc" value="{translation langEn="Junior full stack web developer personal portfolio"}"}
    {$desc}
    {translation langEn="Junior full stack web developer"} 
    <meta name="description" content="{translation langEn="Junior full stack web developer"},{translation langEn="personal portfolio website"}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/bootstrap.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/styles.css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/magicsuggest-min.css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/slider/jquery.bxslider.css">
  </head>
<body ng-controller="TranslationList">
    <div class="container">
        <div class="main translations" id="translations-main">
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
    </div>

</body>

  <script type="text/javascript" src="/portfolio/portfolio.lt/js/angular/angular.min.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/angular/translations/controllers.js"></script>
            <script type="text/javascript" src=" http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
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
    </body>
</html>