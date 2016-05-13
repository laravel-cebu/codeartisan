<?php

class A {
    public function fire()
    {

    }
}

class B {
    public function fire()
    {

    }
}

function doSomething(A $obj) // if swap with B $obj, it should work the same
{
    // do something
}