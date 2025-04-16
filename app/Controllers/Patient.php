<?php

namespace App\Controllers;

use App\Models\Patient as PatientModel;
use App\Models\Doctor;

class Patient extends BaseController
{
    public function index () {
        $model = model(PatientModel::class);
        $doctorModel = model(Doctor::class);



        if ($this->request->getMethod(true) == "POST") {
            $data = $this->request->getPost(['fullName', 'phone', 'doctor']);
            $model->save([
                'name' => $data['fullName'],
                'phone' => $data['phone'],
                'doctor' => intval($data['doctor'])
            ]);
        }
        return $this->render('patient/index', ['content' => ['patients' => $model->getPatients(), 'doctors' => $doctorModel->getDoctors()]]);
    }

    public function edit () {
        if ($this->request->getMethod(true) == "POST") {
            $model = model(PatientModel::class);
            $data = $this->request->getPost(['patient', 'fullName', 'phone', 'doctor']);
            $model->update($data['patient'], ['name' => $data['fullName'], 'phone' => $data['phone'], 'doctor' => intval($data['doctor'])]);
        }
        header('Location: '.base_url('patients'));
        exit();
    }

    public function delete (int $id) {
        $model = model(PatientModel::class);
        $model->delete($id);
        header('Location: '.base_url('patients'));
        exit();
    }
}