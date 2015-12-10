{include file='../../header.tpl'}
        <div class="container">
        <div class="main" id="main">
            <div class="jumbotron">
                <div class="alert alert-dismissible alert-success alert-box">
                  <button type="button" class="close" data-dismiss="alert" >×</button>
                  <a href="#" class="alert-link"></a>
                </div>
               {$successmsg}
                <form class="form-horizontal" action="save.php?sectionname=expr" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>{translation langEn="Experience"}
                            <a class="btn btn-primary right control" id="experience-add-button">{translation langEn="New"}</a>
                        </legend>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">{translation langEn="Choose"}</label>
                            <div class="col-lg-10">
                                <div id="combox"></div>
                                <a class="btn btn-danger" id="del-button">{translation langEn="Delete"}</a>
                            </div>    
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">{translation langEn="Company"}</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="{$experience.company}" name="company" id="company" placeholder="">
                          </div>
                        </div>
                        <input type="hidden" value="{$experience.experienceid}" name="experienceid" id="experience-id">
                        <div class="form-group">
                          <label class="col-lg-2 control-label">{translation langEn="Address"}</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="{$experience.address}" name="address" id="address" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">{translation langEn="Website"}</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="{$experience.url}" name="url" id="url" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">{translation langEn="Work start"}</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="{$experience.periodstart}" name="periodstart" id="periodstart" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">{translation langEn="Work end"}</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="{$experience.periodend}" name="periodend" id="periodend" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">{translation langEn="Position"}</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="{$experience.position}" name="position" id="position" placeholder="">
                          </div>
                        </div>
<!--
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label">{translation langEn="Description"}</label>
                          <div class="col-lg-10">
                            <textarea class="form-control" name="description"rows="3" id="editor">{$experience.description}</textarea>
                          </div>
                        </div>
-->
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label">{translation langEn="Description"}</label>
                            <div class="col-lg-10">
                                <div class="editor {if $lang != 'en'}hide-me{/if}">
                                    <textarea class="form-control" name="descriptionEn" rows ="5" id="editor-en">{$experience.descriptionEn}</textarea>
                                </div>
                            </div>
                            <div class="editor {if $lang != 'lt'}hide-me{/if}">
                                <label for="textArea" class="col-lg-2 control-label">Lt</label>
                                <div class="col-lg-10">
                                        <textarea class="form-control" name="descriptionLt" rows ="5" id="editor-lt">{$experience.descriptionLt}</textarea>
                                </div>
                            </div>
                            <div class="editor {if $lang != 'ru'}hide-me{/if}">
                                <label for="textArea" class="col-lg-2 control-label ">Ru</label>
                                <div class="col-lg-10">
                                        <textarea class="form-control" name="descriptionRu" rows ="5" id="editor-ru">{$experience.descriptionRu}</textarea>
                                </div>
                            </div>
                            <a class="btn btn-info right translations-btn">{translation langEn="Translations"}</a>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2 right">
                            <button type="reset" class="btn btn-default">{translation langEn="Cancel"}</button>
                            <button type="submit" class="btn btn-primary">{translation langEn="Submit"}</button>
                          </div>
                        </div>
                      </fieldset>
                    
                </form>
            </div>
        </div>
        </div>
        {include file='../../footer.tpl'}
        <script type="text/javascript" src="/portfolio.lt/js/experience/script.js"></script>
    </body>
</html>