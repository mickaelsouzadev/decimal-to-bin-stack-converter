<?php

namespace Mickaelsouzadev\DecimalToBinStackConverter\Converter;

use Mickaelsouzadev\DataStrucutures\Stack\StackAssoc;

class Converter
{
    public function __construct(private StackAssoc $stack)
    {
    }

    public function convertDecimalToBinary(int $decimalNumber): string
    {
        $number = $decimalNumber;
        $remainder = 0;
        $binaryString = '';

        while ($number > 0) {
            $remainder = floor($number % 2);
            $this->stack->push($remainder);

            $number = floor($number / 2);
        }

        while (!$this->stack->isEmpty()) {
            $binNumber = $this->stack->pop();
            $binaryString .= "$binNumber";
        }

        return $binaryString;
    }
}
