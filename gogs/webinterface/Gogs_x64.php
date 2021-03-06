<?php

/**
 * WPИ-XM Server Stack
 * Copyright © 2010 - 2017 Jens A. Koch <jakoch@web.de>
 * http://wpn-xm.org/
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

namespace WPNXM\Webinterface\Software;

use WPNXM\Webinterface\SoftwareBase;

/**
 * WPN-XM Webinterface - Class for Go Git Service x64
 */
class Gogs_x64 extends SoftwareBase
{
    public $name = 'Go Git Service x64';

    public $registryName = 'gogs-x64';

    public $installationFolder = /* WPNXM_ROOT . */ '\bin\gogs';

    public $files = [
        '\bin\gogs\gogs-x64.exe',
    ];

    public function __invoke()
    {
        echo __CLASS__ . ' invoked';
    }
}