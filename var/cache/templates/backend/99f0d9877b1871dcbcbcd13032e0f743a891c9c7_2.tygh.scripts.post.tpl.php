<?php
/* Smarty version 4.1.1, created on 2024-07-29 15:32:58
  from '/app/www/design/backend/templates/addons/help_center/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66a78bfae9f910_35078891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99f0d9877b1871dcbcbcd13032e0f743a891c9c7' => 
    array (
      0 => '/app/www/design/backend/templates/addons/help_center/hooks/index/scripts.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a78bfae9f910_35078891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/help_center/help_center.js"),$_smarty_tpl);?>

<?php }
}
}
