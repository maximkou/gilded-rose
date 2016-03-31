<?php

namespace GildedRose\Test\UpdateStrategy;

use GildedRose\Item;
use GildedRose\UpdateStrategy\StrategyAbstract;

/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */
class AbstractStrategyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @param Item $item
     * @param $days
     * @param $expectedSellIn
     * @dataProvider dpUpdate
     */
    public function testUpdate(Item $item, $days, $expectedSellIn)
    {
        /** @var StrategyAbstract $stub */
        $stub = $this
            ->getMockBuilder('\\GildedRose\\UpdateStrategy\\StrategyAbstract')
            ->getMockForAbstractClass();

        foreach (range(0, $days - 1) as $day) {
            $stub->update($item);
        }

        $this->assertEquals($expectedSellIn, $item->sell_in);
    }

    /**
     * @return array
     */
    public function dpUpdate()
    {
        return array(
            array(
                new Item('t1', -1, 10), 2, -3
            ),
            array(
                new Item('case 2', 4, 5), 5, -1
            ),
        );
    }
}
