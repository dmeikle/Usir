<?php
/*
 *  This file is part of the Quantum Unit Solutions development package.
 * 
 *  (c) Quantum Unit Solutions <http://github.com/dmeikle/>
 * 
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

/** *
 * Author: dave
 * Date: 2/27/2017
 * Time: 2:54 PM
 */

namespace tests\Gossamer\Usir\Application;


use Gossamer\Usir\Application\Application;

class ApplicationTest extends \tests\BaseTest
{

    public function testLoadConfig()
    {
        $app = new Application('test', '1.0');
        $app->setConfig($this->getConfig());
        $app->run();

    }

    private function getConfig()
    {

        return  json_decode('{
	"commands": [
		{
			"command": "tests\\\\Gossamer\\\\Usir\\\\Commands\\\\Command1",
			"parameters": [
				"src\\\\components\\\\module\\\\cli\\\\parameters\\\\SomeParameter1",
				"src\\\\components\\\\module\\\\cli\\\\parameters\\\\SomeParameter2"
			]
		},
		{
			"command": "tests\\\\Gossamer\\\\Usir\\\\Commands\\\\Command2",
			"parameters": [
				"src\\\\components\\\\module\\\\cli\\\\parameters\\\\SomeParameter2",
				"src\\\\components\\\\module\\\\cli\\\\parameters\\\\SomeParameter1"
			]
		}
	]
}', true);
    }
}