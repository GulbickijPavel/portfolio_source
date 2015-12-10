<?php /* Smarty version 3.1.24, created on 2015-10-29 15:00:26
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/login/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:137715632267aad5fc9_58725616%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52c3f296d453c1ec97a2a401dee39131b55e7445' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/login/login.tpl',
      1 => 1441701878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137715632267aad5fc9_58725616',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5632267ab1c4d5_26612242',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5632267ab1c4d5_26612242')) {
function content_5632267ab1c4d5_26612242 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '137715632267aad5fc9_58725616';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="slider/jquery.bxslider.css">
    </head>
    <body class="login-body">
        <div class="login">
            <div class="login-form jumbotron">
                <form class="form-horizontal" action="php/login.php" method="post">
                    <div class="form-group">
                      <label for="" class="col-lg-2 control-label">Username</label>
                      <div class="col-lg-10">
                        <input type="text" class="form-control" name="username" id="" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-lg-2 control-label">Password</label>
                      <div class="col-lg-10">
                        <input type="password" class="form-control" name="password" id="" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2 right">
                        <button type="reset" class="btn btn-default">Atšaukti</button>
                        <button type="submit" class="btn btn-primary">Pateikti</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </body>

</html><?php }
}
?>