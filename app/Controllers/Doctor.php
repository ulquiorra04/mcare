<?php

namespace App\Controllers;

use App\Models\Doctor as DoctorModel;

class Doctor extends BaseController
{
    public function index () {
        $model = model(DoctorModel::class);
        if ($this->request->getMethod(true) == "POST") {
            $data = $this->request->getPost(['fullName', 'department']);
            $model->save([
                'fullname' => $data['fullName'],
                'department' => $data['department']
            ]);
        }
        return $this->render('doctor/index', ['content' => ['doctors' => $model->getDoctors()]]);
    }

    public function edit () {
        if ($this->request->getMethod(true) == "POST") {
            $model = model(DoctorModel::class);
            $data = $this->request->getPost(['doctor_id', 'fullName', 'department']);
            $model->update($data['doctor_id'], ['fullname' => $data['fullName'], 'department' => $data['department']]);
        }
        header('Location: '.base_url('doctors'));
        exit();
    }

    public function delete (int $id) {
        $model = model(DoctorModel::class);
        $model->delete($id);
        header('Location: '.base_url('doctors'));
        exit();
    }
}