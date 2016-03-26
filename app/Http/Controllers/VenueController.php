<?php

namespace Gig\Http\Controllers;

use Illuminate\Http\Request;

use Gig\Http\Requests;

class VenueController extends Controller
{
	// define common variables
	public $form_config;

	public function __construct() {
		$this->form_config = [
			'module' => 'Venue',
			'module_label' => 'Venue',
			'module_icon' => 'fa fa-map-marker',
			'table_name' => 'tabVenue',
			'view' => 'layouts.venue',
			'avatar_folder' => '/images/venue',
			'link_field' => 'id',
			'link_field_label' => 'ID',
			'record_identifier' => 'name'
		];
	}
}