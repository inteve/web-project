<?php

use Tracy\Debugger;


/**
 * Tracy\Debugger::barDump() shortcut.
 */
function barDump($var)
{
	foreach (func_get_args() as $arg) {
		Debugger::barDump($arg);
	}
	return $var;
}


/**
 * Tracy\Debugger::log() shortcut.
 */
function dlog($var = NULL)
{
	if (func_num_args() === 0) {
		Debugger::log(new Exception, 'dlog');
	}
	foreach (func_get_args() as $arg) {
		Debugger::log($arg, 'dlog');
	}
	return $var;
}
