<?php

namespace Gig\Http\Controllers;

use Illuminate\Http\Request;

use Gig\Http\Requests;

class GenreController extends Controller
{
	// define common variables
	public $form_config;

	public function __construct() {
		$this->form_config = [
			'module' => 'Genre',
			'module_label' => 'Genre',
			'module_icon' => 'fa fa-puzzle-piece',
			'table_name' => 'tabGenre',
			'view' => 'layouts.genre',
			'avatar_folder' => '/images/genre',
			'link_field' => 'id',
			'link_field_label' => 'ID',
			'record_identifier' => 'name'
		];
	}
}