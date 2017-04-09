<?php namespace Frontend;

class Frontend
{
	public function hello()
	{
		return 'world';
	}

	public function asset($path)
	{
		return asset('frontend').'/'.$path;
	}
}