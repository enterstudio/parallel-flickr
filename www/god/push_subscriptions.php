<?php

	include("../include/init.php");
	loadlib("god");

	features_ensure_enabled("flickr_push");

	loadlib("flickr_push");
	loadlib("flickr_push_subscriptions");

	$topic_map = flickr_push_topic_map();
	$GLOBALS['smarty']->assign_by_ref("topic_map", $topic_map);

	$crumb_key = "create_feed";
	$GLOBALS['smarty']->assign("crumb_key", $crumb_key);

	if ((post_str("create") && (crumb_check($crumb_key)))){
		# please write me
	}

	$more = array();

	if ($page = get_int32("page")){
		$more['page'] = $page;
	}

	$rsp = flickr_push_subscriptions_get_subscriptions($more);
	$subs = array();

	foreach ($rsp['rows'] as $row){

		$row['owner'] = users_get_by_id($row['user_id']);
		$subs[] = $row;
	}

	$GLOBALS['smarty']->assign_by_ref("subscriptions", $subs);

	$GLOBALS['smarty']->display("page_god_push_subscriptions.txt");
	exit();
?>