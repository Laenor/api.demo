<?php namespace App\Models;

use \CodeIgniter\Model;

class DemandeModel extends Model{
        protected $table      = 'demandes';
        protected $returnType = '\App\Entities\Demande';
}
