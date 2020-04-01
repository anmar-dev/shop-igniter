<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
        protected $table      = 'product';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['name', 'description', 'stock', 'price'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [
              'name'        => 'required',
              'description' => 'permit_empty',
              'stock'       => 'permit_empty',
              'price'       => 'permit_empty',
        ];
        protected $validationMessages = [];
        protected $skipValidation     = false;

}
