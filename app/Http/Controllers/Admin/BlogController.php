<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Admin\AdminController;
use Table;
use Admin;

use App\Models\Blog;

class BlogController extends AdminController
{
    public function __construct(Blog $model)
    {
    	parent::__construct();
    	$this->model = $model;
        $this->validation = 'App\Http\Requests\Admin\BlogRequest';
    }

    /**
     * Scaffolding form
     */
    public function setForm()
    {
    	$forms = [
    		'title'	=> [
    			'type'=>'text',
    			'label'=>'Title',
    			'properties'=>['class'=>'form-control'],
    			'value'=>null,
    		],
    		'intro'   => [
                'type'=>'textarea',
                'properties'=>['class'=>'form-control'],
                'value'=>null,
            ],
            'description'   => [
                'type'=>'textarea',
                'properties'=>['class'=>'form-control'],
                'value'=>null,
            ],
    		'status'	=> [
    			'type'=>'select',
    			'selects'=>[
    				'n'=>'Un Publish',
    				'y'=>'Publish',
    			],
    		],
    		'banner'	=> [
    			'type'=>'file',
    			'properties'=>[
    				'class'=>null,
    			],
    		],
    	];

    	return $forms;
    }

    /**
     * Listing fields from table
     */
    public function fields()
    {
      return [
          'id' => [
            'enabled'=>false,
          ],
          'title',
          'status'
      ];
    }

    public function getIndex()
    {
       return $this->listing('Blog' , $this->fields());
    }

    public function getCreate()
    {
        return $this->form($this->model,$this->setForm());
    }

    public function postCreate(Requests\Admin\BlogRequest $request)
    {
        $inputs = $request->all();

        $inputs['banner']=$this->handleUpload($request,$this->model,'banner',[1900,872]);

        return $this->insertOrUpdate($inputs,$this->model);
    }

    public function getUpdate($id)
    {
        return $this->form($this->model->findOrFail($id),$this->setForm());
    }

    public function postUpdate(Request $request,$id)
    {
        $model = $this->model->findOrFail($id);

        $inputs = $request->all();

        $inputs['banner']=$this->handleUpload($request,$model,'banner',[1900,872]);

        return $this->insertOrUpdate($inputs,$model);
    }

    public function getDelete($id)
    {
        $model = $this->model->findOrFail($id);
        return $this->delete($model,[$model->banner]);
    }
}
