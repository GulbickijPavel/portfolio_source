    <div id="contactForm-container">    
        <div id= "contactForm" class="jumbotron">
            <p class="contact-forminfo">      
                Github: <a href="https://github.com/GulbickijPavel" target="_blank"> https://github.com/GulbickijPavel </a> <br>
                <a href="files/cv.pdf" target="_blank" download="cv.pdf"> {translation langId ="85"}</a>
            </p>
            <form class="form-horizontal contact-form" id="contact-form">
              <fieldset>
                <legend>{translation langId="17"} {translation langId="18"}</legend>
                <span class="help-block">{translation langId="19"}</span>
                <div class="input-group">
                    <span class="input-group-addon">{translation langId="9"}*</span>
                    <input type="text" class="form-control" id="inputCompany" name="company" data-validation="length" data-validation-length="min3"  data-validation-error-msg="{translation langId="58"}" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">{translation langId="14"},{translation langId="15"}*</span>
                    <input type="text" class="form-control" id="inputSender"  placeholder="Vardenis, Pavardenis" name="nameSurname" data-validation="custom" data-validation-regexp="^([ a-zA-Zа-яА-Я]+)$" data-validation-error-msg="{translation langId="55"}" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon">{translation langId="4"}*</span>
                    <input class="form-control" data-validation="email" data-validation-error-msg="{translation langId="56"}" id="cemail"  placeholder="Email" name="email" data-validation-optional="true">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">{translation langId="13"}</span>
                    <input type="phone" class="form-control" id="inputPhone"  placeholder="+370 XXX XXXXX" name="phone" data-validation="custom" data-validation-regexp="^([ +0-9]+)$" data-validation-error-msg="{translation langId="57"}" data-validation-optional="true" >
                </div>
                <div class="form-group">
                  <label for="textArea" class="col-lg-2 control-label">{translation langId="16"} *</label>
                  <div class="col-lg-10">
                    <textarea class="form-control editor" rows="3" id="editor" name="comments" data-validation="length" data-validation-length="min3"  data-validation-error-msg="{translation langId="59"}" data-validation-optional="true" ></textarea>
                  </div>
                </div>
                <div class="form-group right">
                  <div class="col-lg-10 col-lg-offset-2 confirmation">
                    <div class="right">
                        <button type="reset" id="cform-cancel" class="btn btn-default">{translation langId="20"}</button>
                        <button type="submit" class="btn btn-primary ">{translation langId="21"}</button>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
        </div>
    </div>
    <div id="backgroundPopup">&nbsp;</div>