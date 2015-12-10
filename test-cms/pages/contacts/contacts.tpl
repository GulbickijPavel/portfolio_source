        <section class="jumbotron" id="contacts">
            <h2>{translation langEn="Contacts"}</h2>
            <hr>
            <form class="form-horizontal" id="contact-form">
              <fieldset>
                <legend>{translation langId="17"} {translation langId="18"}</legend>
                <span class="help-block">{translation langId="19"}</span>
                 <div class="form-group">
                  <label for="inputCompany" class="col-lg-2 control-label">{translation langId="9"} *</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputCompany" name="company" data-validation="length" data-validation-length="min3"  data-validation-error-msg="{translation langId="58"}" data-validation-optional="true" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSender" class="col-lg-2 control-label">{translation langId="14"},{translation langId="15"} *</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputSender"  placeholder="Vardenis, Pavardenis" name="nameSurname" data-validation="custom" data-validation-regexp="^([ a-zA-Zа-яА-Я]+)$" data-validation-error-msg="{translation langId="55"}" data-validation-optional="true" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="cemail" class="col-lg-2 control-label">{translation langId="4"} *</label>
                  <div class="col-lg-10">
                    <input class="form-control" data-validation="email" data-validation-error-msg="{translation langId="56"}" id="cemail"  placeholder="Email" name="email" data-validation-optional="true">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPhone" class="col-lg-2 control-label">{translation langId="13"}</label>
                  <div class="col-lg-10">
                    <input type="phone" class="form-control" id="inputPhone"  placeholder="+370 XXX XXXXX" name="phone" data-validation="custom" data-validation-regexp="^([ +0-9]+)$" data-validation-error-msg="{translation langId="57"}" data-validation-optional="true" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="textArea" class="col-lg-2 control-label">{translation langId="16"} *</label>
                  <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="textArea"  name="comments" data-validation="length" data-validation-length="min3"  data-validation-error-msg="{translation langId="59"}" data-validation-optional="true" ></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2 confirmation">
                    <button type="reset" class="btn btn-default">{translation langId="20"}</button>
                    <button type="submit" class="btn btn-primary">{translation langId="21"}</button>
                  </div>
                </div>
              </fieldset>
            </form>
        </section>
        </div>
    </div>