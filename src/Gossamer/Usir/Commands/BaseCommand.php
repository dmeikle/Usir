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
 * Time: 2:47 PM
 */

namespace Gossamer\Usir\Commands;


abstract class BaseCommand
{

    public abstract function execute(array $params = null);
}