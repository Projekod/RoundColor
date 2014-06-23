<?php

require_once '../PKRoundColor.php';

class PKRoundColorTest extends PHPUnit_Framework_TestCase {
    protected $obj;
    
    
    protected function setUp() {
        $this->obj = new PKRoundColor();
    }
    
    protected function tearDown() {
        
    }
    
    /**
     *
     * @dataProvider provider
     */
    public function testgetRoundedColor($givenValue, $expectedValue) {
        $this->assertEquals($this->obj->getRoundedColor($givenValue), $expectedValue);
    }
    
    public function provider() {
        return array(
            array('#663399', '#808080'),
            array('#333300', '#403d3f'),
            array('#669933', '#808080'),
            array('#330066', '#403d3f'),
            array('#000000', '#000000'),
            array('#996699', '#808080'),
            array('#FF3399', '#b03060'),
            array('#9933CC', '#9370db'),
            array('#666633', '#403d3f'),
            array('#999933', '#808080'),
        );
    }
}
