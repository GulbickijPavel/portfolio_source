var translations = angular.module('translations', []);

translations.controller('TranslationList', function ($scope, $http) {
    
 $http.get('json.php?scope=translations').success(function(data) {
    $scope.translations = data;
  });
//    $scope.saveTranslation = function(){
//        $(".save").click(function(event){
//            var id = this.id, 
//                ru = $('#'+"ru" + id+'').val(),
//                en = $('#'+"en" + id+'').val(),
//                lt = $('#'+"lt" + id+'').val();
//                console.log(ru);
//                console.log(en);
//                console.log(lt);
////                request =$.ajax({
////                method: "POST",
////                url:"../../php/actions/save.php",
////                data: { sectionname: "translations", trid: id, langru: ru, langen: en, langlt: lt }
////            });
////            request.success(function(data) {
////                 var rufield = $(data).find('#'+"ru" + id+'').val(),
////                     enfield = $(data).find('#'+"en" + id+'').val(),
////                     ltfield = $(data).find('#'+"lt" + id+'').val();
////                 $('#'+"ru" + id+'').val(rufield);
////                 $('#'+"en" + id+'').val(enfield);
////                 $('#'+"lt" + id+'').val(ltfield);
////                $('#okimg'+ id +'').show();
////            });
////
////            request.fail(function( jqXHR, textStatus ) {
////              alert( "Request failed: " + textStatus );
////            });
//        });
//    
//    };
//    $scope.saveTranslation();
  $scope.orderProp = 'translationid';
});