<?php

namespace Gig\Http\Controllers;

use DB;
use Mail;
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


	// define what should process after save
	public function after_save($request) {
		if (!$request->id) {
			$this->send_upcoming_gig_emails($request);
		}
	}


	// set packages rates
	public function send_upcoming_gig_emails($request) {
		$genre_ids = [];
		$artist_ids = [];
		$form_data = $request->all();

		foreach ($form_data as $column => $value) {
			if ($column == "tabGigArtistDetails") {
				foreach ($value as $artist_data) {
					if (!in_array($artist_data['artist_id'], $artist_ids)) {
						array_push($artist_ids, $artist_data['artist_id']);
					}
				}
			}

			if ($column == "tabGigGenreDetails") {
				foreach ($value as $genre_data) {
					if (!in_array($genre_data['genre_id'], $genre_ids)) {
						array_push($artist_ids, $genre_data['genre_id']);
					}
				}
			}
		}

		$follow = ['artist' => $artist_ids, 'genre' => $genre_ids, 'venue' => $request->venue_id];

		foreach ($follow as $category => $category_id) {
			$user_login_id = DB::table('tabFollowing')
				->where('category', $category);

			if (is_array($category_id)) {
				$user_login_id = $user_login_id
					->whereIn('category_id', $category_id);
			}
			else {
				$user_login_id = $user_login_id
					->where('category_id', $category_id);
			}

			$user_login_ids = $user_login_id
				->distinct()
				->pluck('user_login_id');

			$email_ids = [];
			foreach ($user_login_ids as $email_id) {
				array_push($email_ids, $email_id);
			}

			$mail_config = (object) array(
				'from' => "crew@gigalert.in",
				'to' => $email_ids,
				'subject' => 'Your Favorite Upcoming Gigs'
			);

			// web_dump($form_data);

			Mail::send('emails.upcoming_gigs', array('data' => $form_data), function ($message) use ($mail_config) {
				$message->from($mail_config->from, "Gig Alert");
				$message->to($mail_config->to);
				$message->subject($mail_config->subject);
			});
		}
	}
}