<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';

    public function getNews($slug=false)
    {
        if ($slug === false)
    {
        return $this->findAll();
    }

    return $this->asArray()
                ->select('news.*, categories.category')
                ->join('categories', 'categories.id_category=news.id_category')
                ->where(['slug' => $slug])
                ->first();
        
    }
}