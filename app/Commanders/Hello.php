<?php
/**
 * This file is part of the O2System PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Steeve Andrian Salim
 * @copyright      Copyright (c) Steeve Andrian Salim
 */
// ------------------------------------------------------------------------

namespace App\Commanders;

// ------------------------------------------------------------------------

use App\Cli\Commander;

/**
 * Class Hello
 *
 * @package App\Commanders
 */
class Hello extends Commander
{
    /**
     * Hello::$commandVersion
     *
     * Command version.
     *
     * @var string
     */
    protected $commandVersion = '1.0.0';

    /**
     * Hello::$commandDescription
     *
     * Command description.
     *
     * @var string
     */
    protected $commandDescription = 'Hello World Example';

    /**
     * Hello::$commandOptions
     *
     * Command options.
     *
     * @var array
     */
    protected $commandOptions = [
        'name'    => [
            'description' => 'Please input your name.',
            'required'    => true,
        ]
    ];

    /**
     * Hello::$optionName
     * 
     * @var string
     */
    protected $optionName = null;

    // ------------------------------------------------------------------------
    
    /**
     * Hello::optionName
     * 
     * @param  string $name Option name parameter
     * @return void
     */
    public function optionName( $name ) 
    {
        $this->optionName = ucfirst ( trim( $name ) );
    }

    // ------------------------------------------------------------------------

    /**
     * Hello::execute
     * 
     * @return void
     */
    public function execute()
    {
        parent::execute();

        output()->write('Hello !');
    }
}