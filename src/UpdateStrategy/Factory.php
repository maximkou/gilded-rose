<?php
/**
 * @author: Maksim Khodyrev <maximkou@gmail.com>
 */

namespace GildedRose\UpdateStrategy;

/**
 * Class Factory
 * @package GildedRose\UpdateStrategy
 */
class Factory
{

    const AGED_BRIE = 'Aged Brie';
    const BACKSTAGE = 'Backstage passes to a TAFKAL80ETC concert';
    const SULFURAS = 'Sulfuras, Hand of Ragnaros';
    const MANA_CAKE = 'Conjured Mana Cake';

    protected static $classMap = array(
        self::AGED_BRIE => 'AgedBrie',
        self::BACKSTAGE => 'Backstage',
        self::SULFURAS => 'Sulfuras',
        self::MANA_CAKE => 'ManaCake'
    );


    /**
     * @param $product_name
     * @return StrategyInterface
     */
    public static function createByProductName($product_name)
    {
        $strategy = 'Common';

        if (!empty(self::$classMap[$product_name])) {
            $strategy = self::$classMap[$product_name];
        }

        $strategy = __NAMESPACE__.'\\'.$strategy;

        return new $strategy();
    }
}
