<!DOCTYPE html>
<html lang="{$lang}">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="/portfolio/portfolio.lt/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="/portfolio/portfolio.lt/css/styles.css">
    <link rel="stylesheet" href="/portfolio/portfolio.lt/css/magicsuggest-min.css">
    <link rel="stylesheet" href="/portfolio/portfolio.lt/slider/jquery.bxslider.css">
  </head>
    <body>
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
                  <label for="inputPhone" class="col-lg-2 control-label">{translation langId="13"} *</label>
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
    </body>
   
    <script type="text/javascript" src=" http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/vendor/velocity.min.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/unslider.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/vortex/js/jquery.vortex.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/script.js"></script> 
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/jquery.fittext.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/jquery.slides.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/slider/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/jquery.confirm.js"></script>
    <script src="/portfolio/portfolio.lt/js/bootstrap.min.js"></script>
    <script src="/portfolio/portfolio.lt/js/bootswatch.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/magicsuggest-min.js"></script>
    <script src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>
    <script type="text/javascript" src="/portfolio/portfolio.lt/js/ckeditor/sample.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.43/jquery.form-validator.min.js"></script>
    <script>
        $.validate();
    </script>
</html>