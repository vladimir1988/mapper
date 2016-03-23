<?php

use Tarantool\Mapper\Contracts\Manager;
use Tarantool\Mapper\Contracts\Migration;

class CreatePosts implements Migration
{
    public function migrate(Manager $manager)
    {
        $posts = $manager->getMeta()->create('posts', ['body', 'slug', 'title']);
        $posts->addIndex('slug');

        $posts->addProperty('author');
        $posts->addProperty('month');
        $posts->addIndex(['author', 'month'], ['unique' => false]);
    }
}

