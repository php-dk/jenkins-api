<?php

namespace phpdk\jenkinsApi;

use phpdk\lang\TObject;

class User extends TObject
{
    protected $name;
    protected $password;

    /**
     * User constructor.
     * @param $name
     * @param $password
     */
    public function __construct(string $name, string $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    public function getIdentity(): string
    {
        return "{$this->name}:{$this->password}";
    }
}