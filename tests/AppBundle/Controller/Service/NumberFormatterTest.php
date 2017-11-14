<?php
/**
 * Created by PhpStorm.
 * User: ignas
 * Date: 17.11.14
 * Time: 14.04
 */

class NumberFormatterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider conversionProvider
     */
    public function testConvert($number, $expected) {
        $numberFormatter = new \AppBundle\Service\NumberFormatter();
        $this->assertEquals($expected, $numberFormatter->convert($number));
    }
    public function conversionProvider() {
        return [
            [2876543, '2.88M'],
            [-2876543, '-2.88M'],
            [535216, '535K'],
            [-535216, '-535K'],
            [999500, '1M'],
            [-999500, '-1M'],
            [99950, '100K'],
            [-99950, '-100K'],
            [27533.78, '27 534'],
            [-27533.78, '-27 534'],
            [533.1, '533.10'],
            [-533.1, '-533.10'],
            [66.6666, '66.67'],
            [-66.6666, '-66.67'],
            [12.00, '12'],
            [-12.00, '-12'],
            [999499, '999K'],
            [-999499, '-999K'],
            [99949, '99 949'],
            [-99949, '-99 949'],
            [1000, '1 000'],
            [-1000, '-1 000'],
            [999, '999'],
            [-999, '-999'],
            [546213.948, '546K'],
            [-546213.948, '-546K']
        ];
    }
}