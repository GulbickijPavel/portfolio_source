<!DOCTYPE html>
<html lang="en" ng-app="CMS">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CMS</title>
     <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link type="text/css" rel="stylesheet" href="css/styles.css">
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/slider/jquery.bxslider.css">
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
    <script src="http://code.angularjs.org/1.2.9/angular-sanitize.js"></script>
    
     <script src='http://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>
    <script src="js/test.js"></script>
</head>
<body>
    <div id="wrapper" ng-controller="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CMS For www.pgulbickij.lt</a>
                <button type="button" class="navbar-toggle">test</button>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Test</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
           <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                         <li>
                            <a href="#"><i class="fa fa-folder fa-fw"></i>Page tree<span class="fa arrow"></span></a>
                            {literal}<ul class="nav nav-second-level">
                                <li ng-repeat="file in fileList.docs">
                                    <a class="divlink" ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.doc}}</a>
                                </li>
                                <li ng-repeat="folder in fileList.dir">
                                    <a href="#"><i class="fa fa-folder fa-fw"></i>{{folder.folderName}}<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li ng-if='folder.docs && folder.folderName == "main"' ng-repeat="file in folder.docs">
                                            <a ng-click='' class="main-controll" ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.doc}}</a>
                                        </li>
                                        <li ng-if='folder.dir && folder.folderName == "main"' ng-repeat="file in folder.dir">
                                            <a ng-click='' class="main-controll"  ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.docs}}</a>
                                        </li>

                                        <li ng-if='folder.docs && folder.folderName != "main"' ng-repeat="file in folder.docs">
                                            <a ng-click='go(file.doc, 0)' class="section-controll" ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.doc}}</a>
                                        </li>
                                        <li ng-if='folder.dir && folder.folderName != "main"' ng-repeat="file in folder.dir">
                                            <a ng-click='go(file.docs, 0)' class="section-controll"  ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.docs}}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            {/literal}
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-cog fa-fw"></i>Settings<span class="fa arrow"></span></a>{literal} 
                            <ul class="nav nav-second-level">
                                <li ng-repeat="setting in settings.docs">
                                    <a ng-click='translation()' class="cms" ref="{{setting.href}}"><i class="fa fa-file fa-fw"></i>{{setting.doc}}</a>
                                </li>

                                <li ng-repeat="sfolder in settings.dir">
                                    <a href="#"><i class="fa fa-folder fa-fw"></i>{{sfolder.folderName}}<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li ng-if='sfolder.docs' ng-repeat="sfile in sfolder.docs">
                                            <a ng-click='translation()' class="cms" ref="{{sfile.href}}"><i class="fa fa-file fa-fw"></i>{{sfile.doc}}</a>
                                        </li>
                                        <li ng-if='sfolder.dir' ng-repeat="sfile in settings.dir">
                                            <a ng-click='translation()' class="cms"  ref="{{sfile.href}}"><i class="fa fa-file fa-fw"></i>{{sfile.docs}}</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                            {/literal}
                        </li>
                    </ul>
                </div>
<!--
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
-->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <ul class="nav nav-tabs">
                <li class="web-page-control hidden"><a data-toggle="tab" href="#source">Source</a></li>
                <li class="web-page-control hidden"><a data-toggle="tab" href="#view">View</a></li>
                <li class="web-page-control hidden"><a data-toggle="tab" href="#edit">Control</a></li>
                <li class="web-page-control hidden"><a data-toggle="tab" href="#new-item">New</a></li>
                <li class="cms-page-control hidden"><a data-toggle="tab" href="#translations">Translations</a></li>
                <li><a data-toggle="tab" href="#test-editor">Translations</a></li>
            </ul>
            <h2 id="fileName"></h2>
             <div class="tab-content">
                <div id="source" class="tab-pane fade in active">
                    <textarea class="plain-html-area" id="file-content">
                        
            
                    </textarea>
                </div>
                <div id="view" class="tab-pane fade">
                    
                </div>
                <div id="edit" class="tab-pane fade">
                    
                      {literal}
