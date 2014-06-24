--TEST--
GtkWidget->has_default method
--SKIPIF--
<?php
if(!extension_loaded('php-gtk')) die('skip - PHP-GTK extension not available');
if(!method_exists('GtkWidget', 'has_default')) die('skip - GtkWidget->has_default not available, requires GTK 2.18 or higher');
?>
--FILE--
<?php
$window = new GtkWindow();
var_dump($window->has_default());

/* Wrong number args*/
$window->has_default(1);

/* Takes no args, so no arg type checking */
?>
--EXPECTF--
bool(false)

Warning: GtkWidget::has_default() expects exactly 0 parameters, 1 given in %s on line %d