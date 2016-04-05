<?php
// Define the hooks
$hook_functions = array(
	'integrate_pre_include' => '$sourcedir/video-bbcode.php',
	'integrate_bbc_codes' => 'video_bbcode',
	'integrate_bbc_buttons' => 'video_bbcode_button',
);

// Adding or removing them?
if (!empty($context['uninstalling']))
	$call = 'remove_integration_function';
else
	$call = 'add_integration_function';

// Do the deed
foreach ($hook_functions as $hook => $function)
	$call($hook, $function);

if (SMF == 'SSI')
   echo 'Congratulations! You have successfully installed this mod!';
?>
