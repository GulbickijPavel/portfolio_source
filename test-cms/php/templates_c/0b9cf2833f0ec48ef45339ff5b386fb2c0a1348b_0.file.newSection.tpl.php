<?php /* Smarty version 3.1.24, created on 2015-11-30 16:51:37
         compiled from "C:/wamp/www/test-cms/smarty/templates/newSection.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15697565c7089522e32_50921674%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b9cf2833f0ec48ef45339ff5b386fb2c0a1348b' => 
    array (
      0 => 'C:/wamp/www/test-cms/smarty/templates/newSection.tpl',
      1 => 1448898597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15697565c7089522e32_50921674',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565c708957cbc5_81894196',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565c708957cbc5_81894196')) {
function content_565c708957cbc5_81894196 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15697565c7089522e32_50921674';
?>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <form id="new-section-form228" class="form-horizontal" enctype="multipart/form-data">
            <div class="input-group">
                <span class="input-group-addon">Section type</span>
                <select name="sectionType" class="form-control">
                    <option value="simple">Simple</option>
                    <option value="saab">Coming soon more....</option>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-addon">Section name</span>
                <input type="text" class="form-control" name="sectionName">
            </div>
            <div class="input-group">
                <span class="input-group-addon">Use table</span>
                <input type="text" class="form-control" name="usingTable">
            </div>
            <div class="input-group">
                <span class="input-group-addon">Section name</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group">
                <span class="input-group-addon">Section name</span>
                <input type="text" class="form-control">
            </div>
            <button class="btn btn-default" type="reset">Reset</button>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
        
         <?php echo '<script'; ?>
 src="/test-cms/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->getSubTemplate ('../../smarty/templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>