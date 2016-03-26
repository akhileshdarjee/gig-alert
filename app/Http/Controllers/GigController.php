<?php

namespace Gig\Http\Controllers;

use Illuminate\Http\Request;

use Gig\Http\Requests;

class GigController extends Controller
{
	// define common variables
	public $form_config;

	public function __construct() {
		$this->form_config = [
			'module' => 'Gig',
			'module_label' => 'Gig',
			'module_icon' => 'fa fa-magic',
			'table_name' => 'tabGig',
			'view' => 'layouts.gig',
			'avatar_folder' => '/images/gig',
			'link_field' => 'id',
			'link_field_label' => 'ID',
			'record_identifier' => 'name',
			'child_tables' => ['tabGigArtistDetails', 'tabGigGenreDetails'],
			'child_foreign_key' => 'gig_id',
			'parent_foreign_map' => [
				'tabVenue' => [
					'foreign_key' => 'venue_id',
					'fetch_field' => 'tabVenue.name as venue'
				],
				'tabOrganizer' => [
					'foreign_key' => 'organizer_id',
					'fetch_field' => 'tabOrganizer.name as organizer'
				],
			],
			'child_foreign_map' => [
				'tabGigArtistDetails' => [
					'tabArtist' => [
						'foreign_key' => 'artist_id',
						'fetch_field' => 'tabArtist.name as artist'
					],
				], 
				'tabGigGenreDetails' => [
					'tabGenre' => [
						'foreign_key' => 'genre_id',
						'fetch_field' => 'tabGenre.name as genre'
					],
				]
			]
		];
	}
}