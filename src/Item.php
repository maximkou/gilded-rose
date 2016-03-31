<?php
/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */

namespace GildedRose;

/**
 * Class Item
 * @package GildedRose
 */
class Item
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $sell_in;

    /**
     * @var int
     */
    public $quality;

    /**
     * @var array
     */
    protected $rules = array();

    /**
     * Item constructor.
     * @param $name
     * @param $sell_in
     * @param $quality
     */
    public function __construct($name, $sell_in, $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    /**
     * Update item quality
     * @return void
     */
    public function updateQuality()
    {
        $this
            ->getUpdateStrategy($this->name)
            ->update($this);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

    /**
     * @return \GildedRose\UpdateStrategy\StrategyInterface
     * @param $product_name
     */
    protected function getUpdateStrategy($product_name)
    {
        return UpdateStrategy\Factory::createByProductName($product_name);
    }
}