<!--                    action="testSave.php" method="post"-->
                    <form class="form-horizontal" id="control-form" enctype="multipart/form-data">
                        <div class="input-group">
<!--                            ng-change='ckeditorUpate(item.Field, foo[item.Field])'-->
                                <span class="input-group-addon">Select:</span>
                                <select id="item-id" class="form-control" ng-options="option[1] for option in combo track by option[0]"
      ng-model="foo"></select>
                            <div class="input-group-btn">
                               <a href="#" id="item-del-button" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                      <input id="table-field" class="form-control col-xs-9" type="hidden" name="table" value="">
                        <div ng-repeat="item in ToEdit">
                            <div ng-if='item.Type == "varchar(50)"' class="input-group">
                                    <span class="input-group-addon">{{item.Field}}</span>
                                    <input  class="form-control col-xs-9" type="text" name="{{item.Field}}" value="{{foo[item.Field]}}">
                            </div>
                            <div ng-if='item.Type == "int(8)" || item.Type == "int(10)" ' class="row">
                                <input class="form-control" type="hidden" name="{{item.Field}}" value="{{foo[item.Field]}}" id="selected-item">
                            </div>
                            <div ng-if='item.Type == "int(15)"' class="row">
                                <input class="form-control" type="hidden" name="{{item.Field}}" value="{{foo[item.Field]}}">
                            </div>
                            <div ng-if='item.Type == "text"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
<!--
                                <div ng-controller="wysiwygeditor" class="editor container app">
                                    <div text-angular="text-angular" ng-model="htmlcontent" ta-disabled='disabled'></div>
                                    <textarea name="{{item.Field}}"  ng-model="htmlcontent">{{default[item.Field]}}</textarea>
                                    <button type="button" ng-click="htmlcontent = orightml">Reset</button>
                                </div>
-->
                                <!--  class="ckeditor" -->
                                <textarea id="b225{{item.Field}}" class="ckeditor" rows="4" cols="50"  class="form-control col-xs-9" name="{{item.Field}}">
                                    {{foo[item.Field]}}
                                </textarea>
                            </div>
                            <div ng-if='item.Type == "varchar(255)"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
                                <img ng-src='{{foo[item.Field]}}' class="image">
                                <input  type="file" name="fileToUpload[]" class="form-control col-xs-9 image-path" id="{{item.Field}}">
                                <input  type="text" name="{{item.Field}}" class="form-control col-xs-9" value="{{foo[item.Field]}}" id="{{item.Field}}-image">
                                <img ng-src="" width="200" style="display:none;" id="example-{{item.Field}}" class="image-example"/>
                            </div>
                            <div ng-if='item.Type == "varchar(10)"' class="input-group" >
                                <span class="input-group-addon">{{item.Field}}</span>
                                <input  type="text" name="{{item.Field}}" class="form-control col-xs-9" value="{{foo[item.Field]}}" >
                            </div>

                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2 right">
<!--                            <button type="reset" class="btn btn-default">Cancel</button>                            <button ng-click="go('skills.tpl')">skills.tpl</button>-->
                            <button action="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                        {/literal}
                    </form>
                </div>
                <div id="new-item" class="tab-pane fade">
                     {literal}
<!--                    action="testSave.php" method="post"-->
                    <form class="form-horizontal" id="new-tem-form" enctype="multipart/form-data">
<!--
                        <div class="input-group">
                                <span class="input-group-addon">Select:</span>
                                <select class="form-control" ng-options="option[1] for option in combo track by option[0]"
      ng-model="default"></select>
                        </div>
