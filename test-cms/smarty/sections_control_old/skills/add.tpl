{include file='../../header.tpl'}
           <div class="container">
            <div class="main" id="main">
                <div class="jumbotron">
                    {$successmsg}
                    <form class="form-horizontal" action="save.php?sectionname=skil-add" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend>{translation langEn="New"}
                            <a href="../../php/actions/change.php?sectionname=skil" class="btn btn-default right">{translation langEn="Back"}</a>
                            </legend>
                            <input type="hidden" value="" name="skillid" id="skill-id">
                            <div class="form-group">
                              <label class="col-lg-2 control-label">{translation langEn="Title"}</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" value="" name="skillname" id="skill-name" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">{translation langEn="Knowledge"}</label>
                                <div id="knowledge-box"></div>
                            </div>
                            <input type="hidden" class="form-control" name="skillKnowledgeEn" id="knowledgeEn">
                            <input type="hidden" class="form-control" name="skillKnowledgeLt" id="knowledgeLt">
                            <input type="hidden" class="form-control" name="skillKnowledgeRu" id="knowledgeRu">
                            <div class="form-group">
                              <label class="col-lg-2 control-label">{translation langEn="Photo"}</label>
                              <div class="col-lg-10">
<!--                                <img src="../../{$skill.skillimage}" class="image" alt="skill image" id="skill-image">-->
                                <a class="btn btn-info img-upload-btn">{translation langEn="Upload photo"}</a>
                                <input type="file" name="fileToUpload" class="image-upload" id="img-url"/>
                                <img src="" width="200" style="display:none;" id="img-example" />
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="textArea" class="col-lg-2 control-label">{translation langEn="Description"}</label>
                              <div class="col-lg-10">
                                <div class="editor {if $lang != 'en'}hide-me{/if}">
                                <textarea class="form-control" name="infoEn"rows="3" id="editor-en" wrap="hard"></textarea>
                                </div>
                                <div class="editor {if $lang != 'lt'}hide-me{/if}">
                                <textarea class="form-control" name="infoLt"rows="3" id="editor-lt" wrap="hard"></textarea>
                                </div>
                                <div class="editor {if $lang != 'ru'}hide-me{/if}">
                                <textarea class="form-control" name="infoRu"rows="3" id="editor-ru" wrap="hard"></textarea>
                                </div>
                                  <a class="btn btn-info right translations-btn">{translation langEn="Translations"}</a>
                              </div>
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
        <script>
        $('.translations-btn').click(function(){
            $('.editor').toggleClass('open');
        });
        $('#img-url').change( function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]),
            imagename = $("#img-name").val();;
            $("#img-example").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
            $("#disp_tmp_path").val(tmppath);
        });
        var langEn = 'en',
            langLt = 'lt',
            langRu = 'ru';
        initSample(langEn);
        initSample(langLt);
        initSample(langRu);
        var knowledgeCombo = $('#knowledge-box').magicSuggest({
            placeholder: 'Pasirinkite...',
            allowFreeEntries: false,
            value: 1,
            data: '../../php/combo.php?section=skills&box=knowledge',
            valueField: 'id',
            cls: 'col-lg-10',
            style: 'width:80%; margin-left:15px',
            displayField: 'catEn',
            maxSelection: 1
        });
        $(knowledgeCombo).on("selectionchange", function(){
            if(this.getSelection()[0]){
                var en = this.getSelection()[0].catEn,
                    lt = this.getSelection()[0].catLt,
                    ru = this.getSelection()[0].catRu;
            }
            else{
               var  en = '',
                    lt = '',
                    ru = '';
            }
            $("#knowledgeEn").val(en);
            $("#knowledgeLt").val(lt);
            $("#knowledgeRu").val(ru);
        });
        </script>
    </body>
</html>