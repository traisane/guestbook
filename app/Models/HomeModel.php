<?php namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model {
    protected $table = 'message';
    protected $allowedFields = ['content'];
    
    public function getMessages() {
        return $this->findAll();
    }
}