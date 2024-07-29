<?php
/* Smarty version 4.1.1, created on 2024-07-29 15:39:07
  from '/app/www/design/backend/templates/addons/cp_generate_cart_from_file/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66a78d6b9ef373_25864589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e782b59ba5c7d1ac09981f77b5740ab18198d14' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_generate_cart_from_file/hooks/index/scripts.post.tpl',
      1 => 1722256708,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a78d6b9ef373_25864589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
?>

<?php echo smarty_function_script(array('src'=>"js/addons/cp_generate_cart_from_file/back.js"),$_smarty_tpl);
}
}
