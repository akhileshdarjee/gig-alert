<?php

namespace Gig\Http\Controllers;

use Illuminate\Http\Request;

use Gig\Http\Requests;

class ArtistController extends Controller
{
	// define common variables
	public $form_config;

	public function __construct() {
		$this->form_config = [
			'module' => 'Artist',
			'module_label' => 'Artist',
			'module_icon' => 'fa fa-heart',
			'table_name' => 'tabArtist',
			'view' => 'layouts.artist',
			'avatar_folder' => '/images/artist',
			'link_field' => 'id',
			'link_field_label' => 'ID',
			'record_identifier' => 'name',
			'child_tables' => ['tabArtistGenreDetails'],
			'child_foreign_key' => 'artist_id',
			'child_foreign_map' => [
				'tabArtistGenreDetails' => [
					'tabGenre' => [
						'foreign_key' => 'genre_id',
						'fetch_field' => 'tabGenre.name as genre'
					],
				], 
			]
		];
	}
}