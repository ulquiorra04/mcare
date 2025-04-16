<?php
/* Smarty version 4.5.5, created on 2025-04-16 12:39:54
  from 'C:\laragon\www\mcare\app\Views\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67ffa51a3981e0_07293315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '469022b818aeed40985e293473ad851c67f6d69a' => 
    array (
      0 => 'C:\\laragon\\www\\mcare\\app\\Views\\base.tpl',
      1 => 1744807179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ffa51a3981e0_07293315 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>
style.css">
    <title>Healthcare - Management system</title>
</head>
<body>

    <div id="sidebar">

        <div id="logo">
            <img src="<?php echo base_url();?>
logo.png" alt="Healthcare">
        </div>

        <div id="sidebar_menu" class="d-flex flex-column">
            <a href="#"> <i class="bi bi-trello"></i> dashboard</a>
            <a href="<?php echo base_url('patients');?>
"> <i class="bi bi-person"></i> Patient details </a>
            <a href="<?php echo base_url('doctors');?>
"> <i class="bi bi-person"></i> doctor details </a>
            <a href="#"> <i class="bi bi-credit-card-2-back"></i> payment details </a>
            <a href="#"> <i class="bi bi-easel"></i> e-channeling </a>
        </div>

    </div>

    <div id="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88935771967ffa51a396814_78743382', "content");
?>

    </div>


    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block "content"} */
class Block_88935771967ffa51a396814_78743382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_88935771967ffa51a396814_78743382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
