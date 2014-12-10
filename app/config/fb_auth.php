<?php
return array(
		"base_url" => "http://localhost:8000/fbauth/auth",
		"providers" => array(
				"Facebook" => array(
					"enabled" => true,
					"keys" => array("id"=>"1013698725312382", "secret"=>"eb86201c5cb7bd1525dbbc5e26f4ade2"),
					"scope" => "email, user_about_me, user_birthday, user_hometown, user_website, offline_access, read_stream, publish_stream, read_friendlists"
					)
			)
	);