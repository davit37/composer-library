<?php

namespace Davithermansyah\App;

class Customer
{
    public function __construct(private string $name)
    {}

    public function sayHello(string $name): string 
    {
        return "Hello $name, My Name Is $this->name";
    }
}