<?php

use OpenCage\Loader\CompatLoader;

$this->provideHook('monitoring/HostActions');

$this->provideHook('cube/Actions', 'CubeLinks');
$this->provideHook('icingadb/IcingadbSupport');
$this->provideHook('icingadb/HostActions');

$this->provideHook('cube/Actions', 'IcingaDbCubeLinks');

require_once __DIR__ . '/library/vendor/OpenCage/Loader/CompatLoader.php';
CompatLoader::delegateLoadingToIcingaWeb($this->app);
