<?php namespace Acme;

class AreaCalculator {

    public function calculate($squares)
    {
        foreach($squares as $square)
        {
            $area[] = $square->width * $square->height;
        }

        return array_sum($area);
    }

}