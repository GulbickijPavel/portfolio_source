//var CMS = angular.module('CMS', ['ngSanitize']);
//
//CMS.controller('fileStructure', function ($scope, $http) {
//    $http.get('php/getDocumentTree.php?tree=main').success(function(data) {
//        $scope.fileList = {};
//        $scope.fileList = data;
//    });
//    $http.get('php/getDocumentTree.php?tree=settings').success(function(data) {
//        $scope.settings = {};
//        $scope.settings = data;
//    });
//});
//CMS.controller('metaTags', function ($scope, $http) {
//    $http.get('php/getMetaTags.php').success(function(data) {
//        $scope.meta = data;
//  });
//});
//CMS.controller('links', function ($scope, $http) {
//    $http.get('php/getLinks.php').success(function(data) {
//        $scope.links = data;
//  });
//});
//CMS.controller('TranslationList', function ($scope, $http) {
//    $http.get('php/getTranslations.php').success(function(data) {
//        $scope.translations = data;
//    });
//});
//CMS.controller('items', function ($scope, $http) {
//    $scope.go = function($link){
//        $http.get($link).success(function(data) {
//            $scope.ToEdit = data;
//        });
//    }
//});
angular.module("textAngularTest", ['textAngular']);

	function wysiwygeditor($scope) {
	  $scope.orightml = '';
	  $scope.htmlcontent = $scope.orightml;
	  $scope.disabled = false;
	};