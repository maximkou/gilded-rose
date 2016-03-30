<?php
/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */

namespace GildedRose\UpdateStrategy;


use GildedRose\Item;

/**
 * Class Backstage
 * @package GildedRose\UpdateStrategy
 */
class Backstage extends StrategyAbstract
{

    /**
     * @param Item $item
     * @return void
     */
    public function update(Item $item)
    {
        parent::update($item);

        if ($item->quality < self::MAX_QUALITY) {
            $inc = 1;

            if ($item->sell_in <= 5) {
                $inc = 3;
            } elseif ($item->sell_in <= 10) {
                $inc = 2;
            }

            $item->quality += $inc;
        }

        if ($item->sell_in < 0) {
            $item->quality = 0;
        }
    }
}
