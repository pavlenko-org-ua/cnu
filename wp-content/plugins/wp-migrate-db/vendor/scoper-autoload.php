<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('ComposerAutoloaderInitdbbe59abe916c1a1ff72a576a9d936d0', false) && !interface_exists('ComposerAutoloaderInitdbbe59abe916c1a1ff72a576a9d936d0', false) && !trait_exists('ComposerAutoloaderInitdbbe59abe916c1a1ff72a576a9d936d0', false)) {
    spl_autoload_call('DeliciousBrains\WPMDB\Container\ComposerAutoloaderInitdbbe59abe916c1a1ff72a576a9d936d0');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('composerRequiredbbe59abe916c1a1ff72a576a9d936d0')) {
    function composerRequiredbbe59abe916c1a1ff72a576a9d936d0() {
        return \DeliciousBrains\WPMDB\Container\composerRequiredbbe59abe916c1a1ff72a576a9d936d0(...func_get_args());
    }
}

return $loader;