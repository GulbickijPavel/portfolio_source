    <div id="wrapper" ng-controller="wrapper">
        {include file='smarty/templates/navigation.tpl'}
        <div id="page-wrapper">
            <ul class="nav nav-tabs">
<!--                <li class="control"><a data-toggle="tab" href="#source">Source</a></li>-->
                <li class="web-page-only-control" id="view-tab-li"><a data-toggle="tab" href="#view">View</a></li>
                <li class="web-page-only-control"><a data-toggle="tab" href="#edit">Control</a></li>
                <li class="web-page-only-control"><a data-toggle="tab" href="#new-item">New</a></li>
                <li class="cms-page-only-control"><a data-toggle="tab" href="#translations">Translations</a></li>
                <li class="main-web-page-control"><a data-toggle="tab" href="#header-control">Header</a></li>
                <li class="main-web-page-control"><a data-toggle="tab" href="#footer-control">Footer</a></li>
                <li class="main-web-page-control"><a data-toggle="tab" href="#menu-control">Menu</a></li>
            </ul>
           <h2 id="fileName"></h2>
<!--
            <button class="btn btn-primary wiev-rr-button-my"><span class="glyphicon glyphicon-refresh"></span></button>
        <select class="form-control" id="langDropDown">Language
                <option value="en">En</option>
                <option value="lt">Lt</option>
                <option value="ru">Ru</option>
            </select>
-->
             <div class="tab-content">
<!--
                <div id="source" class="tab-pane fade in active">
                    <textarea class="plain-html-area" id="file-content">
                        
            
                    </textarea>
                </div>
-->
                <div id="view" class="tab-pane fade">
                    
                </div>
                 {include file='smarty/templates/edit.tpl'}
                 {include file='smarty/templates/new.tpl'}
                <div id="translations" class="tab-pane fade">
                    {literal}
                    <div id="translations-main">
                        <button class="btn btn-primary lang-add-btn"> Add language</button>
                        <button class="btn btn-primary lang-control-btn"> Language control</button>
                        
                          <div id="new-lang-container" class="jumbotron new-lang-form">
                            <h3>New language</h3>
                            <form id="new-lang-form">
        <!--`name`, `url`, `keyword`, `langNative`, `image`  -->
                              <div class="input-group">
                                      <span class="input-group-addon">Lang name:</span>
                                      <input name="name" class="form-control" type="text">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Url:</span>
                                      <input name="url" class="form-control" type="text">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Keyword:</span>
                                      <input name="keyword" class="form-control"  type="text">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">LangNative:</span>
                                      <input name="langNative" class="form-control"  type="text">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Image:</span>
                                      <input name="image" class="form-control"  type="file">
                              </div>
                              <button class="btn btn-primary" type="submit"> Submit </button>
                              <button class="btn btn-default" type="reset"> Resset </button>
                            </form>
                          </div>
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
                {literal}
                <div id="menu-control" class="tab-pane fade">
                    <div ng-controller="mainMenu">
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label>Section</label>
                            </div>
                            <div class="form-group col-xs-3">
                                <label>UsingTable</label>
                            </div>
                            <div class="form-group col-xs-1">
                                <label>Shown</label>
                            </div>
                            <div class="form-group col-xs-1">
                                <label>Order</label>
                            </div> 
                            <div class="form-group col-xs-2">
                                <label>Action</label>
                            </div>
                        </div>
                        <div ng-repeat="menuItem in menuItems | orderBy:'sectionOrder'">
                            <div class="row">
                                <input id="secId{{menuItem.sectionid}}" type="hidden" class="form-control" value="{{menuItem.sectionid}}">
                                <div class="form-group col-xs-4">
                                    <input id="secName{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.sectionname}}">
                                </div>
                                <div class="form-group col-xs-3">
                                    <input id="secTable{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.usingTable}}">
                                </div>
                                <div class="form-group col-xs-1">
                                    <input id="secShow{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.shown}}">
                                </div>
                                <div class="form-group col-xs-1">
                                    <input id="secOrder{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.sectionOrder}}">
                                </div>
                                <div class="form-group col-xs-1">
                                    <img id="secSave{{menuItem.sectionid}}" class="form-group meniu-control-save" ng-src="../images/save.png">
                                </div>
                                <div class="form-group col-xs-1">
                                    <img alt="success" src="../images/success.png" id="okimg{{menuItem.sectionid}}" class="form-group ok-msg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/literal}
                <div id="header-control" class="tab-pane fade">
                     <h3>Header</h3>
                    {literal}
                    <form role="form" action='test.php' method="post">
<!--                        <div ng-controller="metaTags">

                            <div class="form-group" ng-repeat="tag in meta">
                                <label>Description</label>
                                <input class="form-control" name="description"  value="{{tag.description}}">
                            </div>
                            <div class="form-group" ng-repeat="tag in meta">
                                <label>Viewport</label>
                                <input class="form-control" name="viewport" value="{{tag.viewport}}">
                            </div>

                        </div>-->
                        <div ng-controller="links">
                            <label>Meta</label>
                            <div ng-repeat="link in links" >
                                <input ng-if="link.meta" type="text" class="form-control col-md-3" value="{{link.meta}}" name="{{link.meta}}">
                            </div>
                            <label>Links</label>
                            <div ng-repeat="link in links" >
                                <input ng-if="link.item" type="text" class="form-control col-md-3" value="{{link.item}}" name="{{link.item}}">
                            </div>
<!--
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
-->
                        </div>
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </form>
                          {/literal}
                </div>
                 <div id="footer-control" class="tab-pane fade">
                     <h3>Footer</h3>
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

