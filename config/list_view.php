<?php

return [

	/*
	|--------------------------------------------------------------------------
	| List view config to show
	|--------------------------------------------------------------------------
	|
	| Contains columns, link field and search filter field for list view
	|
	*/

	'tabUser' => [
		'link_field' => 'login_id',
		'search_via' => 'login_id',
		'cols' => ['login_id', 'full_name', 'role', 'status']
	],

	'tabArtist' => [
		'link_field' => 'id',
		'search_via' => 'name',
		'cols' => ['name', 'slug', 'status']
	],

	'tabVenue' => [
		'link_field' => 'id',
		'search_via' => 'login_id',
		'cols' => ['name', 'city', 'status']
	],

	'tabGenre' => [
		'link_field' => 'id',
		'search_via' => 'name',
		'cols' => ['name', 'status']
	],

	'tabOrganizer' => [
		'link_field' => 'id',
		'search_via' => 'name',
		'cols' => ['name', 'status']
	],

	'tabGig' => [
		'link_field' => 'id',
		'search_via' => 'name',
		'cols' => ['name', 'starts_at', 'ends_at', 'price', 'status']
	],

];