<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Blog;

class PageController extends Controller
{
	public function __construct(Blog $blogModel)
	{
		$this->blogModel = $blogModel;
		$this->view = 'frontend.';
	}

    public function getIndex($slug="")
    {
    	if(!empty($slug))
    	{
    		return $this->detail($slug);
    	}else{
    		return $this->home();
    	}
    }

    public function home()
    {
    	$page = 'home';
    	$blogs = $this->blogModel
    		->where('status','y')
    		->orderBy('created_at','asc')
    		->paginate(5);

    	return view($this->view.'home',compact('page','blogs'));
    
    }

    public function detail($slug)
    {
    	$model = $this->blogModel
    	->whereSlug($slug)
    	->where('status','y')
    	->firstOrFail();

    	$page = $model->title;

    	$parsedown = new \Parsedown();

    	$content = $parsedown->text($model->description);

    	return view($this->view.'detail',compact('page','model','content'));
    }
}
