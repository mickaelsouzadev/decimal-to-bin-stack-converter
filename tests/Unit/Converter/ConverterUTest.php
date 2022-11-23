<?php

namespace Mickaelsouzadev\DecimalToBinStackConverter\Tests\Unit\Converter;

use Mickaelsouzadev\DataStrucutures\Stack\StackAssoc;
use Mickaelsouzadev\DecimalToBinStackConverter\Converter\Converter;
use PHPUnit\Framework\TestCase;

class ConverterUTest extends TestCase
{
    public function testConvertDecimalNumberTenToBinary(): void
    {
        $converter = $this->getConverterInstance();
        $number = 10;
        $result = $converter->convertDecimalToBinary($number);

        $this->assertEquals('1010', $result);
    }

    private function getConverterInstance(): Converter
    {
        return new Converter(new StackAssoc());
    }
}
