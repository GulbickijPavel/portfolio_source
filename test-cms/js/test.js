var CMS = angular.module('CMS', []);


CMS.controller('wrapper', function ($scope, $http, $timeout) {
    $http.get('php/getDocumentTree.php?tree=main').success(function(data) {
        $scope.fileList = {};
        $scope.fileList = data;
    });
    $http.get('php/getDocumentTree.php?tree=settings').success(function(data) {
        $scope.settings = {};
        $scope.settings = data;
    });
    $scope.go = function($file, $value){
        $http.get('php/generateControlPage.php?item='+$file).success(function(data) {
            $scope.ToEdit = data;
        });
        $http.get('php/generateControlPage.php?item=combo&file='+$file).success(function(data) {
            $scope.combo = data;
            $scope.foo = data[$value];
        });
    }
    $scope.ckeditorUpate = function($data){

    }
    $scope.translation = function(){
        $http.get('php/getTranslations.php').success(function(data) {
            $scope.translations = data;
        });
    }
});
CMS.controller('metaTags', function ($scope, $http) {
    $http.get('php/getMetaTags.php').success(function(data) {
        $scope.meta = data;
  });
});
CMS.controller('links', function ($scope, $http) {
    $http.get('php/getLinks.php').success(function(data) {
        $scope.links = data;
  });
});
CMS.controller('TranslationList', function ($scope, $http) {
    
});
CMS.controller('mainMenu', function ($scope, $http) {
     $http.get('php/generateMenu.php').success(function(data) {
        $scope.menuItems = data;
  });
});


 
