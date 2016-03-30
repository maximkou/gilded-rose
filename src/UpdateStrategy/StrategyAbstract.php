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

    public function update(Item $item)
    {
        $item->sell_in = $item->sell_in - 1;
    }
}
