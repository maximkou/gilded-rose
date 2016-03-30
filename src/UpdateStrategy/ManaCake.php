<?php
/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */

namespace GildedRose\UpdateStrategy;
use GildedRose\Item;


/**
 * Class ManaCake
 * @package GildedRose\UpdateStrategy
 */
class ManaCake extends Common
{

    public function __construct()
    {
        /* этот продукт портится в 2 раза быстрее чем обычный */
        $this->corruption_step *= 2;
    }

    public function update(Item $item)
    {
        parent::update($item);

        if ($item->quality < 0) {
            $item->quality = 0;
        }
    }
}
