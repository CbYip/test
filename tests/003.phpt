--TEST--
hello_test2() Basic test
--SKIPIF--
<?php
if (!extension_loaded('hello')) {
	echo 'skip';
}
?>
--FILE--
<?php
var_dump(hello_test2());
var_dump(hello_test2('PHP'));
var_dump(hello());
?>
--EXPECT--
string(11) "Hello World"
string(9) "Hello PHP"
