<?php
/* Smarty version 4.5.5, created on 2025-04-16 15:29:15
  from 'C:\laragon\www\mcare\app\Views\doctor\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67ffcccb6f4ed4_91913396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41fe71054e88b3ec896b0a143c5fd8d6316fa108' => 
    array (
      0 => 'C:\\laragon\\www\\mcare\\app\\Views\\doctor\\index.tpl',
      1 => 1744817344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/info.tpl' => 4,
  ),
),false)) {
function content_67ffcccb6f4ed4_91913396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134997899267ffcccb6882a6_25060763', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base.tpl');
}
/* {block 'content'} */
class Block_134997899267ffcccb6882a6_25060763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134997899267ffcccb6882a6_25060763',
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
                        <th> department </th>
                        <th> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value['doctors'], 'doctor');
$_smarty_tpl->tpl_vars['doctor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
$_smarty_tpl->tpl_vars['doctor']->do_else = false;
?>
                            <tr>
                                <td class="text-center">
                                    <img src="<?php echo base_url('doc.png');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['fullname'];?>
" class="doctor-img">
                                </td>
                                <td class="text-capitalize text-center"> <?php echo $_smarty_tpl->tpl_vars['doctor']->value['fullname'];?>
 </td>
                                <td class="text-uppercase text-center"> <?php echo $_smarty_tpl->tpl_vars['doctor']->value['department'];?>
 </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('doctors/delete/');
echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this doctor ?');">
                                        <i class="bi bi-trash3-fill"></i>
                                    </a>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit_doctor" data-bs-id="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
" data-bs-fullname="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['fullname'];?>
" data-bs-department="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['department'];?>
">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php
}
if ($_smarty_tpl->tpl_vars['doctor']->do_else) {
?>
                            <tr>
                                <th colspan="3" class="text-center"> No Doctor found </th>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-4">
                        <button type="button" class="d-flex flex-row justify-content-center align-items-center w-100 action-add" data-bs-toggle="modal" data-bs-target="#add_doctor">
                            <i class="bi bi-person-add"></i>
                            <div class="d-flex flex-column justify-content-center align-self-start text-uppercase">
                                <span>admin new</span>
                                <div> doctor </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="d-flex flex-row justify-content-center align-items-center w-100 emergency-room">
                            <i class="bi bi-person-add"></i>
                            <div class="d-flex flex-column justify-content-center align-self-start text-uppercase">
                                <span>emergency</span>
                                <div> room </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="d-flex flex-row justify-content-center align-items-center w-100 emergency-room">
                            <i class="bi bi-capsule"></i>
                            <div class="d-flex flex-column justify-content-center align-self-start text-uppercase">
                                <span>emergency</span>
                                <div> room </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Total appointments",'number'=>"140"), 0, false);
?>
                    </div>
                    <div class="col-md-6">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Total patient",'number'=>"370"), 0, true);
?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Total concellation",'number'=>"070"), 0, true);
?>
                    </div>
                    <div class="col-md-6">
                        <?php $_smarty_tpl->_subTemplateRender("file:components/info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Total avg per doctor",'number'=>"120"), 0, true);
?>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="add_doctor" tabindex="-1" aria-labelledby="add_doctorLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" > ADD Doctor</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/doctors" method="post">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Nom complet</label>
                                    <input type="text" name="fullName" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="department" class="form-label">Department</label>
                                    <input type="text" name="department" class="form-control" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm btn-primary"> Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="edit_doctor" tabindex="-1" aria-labelledby="edit_doctorLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" > Edit Doctor</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?php echo base_url('doctors/edit');?>
" method="post">
                            <div class="modal-body">
                                <input type="hidden" name="doctor_id" id="doctor_id">

                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Nom complet</label>
                                    <input type="text" id="fullName" name="fullName" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="department" class="form-label">Department</label>
                                    <input type="text" id="department" name="department" class="form-control" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm btn-primary"> Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        let edit_modal = document.getElementById('edit_doctor');
        edit_modal.addEventListener('show.bs.modal', function (event) {
            let b = event.relatedTarget;
            let id = b.getAttribute('data-bs-id');
            let fullname = b.getAttribute('data-bs-fullname');
            let department = b.getAttribute('data-bs-department');

            document.getElementById("doctor_id").value = id;
            document.getElementById("fullName").value = fullname;
            document.getElementById("department").value = department;
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
