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
    public function testgetRoundedColor($values) {
        
        foreach($values as $givenValue => $expectedValue) {
            $this->assertEquals($expectedValue, $this->obj->getRoundedColor($givenValue));
        }
    }
    
    public function provider() {
        return array(array(
                        array('#663399' => '#808080',
                              '#333300' => '#403d3f',
                              '#669933' => '#808080',
                              '#330066' => '#403d3f',
                              '#000000' => '#000000',
                              '#996699' => '#808080',
                              '#FF3399' => '#b03060',
                              '#9933CC' => '#9370db',
                              '#666633' => '#403d3f',
                              '#999933' => '#808080'
                            )
                          )
                    );
    }
}
