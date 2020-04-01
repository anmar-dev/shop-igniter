<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
        protected $table      = 'product';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['title', 'slug', 'description', 'stock', 'price', 'image'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [
              'title'       => 'required|alpha_numeric_space',
              'slug'        => 'required|alpha_numeric_punct',
              'description' => 'required|string',
              'stock'       => 'required|numeric',
              'price'       => 'required|numeric',
              'image'       => 'permit_empty|alpha_numeric_punct',
        ];
        protected $validationMessages = [];
        protected $skipValidation     = false;

}
