<?php
namespace WafaCode\Belajar;

class Customer {
    public  function __construct(private string $name)
    {

    }
    public function salam(string $name='Guest'): string {

        return "Salam $name, My name is $this->name";
    }
}