<?php
/* Smarty version 4.1.1, created on 2024-07-29 15:32:58
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/after_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66a78bfad95da7_14728725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2db88f7911f500e112d3265c4cb08a6887f5751b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/index/after_content.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/theme_editor.tpl' => 1,
  ),
),false)) {
function content_66a78bfad95da7_14728725 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/theme_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
