<?php

namespace GildedRose\UpdateStrategy;

use GildedRose\Item;

/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */
interface StrategyInterface
{

    const MAX_QUALITY = 50;

    /**
     * Update item by this strategy
     * @param Item $item
     * @return void
     */
    public function update(Item $item);
}
