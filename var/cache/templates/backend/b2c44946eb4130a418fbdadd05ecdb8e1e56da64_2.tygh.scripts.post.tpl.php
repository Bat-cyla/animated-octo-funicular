<?php
/* Smarty version 4.1.1, created on 2024-07-29 15:32:58
  from '/app/www/design/backend/templates/addons/vendor_communication/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66a78bfaf2dc81_90375541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2c44946eb4130a418fbdadd05ecdb8e1e56da64' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_communication/hooks/index/scripts.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a78bfaf2dc81_90375541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/vendor_communication/backend/vendor_communication.js"),$_smarty_tpl);
}
}
