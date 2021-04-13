<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';

    protected $id= 'id';
    protected $allowedFields='category';

    public function getCategory($id=null)
    {
        if ($id === null)
    {
        return $this->findAll();
    }

    return $this->asArray()
                ->where(['id' => $id])
                ->first();
        
    }
}