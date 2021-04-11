<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class Table_news extends BaseController
{
	public function news()
	{
	    $crud = new GroceryCrud();

	    $crud->setTable('news');

	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

    private function _exampleOutput($output = null) {
        return view('news/crud_news', (array)$output);
    }


}
