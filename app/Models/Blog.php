<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{

	use Sluggable;

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
    	'title',
    	'intro',
    	'description',
    	'slug',
    	'banner',
    	'status'
    ];

    public function rules()
    {
    	return [
    		'title'=>'required|max:200',
    		'banner'=>'image'
    	];
    }
}
