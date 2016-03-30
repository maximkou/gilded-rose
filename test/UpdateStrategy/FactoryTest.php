<?php

namespace GildedRose\Test\UpdateStrategy;


use GildedRose\UpdateStrategy\Factory;

/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @param string $name
     * @param string $instanceOf
     * @see \GildedRose\UpdateStrategy\Factory::createByProductName
     * @dataProvider dpCreateByProductName
     */
    public function testCreateByProductName($name, $instanceOf)
    {
        $this->assertInstanceOf(
            "\\GildedRose\\UpdateStrategy\\$instanceOf",
            Factory::createByProductName($name)
        );
    }

    /**
     * @return array
     */
    public function dpCreateByProductName()
    {
        return array(
            array('Aged Brie', 'AgedBrie'),
            array('Backstage passes to a TAFKAL80ETC concert', 'Backstage'),
            array('Sulfuras, Hand of Ragnaros', 'Sulfuras'),
            array('Conjured Mana Cake', 'ManaCake'),
            array('Other', 'Common'),
            array('Other 2', 'Common'),
        );
    }
}
