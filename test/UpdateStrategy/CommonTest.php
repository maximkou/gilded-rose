<?php

namespace GildedRose\Test\UpdateStrategy;

use GildedRose\UpdateStrategy\Common;
use GildedRose\Item;

/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */
class CommonTest extends AbstractTest
{

    public function getStrategy()
    {
        return new Common();
    }

    /**
     * @return array
     */
    public function dpUpdate()
    {
        return array(
            array(
                new Item('test', -1, 10), 3, 4
            ),
            array(
                new Item('test_item2', 5, 6), 2, 4
            ),
            array(
                new Item('test_item3', 10, 4), 3, 1
            ),
        );
    }
}
