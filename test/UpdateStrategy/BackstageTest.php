<?php

namespace GildedRose\Test\UpdateStrategy;


use GildedRose\UpdateStrategy\Factory;
use GildedRose\UpdateStrategy\Backstage;
use GildedRose\Item;

/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */
class BackstageTest extends AbstractTest
{

    public function getStrategy()
    {
        return new Backstage();
    }

    /**
     * @return array
     */
    public function dpUpdate()
    {
        return array(
            array(
                new Item(Factory::BACKSTAGE, -1, 10), 3, 0
            ),
            array(
                new Item(Factory::BACKSTAGE, 5, 1), 2, 7
            ),
            array(
                new Item(Factory::BACKSTAGE, 10, 0), 3, 6
            ),
        );
    }
}
