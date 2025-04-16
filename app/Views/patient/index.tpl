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
                        <th> MOB </th>
                        <th> Doctor </th>
                        <th> Department </th>
                        <th> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $content.patients as $patient }
                        <tr>
                            <td class="text-center">
                                <img src="{base_url('doc.png')}" alt="{$patient.name}" class="doctor-img">
                            </td>
                            <td class="text-capitalize text-center"> {$patient.name} </td>
                            <td class="text-uppercase text-center"> {$patient.phone} </td>
                            <td class="text-uppercase text-center"> {$patient.fullname} </td>
                            <td class="text-uppercase text-center"> {$patient.department} </td>
                            <td class="text-center">
                                <a href="{base_url('patient/delete/')}{$patient.patientId}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this patient ?');">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit_patient" data-bs-id="{$patient.patientId}" data-bs-fullname="{$patient.name}" data-bs-phone="{$patient.phone}" data-bs-doctor="{$patient.doctorId}">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                            </td>
                        </tr>
                        {foreachelse}
                        <tr>
                            <th colspan="4" class="text-center"> No patient found </th>
                        </tr>
                    {/foreach}
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

            <div class="modal fade" id="add_patient" tabindex="-1" aria-labelledby="add_patientLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" > ADD Patient</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{base_url('patients')}" method="post">
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
                                        {foreach $content.doctors as $doctor}
                                            <option value="{$doctor.id}">{$doctor.fullname}</option>
                                        {/foreach}
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
                        <form action="{base_url('patients/edit')}" method="post">
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
                                        {foreach $content.doctors as $doctor}
                                        <option value="{$doctor.id}">{$doctor.fullname}</option>
                                        {/foreach}
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

    <script>
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
    </script>

{/block}