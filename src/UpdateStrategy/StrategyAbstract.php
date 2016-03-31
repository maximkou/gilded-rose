<?php
/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */

namespace GildedRose\UpdateStrategy;

use GildedRose\Item;

/**
 * Class StrategyAbstract
 * @package GildedRose\UpdateStrategy
 */
abstract class StrategyAbstract implements StrategyInterface
{

    /**
     * @inheritdoc
     * Each product(exclude legendary) sell_in value decrements on the day end
     */
    public function update(Item $item)
    {
        $item->sell_in = $item->sell_in - 1;
    }
}