-->
                      <input id="new-item-table-field" class="form-control col-xs-9" type="hidden" name="table" value="">
                        <div ng-repeat="item in ToEdit">
                            <div ng-if='item.Type == "varchar(50)"' class="input-group">
                                    <span class="input-group-addon">{{item.Field}}</span>
                                    <input  class="form-control col-xs-9" type="text" name="{{item.Field}}">
                            </div>
                            <div ng-if='item.Type == "int(8)" || item.Type == "int(10)" ' class="row">
                                <input class="form-control" type="hidden" name="{{item.Field}}">
                            </div>
                            <div ng-if='item.Type == "text"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
                                <textarea class="ckeditor" rows="4" cols="50"  class="form-control col-xs-9" name="{{item.Field}}" >
                                    
                                </textarea>
                            </div>
                            <div ng-if='item.Type == "varchar(255)"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
                                <input  type="file" name="fileToUpload[]" class="form-control col-xs-9 image-path" id="new-{{item.Field}}">
                                <input  type="text" name="{{item.Field}}" class="form-control col-xs-9" value="" id="new-{{item.Field}}-image">
                                <img ng-src="" width="200" style="display:none;" id="example-new-{{item.Field}}" class="image-example"/>
                            </div>
                            <div ng-if='item.Type == "varchar(10)"' class="input-group" >
                                <span class="input-group-addon">{{item.Field}}</span>
                                <input  type="text" name="{{item.Field}}" class="form-control col-xs-9" >
                            </div>

                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2 right">
<!--                            <button type="reset" class="btn btn-default">Cancel</button>                            <button ng-click="go('skills.tpl')">skills.tpl</button>-->
                            <button id="new-item-form-submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                        {/literal}
                    </form>
                </div>
                <div id="translations" class="tab-pane fade">
                    {literal}
                    <div id="translations-main">
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
                                    {/literal}
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
                                        <img alt="save" src="../images/save.png" id="new-translation" class="form-group translation-save col-xs-4" title="save">
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
                                            <img alt="save" src="../images/save.png" id="{literal}{{translation.translationid}}{/literal}" class="form-group translation-save col-xs-4 list" title="save">

                                            <img alt="delete" src="../images/delete.png" id="del{literal}{{translation.translationid}}{/literal}" class="form-group translation-delete col-xs-4 list" title="delete">
                                            <img alt="success" src="../images/success.png" id="okimg{literal}{{translation.translationid}}{/literal}" class="form-group ok-msg col-xs-4 ">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                     
                </div>
                <div id="test-editor">
                 
                </div>
            </div> 
            {literal}
<!--
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Header</h1>
                </div>
            </div>
            <div class="row">
                <div id="loaded-page"class="panel panel-default pages" >
                <form role="form" action='test.php' method="post">
                    <div ng-controller="metaTags">
                        <div class="form-group" ng-repeat="tag in meta">
                            <label>Description</label>
                            <input class="form-control" name="description"  value="{{tag.description}}">
                        </div>
                        <div class="form-group" ng-repeat="tag in meta">
                            <label>Viewport</label>
                            <input class="form-control" name="viewport" value="{{tag.viewport}}">
                        </div>
                    </div>
                    <div ng-controller="links">
                        <label>Links</label>
                        <div ng-repeat="link in links" > 
                            <div class="form-group col-xs-3">
                                <input class="input-to-cut" type="text" class="form-control col-md-3" value="{{link.info[1]}}">
                            </div>
                            <div class="form-group col-xs-3">  
                                <input class="input-to-cut" type="text" class="form-control col-md-3" value="{{link.info[2]}}">
                            </div>
                            <div class="form-group col-xs-6">
                                <input class="input-to-cut" type="text" class="form-control col-md-6" value="{{link.info[3]}}">
                            </div>
                            <input type="text" name="link{{link.id}}" value="{{link.info[0]}} {{link.info[1]}}{{link.info[2]}} {{link.info[3]}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>
                </form>
                </div>
            </div>
-->
            {/literal}
        </div>
    </div>
    <!-- jQuery -->
   
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="//cdn.ckeditor.com/4.5.4/standard/ckeditor.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    <script src="../build/combined.min.js"></script>
    <script src="../build/script.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
