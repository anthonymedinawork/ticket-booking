<?php

declare(strict_types=1);

use Symfony\Component\VarDumper\Caster\ReflectionCaster;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\VarDumper;

if (!\function_exists('dumprr')) {
    /**
     * Dump value int STDERR.
     */
    function dumprr(mixed $value, mixed ...$values): mixed
    {
        $previous = $_SERVER['VAR_DUMPER_FORMAT'] ?? false;
        unset($_SERVER['VAR_DUMPER_FORMAT']);

        if (!\defined('STDERR')) {
            \define('STDERR', \fopen('php://stderr', 'wb'));
        }
        static $dumper = new CliDumper(STDERR);

        //
        // Output modifiers
        //
        $cloner = new VarCloner();
        // remove File and Line definitions from a custom closure dump
        $cloner->addCasters(ReflectionCaster::UNSET_CLOSURE_FILE_INFO);

        // Set new handler and store previous one
        $prevent = VarDumper::setHandler(static fn ($value) => $dumper->dump($cloner->cloneVar($var)));
        $result = VarDumper::dump($value);

        foreach ($values as $v) {
            VarDumper::dump($v);
        }

        // Reset handler
        VarDumper::setHandler($prevent);

        if ($previous) {
            $_SERVER['VAR_DUMPER_FORMAT'] = $previous;
        }

        return $result;
    }
}
