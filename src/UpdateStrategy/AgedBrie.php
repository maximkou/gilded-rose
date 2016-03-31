<?php
/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */

namespace GildedRose\UpdateStrategy;

use GildedRose\Item;

/**
 * Class AgedBrie
 * @package GildedRose\UpdateStrategy
 */
class AgedBrie extends StrategyAbstract
{

    /**
     * @inheritdoc
     */
    public function update(Item $item)
    {
        parent::update($item);

        if ($item->quality < self::MAX_QUALITY) {
            $item->quality++;

            if ($item->sell_in < 0) {
                $item->quality++;
            }
        }
    }
}
