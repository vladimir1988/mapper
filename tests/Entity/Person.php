<?php

namespace Entity;

use Tarantool\Mapper\Entity as MapperEntity;

class Person extends MapperEntity
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    public function beforeCreate()
    {
        $this->name = $this->name.'!';
    }
}
