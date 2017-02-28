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
 * Time: 2:44 PM
 */

namespace Gossamer\Usir\Application;


use Gossamer\Usir\Commands\BaseCommand;
use Gossamer\Usir\Workers\BaseWorker;

class Application
{

    protected $appName;

    protected $version;

    protected $commands = array();

    public function __construct($appName, $version)
    {
        $this->appName = $appName;
        $this->version = $version;
    }

    public function add(BaseCommand $command) {
        $this->commands[] = $command;
    }

    public function run() {
        foreach($this->commands as $command) {
            echo "running " . get_class($command) ."\r\n";
            $command->execute();
        }
    }

    /**
     * @param array $config
     *
     *
     {
        "commands": [
            {
                "command": "src\\components\\module\\cli\\Command1",
                "parameters": [
                    "src\\components\\module\\cli\\parameters\\SomeParameter1",
                    "src\\components\\module\\cli\\parameters\\SomeParameter2"
                ]
            },
            {
                "command": "src\\components\\module\\cli\\Command2",
                "parameters": [
                    "src\\components\\module\\cli\\parameters\\SomeParameter2",
                    "src\\components\\module\\cli\\parameters\\SomeParameter1"
                ]
            }
        ]
     }
     */
    public function setConfig(array $config) {

        foreach($config['commands'] as $commandConfig) {
            $this->commands[] = $this->buildCommand($commandConfig['command']);
        }
    }

    protected function buildCommand($commandName, array $parameters = null) {

        //TODO: add param builder at some point
        if(!is_null($parameters)) {
            $params = array();

            foreach($parameters as $parameterName) {

            }
        }

        return new $commandName();
    }
}

