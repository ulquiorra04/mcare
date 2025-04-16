<?php
/* Smarty version 4.5.5, created on 2025-04-16 21:43:10
  from 'C:\laragon\www\mcare\app\Views\patient\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6800246e58fbf9_19858698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2efe6687e4424741ec564bd2868b4c47d835af' => 
    array (
      0 => 'C:\\laragon\\www\\mcare\\app\\Views\\patient\\index.tpl',
      1 => 1744839773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/info.tpl' => 4,
  ),
),false)) {
function content_6800246e58fbf9_19858698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12232552666800246e529ed2_64609427', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base.tpl');
}
/* {block 'content'} */
class Block_12232552666800246e529ed2_64609427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12232552666800246e529ed2_64609427',
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
                        <th> MOB </th>
                        <th> Doctor </th>
                        <th> Department </th>
                        <th> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value['patients'], 'patient');
$_smarty_tpl->tpl_vars['patient']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->do_else = false;
?>
                        <tr>
                            <td class="text-center">
                                <img src="<?php echo base_url('doc.png');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
" class="doctor-img">
                            </td>
                            <td class="text-capitalize text-center"> <?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
 </td>
                            <td class="text-uppercase text-center"> <?php echo $_smarty_tpl->tpl_vars['patient']->value['phone'];?>
 </td>
                            <td class="text-uppercase text-center"> <?php echo $_smarty_tpl->tpl_vars['patient']->value['fullname'];?>
 </td>
                            <td class="text-uppercase text-center"> <?php echo $_smarty_tpl->tpl_vars['patient']->value['department'];?>
 </td>
                            <td class="text-center">
                                <a href="<?php echo base_url('patient/delete/');
echo $_smarty_tpl->tpl_vars['patient']->value['patientId'];?>
" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this patient ?');">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit_patient" data-bs-id="<?php echo $_smarty_tpl->tpl_vars['patient']->value['patientId'];?>
" data-bs-fullname="<?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
" data-bs-phone="<?php echo $_smarty_tpl->tpl_vars['patient']->value['phone'];?>
" data-bs-doctor="<?php echo $_smarty_tpl->tpl_vars['patient']->value['doctorId'];?>
">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                            </td>
                        </tr>
                        <?php
}
if ($_smarty_tpl->tpl_vars['patient']->do_else) {
?>
                        <tr>
                            <th colspan="4" class="text-center"> No patient found </th>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-4">
                        <button type="button" class="d-flex flex-row justify-content-center align-items-center w-100 action-add" data-bs-toggle="modal" data-bs-target="#add_patient">
                            <i class="bi bi-person-add"></i>
                            <div class="d-flex flex-column justify-content-center align-self-start text-uppercase">
                                <span>admin new</span>
                                <div> patient </div>
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

            <div class="modal fade" id="add_patient" tabindex="-1" aria-labelledby="add_patientLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" > ADD Patient</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?php echo base_url('patients');?>
" method="post">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Nom complet</label>
                                    <input type="text" name="fullName" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" name="phone" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="doctor" class="form-label">Doctor</label>
                                    <select name="doctor" class="form-select">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value['doctors'], 'doctor');
$_smarty_tpl->tpl_vars['doctor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
$_smarty_tpl->tpl_vars['doctor']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['doctor']->value['fullname'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
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

            <div class="modal fade" id="edit_patient" tabindex="-1" aria-labelledby="edit_patientLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" > Edit Patient</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?php echo base_url('patients/edit');?>
" method="post">
                            <div class="modal-body">
                                <input type="hidden" name="patient" id="patient">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Nom complet</label>
                                    <input type="text" name="fullName" id="fullName" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" name="phone" id="phone" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="doctor" class="form-label">Doctor</label>
                                    <select name="doctor" id="doctor" class="form-select">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value['doctors'], 'doctor');
$_smarty_tpl->tpl_vars['doctor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
$_smarty_tpl->tpl_vars['doctor']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['doctor']->value['fullname'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
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
        let edit_modal = document.getElementById('edit_patient');
        edit_modal.addEventListener('show.bs.modal', function (event) {
            let b = event.relatedTarget;
            let id = b.getAttribute('data-bs-id');
            let fullname = b.getAttribute('data-bs-fullname');
            let doctor = b.getAttribute('data-bs-doctor');
            let phone = b.getAttribute('data-bs-phone');

            document.getElementById("patient").value = id;
            document.getElementById("fullName").value = fullname;
            document.getElementById("doctor").value = doctor;
            document.getElementById('phone').value = phone;
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
