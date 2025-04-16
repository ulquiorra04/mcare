{extends 'base.tpl'}
{block content}
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
                        {foreach $content.doctors as $doctor }
                            <tr>
                                <td class="text-center">
                                    <img src="{base_url('doc.png')}" alt="{$doctor.fullname}" class="doctor-img">
                                </td>
                                <td class="text-capitalize text-center"> {$doctor.fullname} </td>
                                <td class="text-uppercase text-center"> {$doctor.department} </td>
                                <td class="text-center">
                                    <a href="{base_url('doctors/delete/')}{$doctor.id}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this doctor ?');">
                                        <i class="bi bi-trash3-fill"></i>
                                    </a>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit_doctor" data-bs-id="{$doctor.id}" data-bs-fullname="{$doctor.fullname}" data-bs-department="{$doctor.department}">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </td>
                            </tr>
                            {foreachelse}
                            <tr>
                                <th colspan="3" class="text-center"> No Doctor found </th>
                            </tr>
                        {/foreach}
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
                        {include file="components/info.tpl" title="Total appointments" number="140"}
                    </div>
                    <div class="col-md-6">
                        {include file="components/info.tpl" title="Total patient" number="370"}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        {include file="components/info.tpl" title="Total concellation" number="070"}
                    </div>
                    <div class="col-md-6">
                        {include file="components/info.tpl" title="Total avg per doctor" number="120"}
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
                        <form action="{base_url('doctors/edit')}" method="post">
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
    <script>
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
    </script>

{/block}