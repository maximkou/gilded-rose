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

    /**
     * ManaCake constructor.
     */
    public function __construct()
    {
        /* this product corrupt with x2 speed */
        $this->corruption_step *= 2;
    }

    /**
     * @inheritdoc
     */
    public function update(Item $item)
    {
        parent::update($item);

        if ($item->quality < 0) {
            $item->quality = 0;
        }
    }
}
