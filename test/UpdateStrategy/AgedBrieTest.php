<?php

namespace GildedRose\Test\UpdateStrategy;

use GildedRose\UpdateStrategy\AgedBrie;
use GildedRose\UpdateStrategy\Factory;
use GildedRose\Item;

/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */
class AgedBrieTest extends AbstractTest
{

    /**
     * @return AgedBrie
     */
    public function getStrategy()
    {
        return new AgedBrie();
    }

    /**
     * @return array
     */
    public function dpUpdate()
    {
        return array(
            array(
                new Item(Factory::AGED_BRIE, -1, 10), 2, 14
            ),
            array(
                new Item(Factory::AGED_BRIE, 4, 5), 5, 11
            ),
        );
    }
}
