<?php

namespace Toutou\doc\test;

use PHPUnit\Framework\TestCase;
use Toutou\doc\PetShop;

class ConfigTest extends Testcase
{

    /**
     * @var PetShop
     */
    private $petShop;

    /**
     * @before
     */
    public function setUpPetShop()
    {
        $this->petShop = new PetShop();
    }
    /**
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     * @dataProvider provideConfig
     */
    public function testGetConfig($a, $b, $c, $d)
    {
        $config = $this->petShop->getConfig();
        $this->assertArraySubset(array($a, $b, $c, $d), $config, $strict = 'true',
            $message = 'Tu n\'as pas la config');
    }

    public function provideConfig()
    {
        return [
            [
                'dbhost' => 'localhost',
                'dbport' => 3306,
                'bduser' => 'my-user',
                'dbpass' => 'my-pass'
            ]
        ];
    }
}
