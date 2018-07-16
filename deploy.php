<?php
/**
 * Created by PhpStorm.
 * User: bosun
 * Date: 7/16/18
 * Time: 9:19 PM
 */



$commands = array(
	//'echo $PWD',
	//'whoami',
	//'git reset --hard HEAD',
	'cd /var/www/bitdeck.org/wordpress/igfunaab/',
	'git pull names master 2>&1',
	'git status',
//	'composer update',
//	'composer dumpautoload',
//	'php /var/www/dev.budgetier/html/artisan migrate --seed'
	//'git submodule sync',
	//'git submodule update',
	//'git submodule status',
);
// Run the commands for output
$output = '';
foreach($commands AS $command) {
	// Run it
	$tmp = shell_exec($command);
	// Output
	$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
	$output .= htmlentities(trim($tmp)) . "\n";
}

echo $output;
