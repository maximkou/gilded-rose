<?php

namespace GildedRose\Test;


use GildedRose\GildedRose;

class GildedRoseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @see GildedRose\GildedRose::updateQuality
     */
    public function testUpdateQuality()
    {
        $items = array(
            $this->getRandomItemMock(),
            $this->getRandomItemMock(),
            $this->getRandomItemMock(),
            $this->getRandomItemMock(),
        );

        $roseMock = $this
            ->getMockBuilder('\\GildedRose\\GildedRose')
            ->setConstructorArgs(array($items))
            ->setMethods(array('getItems'))
            ->getMock();

        $roseMock
            ->method('getItems')
            ->willReturn($items);

        /** @var GildedRose $roseMock */
        $roseMock->updateQuality();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getRandomItemMock()
    {
        $itemMock = $this
            ->getMockBuilder('\\GildedRose\\Item')
            ->setMethods(array('updateQuality'))
            ->disableOriginalConstructor()
            ->getMock();

        $itemMock
            ->expects($this->once())
            ->method('updateQuality');

        return $itemMock;
    }

}
