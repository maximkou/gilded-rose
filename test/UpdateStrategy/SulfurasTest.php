<?php

namespace GildedRose\Test\UpdateStrategy;

use GildedRose\UpdateStrategy\Factory;
use GildedRose\Item;
use GildedRose\UpdateStrategy\Sulfuras;

/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */
class SulfurasTest extends AbstractTest
{

    public function getStrategy()
    {
        return new Sulfuras();
    }

    /**
     * @return array
     */
    public function dpUpdate()
    {
        return array(
            array(
                new Item(Factory::SULFURAS, -1, 10), 3, 10
            ),
            array(
                new Item(Factory::SULFURAS, 5, 1), 2, 1
            ),
            array(
                new Item(Factory::SULFURAS, 10, 0), 3, 0
            ),
        );
    }
}
