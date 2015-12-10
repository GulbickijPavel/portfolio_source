<?php /* Smarty version 3.1.24, created on 2015-10-29 12:58:44
         compiled from "smarty/templates/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:64285631fbe44e8179_00629047%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1520f573eef4795087b1505ab6e007c8ec233dd9' => 
    array (
      0 => 'smarty/templates/menu.tpl',
      1 => 1443193108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64285631fbe44e8179_00629047',
  'variables' => 
  array (
    'sections' => 0,
    'item' => 0,
    'lang' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5631fbe45e6033_15187031',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5631fbe45e6033_15187031')) {
function content_5631fbe45e6033_15187031 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '64285631fbe44e8179_00629047';
?>

        <div class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">Pavel Gulbickij</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
              <ul class="nav navbar-nav">
                    <?php
$_from = $_smarty_tpl->tpl_vars['sections']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['shown'] == 1) {?>
                    <li>
                        <a href="#<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="menu_item"><?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['sectionname'];
$_tmp3=ob_get_clean();
echo smarty_function_translation(array('langEn'=>$_tmp3),$_smarty_tpl);?>
</a>
                    </li>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php if ($_smarty_tpl->tpl_vars['lang']->value == 'lt') {?><img alt="lt" src="images/lt.gif"><?php }?> <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'ru') {?><img alt="ru" src="images/ru.png"><?php }?> <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'en') {?> <img alt="en" src="images/en.png"> <?php }?> <?php echo smarty_function_translation(array('langId'=>"64"),$_smarty_tpl);?>
&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">   
                     <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
                      <li><a><img alt="image" class="settings-img" src="images/settings.png"></a></li>
                     <li><a href="/portfolio/portfolio.lt/logout.php" class="btn btn-danger log-out"><?php echo smarty_function_translation(array('langEn'=>"Log-out"),$_smarty_tpl);?>
</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'en') {?>
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/lt" data-toggle="tooltip" data-placement="bottom" title="Lt" data-original-title="Lt"><img alt="lt" src="images/lt.gif"><span>Lietuvių</span></a></li>
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/ru" id="lang-ru" data-toggle="tooltip" data-placement="bottom" title="Ru" data-original-title="Ru"><img alt="ru" src="images/ru.png"><span>Русский</span></a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'ru') {?>
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/en" id="lang-en" data-toggle="tooltip" data-placement="bottom" title="En" data-original-title="En"><img alt="en" src="images/en.png"><span>English</span></a></li>
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/lt" data-toggle="tooltip" data-placement="bottom" title="Lt" data-original-title="Lt"><img alt="lt" src="images/lt.gif"><span>Lietuvių</span></a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'lt') {?>  
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/ru" id="lang-ru" data-toggle="tooltip" data-placement="bottom" title="Ru" data-original-title="Ru"><img alt="ru" src="images/ru.png"><span>Русский</span></a></li>
                    <li class="lang-img"><a href="/portfolio/portfolio.lt/en" id="lang-en" data-toggle="tooltip" data-placement="bottom" title="En" data-original-title="En"><img alt="en" src="images/en.png"><span>English</span></a></li>
                    <?php }?>
                   
                    </ul>
                </li>
              </ul>  
            </div>
          </div>
        </div><?php }
}
?>