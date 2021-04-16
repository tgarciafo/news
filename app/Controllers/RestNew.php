<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class RestNew extends ResourceController
{
    protected $modelName = 'App\Models\NewsModel';
    protected $format    = 'json';
    private $db;

    public function __construct(){
        $this->db=db_connect();
    }

    public function index($page=null)
    
    {

        $this->model->select('news.id, news.title, news.publication_date');
               

            return $this->respond($this->model->paginate(10, '', $page));
    }

    public function show($id=null){

        $new= $this->model->find($id);

        return $this->respond($new);
    }

    public function catMethod($category=null){
        $builder=$this->db->table("categories");
        $builder->select('news.id, news.title, news.publication_date');
        $builder->join('news', 'news.id_category=categories.id_category');
        $builder->where(['categories.category'=>$category]);

      $data= $builder->get()->getResult();

        return $this->respond($data);

    }


}