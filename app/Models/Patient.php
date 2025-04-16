<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class Patient extends Model
{
    protected $table = 'patients';
    protected $allowedFields = ['name', 'phone', 'doctor'];

    public function getPatients (): array {
        $db = Database::connect();
        $builder = $db->table('patients');
        $builder->select('patients.id as patientId, patients.name, patients.phone, doctors.id as doctorId, doctors.fullname, doctors.department');
        $builder->join('doctors', 'patients.doctor = doctors.id', 'inner');
        return $builder->get()->getResult('array');
    }
}