<?php
/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */

namespace GildedRose\Test\UpdateStrategy;


use GildedRose\Item;
use GildedRose\UpdateStrategy\StrategyInterface;


abstract class AbstractTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return StrategyInterface
     */
    abstract public function getStrategy();

    /**
     * @return array
     */
    abstract public function dpUpdate();

    /**
     * @param Item $item
     * @param $expectedQuality
     * @param $days
     * @dataProvider dpUpdate
     */
    public function testUpdate(Item $item, $days, $expectedQuality)
    {
        foreach (range(0, $days - 1) as $day) {
            $this->getStrategy()->update($item);
        }

        $this->assertEquals($item->quality, $expectedQuality);
    }
}
