<?php
/* Smarty version 3.1.28, created on 2016-06-23 03:36:32
  from "/var/www/html/training/training/husnain/mvc/app/views/student/listAll.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576b9180a4bc83_66951775',
  'file_dependency' => 
  array (
    'dbd118f1143f7828ed0da6b001706dcab90846db' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/student/listAll.tpl',
      1 => 1466601877,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_576b9180a4bc83_66951775 ($_smarty_tpl) {
?>
<h2>All students information</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Operation</th>

</tr>
    <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: stdarr in /var/www/html/training/training/husnain/mvc/public/templates_c/dbd118f1143f7828ed0da6b001706dcab90846db_0.file.listAll.tpl.cache.php on line <i>37</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>234200</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/var/www/html/training/training/husnain/mvc/public/index.php' bgcolor='#eeeeec'>../index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>273584</td><td bgcolor='#eeeeec'>App->__construct(  )</td><td title='/var/www/html/training/training/husnain/mvc/public/index.php' bgcolor='#eeeeec'>../index.php<b>:</b>10</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0011</td><td bgcolor='#eeeeec' align='right'>487936</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.call-user-func-array' target='_new'>call_user_func_array</a>
(  )</td><td title='/var/www/html/training/training/husnain/mvc/core/App.php' bgcolor='#eeeeec'>../App.php<b>:</b>26</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0011</td><td bgcolor='#eeeeec' align='right'>488384</td><td bgcolor='#eeeeec'>StudentController->index(  )</td><td title='/var/www/html/training/training/husnain/mvc/core/App.php' bgcolor='#eeeeec'>../App.php<b>:</b>26</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0013</td><td bgcolor='#eeeeec' align='right'>491984</td><td bgcolor='#eeeeec'>ViewManager->render(  )</td><td title='/var/www/html/training/training/husnain/mvc/app/controllers/StudentController.php' bgcolor='#eeeeec'>../StudentController.php<b>:</b>57</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0013</td><td bgcolor='#eeeeec' align='right'>492032</td><td bgcolor='#eeeeec'>Custom_Smarty->render(  )</td><td title='/var/www/html/training/training/husnain/mvc/core/views/viewManager.php' bgcolor='#eeeeec'>../viewManager.php<b>:</b>26</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0013</td><td bgcolor='#eeeeec' align='right'>492160</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/setup.php' bgcolor='#eeeeec'>../setup.php<b>:</b>42</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0013</td><td bgcolor='#eeeeec' align='right'>492888</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_internal_templatebase.php' bgcolor='#eeeeec'>../smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0016</td><td bgcolor='#eeeeec' align='right'>526080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_internal_templatebase.php' bgcolor='#eeeeec'>../smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.0017</td><td bgcolor='#eeeeec' align='right'>555632</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_internal_template.php' bgcolor='#eeeeec'>../smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.0018</td><td bgcolor='#eeeeec' align='right'>561376</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_template_cached.php' bgcolor='#eeeeec'>../smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.0019</td><td bgcolor='#eeeeec' align='right'>590128</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>../smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.0108</td><td bgcolor='#eeeeec' align='right'>599272</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_template_compiled.php' bgcolor='#eeeeec'>../smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.0108</td><td bgcolor='#eeeeec' align='right'>600408</td><td bgcolor='#eeeeec'>content_576a9199da2a50_23412986(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_template_resource_base.php' bgcolor='#eeeeec'>../smarty_template_resource_base.php<b>:</b>129</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in /var/www/html/training/training/husnain/mvc/public/templates_c/dbd118f1143f7828ed0da6b001706dcab90846db_0.file.listAll.tpl.cache.php on line <i>37</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>234200</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/var/www/html/training/training/husnain/mvc/public/index.php' bgcolor='#eeeeec'>../index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>273584</td><td bgcolor='#eeeeec'>App->__construct(  )</td><td title='/var/www/html/training/training/husnain/mvc/public/index.php' bgcolor='#eeeeec'>../index.php<b>:</b>10</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0011</td><td bgcolor='#eeeeec' align='right'>487936</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.call-user-func-array' target='_new'>call_user_func_array</a>
(  )</td><td title='/var/www/html/training/training/husnain/mvc/core/App.php' bgcolor='#eeeeec'>../App.php<b>:</b>26</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0011</td><td bgcolor='#eeeeec' align='right'>488384</td><td bgcolor='#eeeeec'>StudentController->index(  )</td><td title='/var/www/html/training/training/husnain/mvc/core/App.php' bgcolor='#eeeeec'>../App.php<b>:</b>26</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0013</td><td bgcolor='#eeeeec' align='right'>491984</td><td bgcolor='#eeeeec'>ViewManager->render(  )</td><td title='/var/www/html/training/training/husnain/mvc/app/controllers/StudentController.php' bgcolor='#eeeeec'>../StudentController.php<b>:</b>57</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0013</td><td bgcolor='#eeeeec' align='right'>492032</td><td bgcolor='#eeeeec'>Custom_Smarty->render(  )</td><td title='/var/www/html/training/training/husnain/mvc/core/views/viewManager.php' bgcolor='#eeeeec'>../viewManager.php<b>:</b>26</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0013</td><td bgcolor='#eeeeec' align='right'>492160</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/setup.php' bgcolor='#eeeeec'>../setup.php<b>:</b>42</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0013</td><td bgcolor='#eeeeec' align='right'>492888</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_internal_templatebase.php' bgcolor='#eeeeec'>../smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0016</td><td bgcolor='#eeeeec' align='right'>526080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_internal_templatebase.php' bgcolor='#eeeeec'>../smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.0017</td><td bgcolor='#eeeeec' align='right'>555632</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_internal_template.php' bgcolor='#eeeeec'>../smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.0018</td><td bgcolor='#eeeeec' align='right'>561376</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_template_cached.php' bgcolor='#eeeeec'>../smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.0019</td><td bgcolor='#eeeeec' align='right'>590128</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>../smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.0108</td><td bgcolor='#eeeeec' align='right'>599272</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_template_compiled.php' bgcolor='#eeeeec'>../smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.0108</td><td bgcolor='#eeeeec' align='right'>600408</td><td bgcolor='#eeeeec'>content_576a9199da2a50_23412986(  )</td><td title='/var/www/html/training/training/husnain/mvc/vendor/Smarty/libs/sysplugins/smarty_template_resource_base.php' bgcolor='#eeeeec'>../smarty_template_resource_base.php<b>:</b>129</td></tr>
</table></font>

</table>


<?php }
}
