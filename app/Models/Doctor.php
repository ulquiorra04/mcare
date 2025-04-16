<?php

namespace App\Models;

use CodeIgniter\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $allowedFields = ['fullname', 'department'];

    public function getDoctors (): array {
        return $this->findAll();
    }
}