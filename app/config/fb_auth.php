<?php
return array(
		"base_url" => url()."/fbauth/auth",
		"providers" => array(
				"Facebook" => array(
					"enabled" => true,
					"keys" => array("id"=>"1561548927392542", "secret"=>"a069df88e6063dd7a8da9d64273aec51"),
					"scope" => "email, public_profile"
					)
			)
	);