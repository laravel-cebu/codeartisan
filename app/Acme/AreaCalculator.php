<?php namespace Acme;

class AreaCalculator {

    public function calculate($shapes)
    {
        foreach($shapes as $shape)
        {
            if ($shape instanceof Square)
            {
                $area[] = $shape->width * $shape->height;
            }
            else if ($shape instanceof Circle)
            {
                $area[] = $shape->radius * $shape->radius * 3.1416;
            }
            // else if ($shape instanceof Triangle)
            // {
            //     // compute area of triangle
            // }
            else
            {
                // default
            }
        }

        return array_sum($area);
    }

}