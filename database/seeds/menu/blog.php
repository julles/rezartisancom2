<?php
\Admin::addMenu([
            'parent_id'=>null,
            'title'=>'Blog',
            'controller'=>'#',
            'slug'=>'blog',
            'order'=>1,
        ],[]);

        \Admin::addMenu([
            'parent_id'=>'blog',
            'title'=>'Blog',
            'controller'=>'Admin\BlogController',
            'slug'=>'blog-blog',
            'order'=>1,
        ],['index','create','update','delete']);