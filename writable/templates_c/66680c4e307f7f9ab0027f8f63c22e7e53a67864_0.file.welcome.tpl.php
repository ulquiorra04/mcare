<?php
/* Smarty version 4.5.5, created on 2025-04-15 18:53:18
  from 'C:\laragon\www\mcare\app\Views\welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67feab1e86cad4_58844794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66680c4e307f7f9ab0027f8f63c22e7e53a67864' => 
    array (
      0 => 'C:\\laragon\\www\\mcare\\app\\Views\\welcome.tpl',
      1 => 1744743193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67feab1e86cad4_58844794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184239376767feab1e86c223_31483046', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base.tpl');
}
/* {block 'content'} */
class Block_184239376767feab1e86c223_31483046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_184239376767feab1e86c223_31483046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead class="text-uppercase text-center">
                    <tr>
                        <th></th>
                        <th> name </th>
                        <th> mob </th>
                        <th> date </th>
                        <th> doctor </th>
                        <th> department </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>



<?php
}
}
/* {/block 'content'} */
}
