<?php

namespace GildedRose;

class GildedRose
{

    /**
     * @var Item[]
     */
    private $items;

    /**
     * GildedRose constructor.
     * @param $items
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    /**
     * @return void
     */
    public function updateQuality()
    {
        foreach ($this->getItems() as $item) {
            $item->updateQuality();
        }
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }
}

