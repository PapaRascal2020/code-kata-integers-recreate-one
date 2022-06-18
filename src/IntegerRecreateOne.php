<?php

namespace App;

class IntegerRecreateOne
{

    public function listSquared($m, $n) : array
    {
        $divisors = [];
        for ($i = $m; $i <= $n; $i++) {
            $squaredNumber = $this->getDivisorSquared($i);

            if ($this->isSquareNumber($squaredNumber)) {
                $divisors[] = [$i, $squaredNumber];
            }
        }

        return $divisors;
    }

    public function isSquareNumber($number) : bool
    {
        return sqrt($number) == floor(sqrt($number));
    }

    public function getDivisorSquared($number) : int
    {
        $result = 0;

        for($i = 1; $i <= round(sqrt($number)); $i++){
            if($number % $i === 0){
                $result += $i ** 2;
                $ii = $number / $i;
                if ($i !== $ii) {
                    $result += $ii ** 2;
                }
            }
        }

        return $result;
    }


}