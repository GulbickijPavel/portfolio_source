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
                                <textarea class="ckeditor" id="new-{{item.Field}}" rows="4" cols="50"  class="form-control col-xs-9" name="{{item.Field}}" >
                                    
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                        {/literal}
                    </form>
                </div>