<?php
/* Smarty version 4.5.5, created on 2025-04-16 13:55:57
  from 'C:\laragon\www\mcare\app\Views\components\info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67ffb6edf2b165_11604783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '772553b995d77e3d561ab066e2ad5b2f22e24d58' => 
    array (
      0 => 'C:\\laragon\\www\\mcare\\app\\Views\\components\\info.tpl',
      1 => 1744811755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ffb6edf2b165_11604783 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="health-info d-flex flex-row justify-content-center align-items-center">
    <div class="health-info-icon">
        <i class="bi bi-calendar3"></i>
    </div>
    <div class="health-info-text d-flex flex-column justify-content-center align-self-start">
        <span> <?php echo $_smarty_tpl->tpl_vars['number']->value;?>
 </span>
        <div> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </div>
    </div>
</div><?php }
}
