<?php
return array(
		"base_url" => "http://localhost:8000/fbauth/auth",
		"providers" => array(
				"Facebook" => array(
					"enabled" => true,
					"keys" => array("id"=>"1013698725312382", "secret"=>"eb86201c5cb7bd1525dbbc5e26f4ade2"),
					//"keys" => array("id"=>"1561548927392542", "secret"=>"a069df88e6063dd7a8da9d64273aec51"),
					"scope" => "email, publish_stream"
					)
			)
	);