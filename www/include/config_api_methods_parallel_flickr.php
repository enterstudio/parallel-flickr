<?php

	########################################################################

	$GLOBALS['cfg']['api']['methods'] = array_merge(array(

		"parallel.flickr.photos.delete" => array(
			"documented" => 0,
			"enabled" => 0,
			"library" => "api_parallel_flickr_photos",
			"requires_auth" => 1,
			"requires_perms" => 2,
			"requires_crumb" => 1,
			"crumb_ttl" => 300
		),

		"parallel.flickr.favorites.getList" => array(
			"documented" => 0,
			"enabled" => 1,
			"library" => "api_parallel_flickr_favorites",
			"requires_auth" => 1,
		),

		"parallel.flickr.photos.getList" => array(
			"documented" => 0,
			"enabled" => 1,
			"library" => "api_parallel_flickr_photos",
			"requires_auth" => 1,
		),

		"parallel.flickr.photos.setPerms" => array(
			"documented" => 0,
			"enabled" => 1,
			"library" => "api_parallel_flickr_photos",
			"requires_auth" => 1,
			"requires_perms" => 1,
			"requires_crumb" => 1,
			"crumb_ttl" => 300
		),

		"parallel.flickr.photos.upload" => array(
			"documented" => 0,
			"enabled" => 1,
			"library" => "api_parallel_flickr_photos",
			"requires_auth" => 1,
			"requires_perms" => 1,
			"requires_crumb" => 1,
			"crumb_ttl" => 300
		)

	), $GLOBALS['cfg']['api']['methods']);

	########################################################################

	# the end
