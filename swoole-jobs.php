<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) kcloze <pei.greet@qq.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

define('SWOOLE_JOBS_ROOT_PATH', __DIR__);

require SWOOLE_JOBS_ROOT_PATH . '/vendor/autoload.php';
$config = require_once SWOOLE_JOBS_ROOT_PATH . '/config.php';

$console = new Kcloze\Jobs\Console($config);
$console->run();
