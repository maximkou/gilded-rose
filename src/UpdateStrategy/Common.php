<?php
/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */

namespace GildedRose\UpdateStrategy;

use GildedRose\Item;

/**
 * Class Common
 * @package GildedRose\UpdateStrategy
 */
class Common extends StrategyAbstract
{

    /**
     * Item corruption speed
     * @var int
     */
    protected $corruption_step = 1;

    /**
     * @inheritdoc
     */
    public function update(Item $item)
    {
        parent::update($item);

        if ($item->quality > 0) {
            $item->quality = $item->quality - $this->corruption_step;

            if ($item->sell_in < 0) {
                $item->quality = $item->quality - $this->corruption_step;
            }
        }
    }
}
