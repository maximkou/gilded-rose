<?php

namespace GildedRose\Test\UpdateStrategy;

use GildedRose\UpdateStrategy\Factory;
use GildedRose\UpdateStrategy\ManaCake;
use GildedRose\Item;

/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */
class ManaCakeTest extends AbstractTest
{

    public function getStrategy()
    {
        return new ManaCake();
    }

    /**
     * @return array
     */
    public function dpUpdate()
    {
        return array(
            array(
                new Item(Factory::MANA_CAKE, -1, 20), 3, 8
            ),
            array(
                new Item(Factory::MANA_CAKE, 5, 6), 2, 2
            ),
            array(
                new Item(Factory::MANA_CAKE, 10, 0), 3, 0
            ),
        );
    }
}
