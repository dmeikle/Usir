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
 * Time: 3:58 PM
 */

namespace tests\Gossamer\Usir\Commands;


use Gossamer\Usir\Commands\BaseCommand;

class Command2 extends BaseCommand
{

    public function execute(array $params = null)
    {
        echo "this is command2\r\n";
    }
}