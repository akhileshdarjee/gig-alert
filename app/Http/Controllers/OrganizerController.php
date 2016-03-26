<?php

namespace Gig\Http\Controllers;

use Illuminate\Http\Request;

use Gig\Http\Requests;

class OrganizerController extends Controller
{
	// define common variables
	public $form_config;

	public function __construct() {
		$this->form_config = [
			'module' => 'Organizer',
			'module_label' => 'Organizer',
			'module_icon' => 'fa fa-users',
			'table_name' => 'tabOrganizer',
			'view' => 'layouts.organizer',
			'avatar_folder' => '/images/organizer',
			'link_field' => 'id',
			'link_field_label' => 'ID',
			'record_identifier' => 'name'
		];
	}
}