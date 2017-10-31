<?php
	require_once('oggeh.client.php');
	OGGEH::configure('api_key', '[APP_API_KEY]');
	$oggeh = new OGGEH();
	echo $oggeh->display();
	/**
	 * NOTES
	 * this script must be called only once per page request
	 * make sure to include a valid favicon
	 * avoid using blank or invalid source path in img tags
	 */
?>
