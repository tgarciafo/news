<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class RestNew extends ResourceController
{
    protected $modelName = 'App\Models\NewsModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id=null){

        $new= $this->model->find($id);

        return $this->respond($new);
    }

}