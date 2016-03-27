<?php

namespace Gig\Http\Controllers;

use DB;
use Session;
use Crypt;
use Illuminate\Http\Request;

use Gig\Http\Requests;

class WebsiteController extends Controller
{
	// show website landing page
	public function showIndex() {
		return view('website.index');
	}


	// show website login page
	public function showLogin() {
		return view('website.layouts.login');
	}


	// show website register page
	public function showRegister() {
		return view('website.layouts.register');
	}


	// show website register page
	public function showDiscover() {
		$artists = DB::table('tabArtist')
			->select('id', 'avatar_link', 'name', 'description', 'slug')
			->where('status', 'Active')
			->get();

		$artist_genres = [];

		if ($artists) {
			foreach ($artists as $artist) {
				$genres = DB::table('tabArtistGenreDetails')
					->leftJoin('tabArtist', 'tabArtistGenreDetails.artist_id', '=', 'tabArtist.id')
					->leftJoin('tabGenre', 'tabArtistGenreDetails.genre_id', '=', 'tabGenre.id')
					->where('tabArtistGenreDetails.artist_id', $artist->id)
					->pluck('tabGenre.name');

				if ($genres) {
					$artist_genres[$artist->id] = $genres;
				}
			}
		}

		$venues = DB::table('tabVenue')
			->select('id', 'avatar', 'name', 'description')
			->where('status', 'Active')
			->get();

		$genres = DB::table('tabGenre')
			->select('id', 'avatar', 'name', 'description')
			->where('status', 'Active')
			->get();

		return view('website.layouts.discover')->with(compact('artists', 'artist_genres', 'genres', 'venues'));
	}


	// show artist page
	public function showArtistDetails($slug) {
		$artist = DB::table('tabArtist')
			->select('id', 'name', 'avatar_link', 'description')
			->where('slug', $slug)
			->first();

		$follows = DB::table('tabFollowing')
			->where('user_login_id', Session::get('login_id'))
			->where('category', 'artist')
			->where('category_id', $artist->id)
			->pluck('id');

		$artist_gigs = DB::table('tabGig')
			->select(
				'tabGig.id', 'tabGig.name', 'tabGig.avatar', 'tabGig.description', 
				'tabGig.ticket_link', 'tabGig.price'
			)
			->leftJoin('tabGigArtistDetails', 'tabGig.id', '=', 'tabGigArtistDetails.gig_id')
			->where('tabGig.status', 'Active')
			->where('tabGigArtistDetails.artist_id', $artist->id)
			->where('ends_at', '>=', date('Y-m-d H:i:s'))
			->get();

		$gig_genres = [];

		if ($artist_gigs) {
			foreach ($artist_gigs as $gig) {
				$genres = DB::table('tabGigGenreDetails')
					->leftJoin('tabGenre', 'tabGigGenreDetails.genre_id', '=', 'tabGenre.id')
					->where('tabGigGenreDetails.gig_id', $gig->id)
					->pluck('tabGenre.name');

				if ($genres) {
					$gig_genres[$gig->id] = $genres;
				}
			}
		}

		return view('website.layouts.artist')->with(compact('artist', 'artist_gigs', 'gig_genres', 'follows'));
	}


	// show gigs page
	public function showGigs() {
		$gigs = DB::table('tabGig')
			->select('id', 'name', 'description', 'avatar', 'ticket_link', 'price')
			->where('status', 'Active')
			->where('ends_at', '>=', date('Y-m-d H:i:s'))
			->get();

		$gig_genres = [];

		if ($gigs) {
			foreach ($gigs as $gig) {
				$genres = DB::table('tabGigGenreDetails')
					->leftJoin('tabGenre', 'tabGigGenreDetails.genre_id', '=', 'tabGenre.id')
					->where('tabGigGenreDetails.gig_id', $gig->id)
					->pluck('tabGenre.name');

				if ($genres) {
					$gig_genres[$gig->id] = $genres;
				}
			}
		}

		return view('website.layouts.gigs')->with(compact('gigs', 'gig_genres'));
	}


	// show user following categories page
	public function showFollowing() {
		$followings = DB::table('tabFollowing')
			->select('category', 'category_id')
			->where('user_login_id', Session::get('login_id'))
			->get();

		$artists_id = [];
		$genres_id = [];
		$venues_id = [];

		foreach ($followings as $follow) {
			if ($follow->category == "artist") {
				if (!in_array($follow->category_id, $artists_id)) {
					array_push($artists_id, $follow->category_id);
				}
			}

			if ($follow->category == "genre") {
				if (!in_array($follow->category_id, $genres_id)) {
					array_push($genres_id, $follow->category_id);
				}
			}

			if ($follow->category == "venue") {
				if (!in_array($follow->category_id, $venues_id)) {
					array_push($venues_id, $follow->category_id);
				}
			}
		}

		$artists = DB::table('tabArtist')
			->select('id', 'avatar_link', 'name', 'description', 'slug')
			->whereIn('id', $artists_id)
			->where('status', 'Active')
			->get();

		$artist_genres = [];

		if ($artists) {
			foreach ($artists as $artist) {
				$genres = DB::table('tabArtistGenreDetails')
					->leftJoin('tabArtist', 'tabArtistGenreDetails.artist_id', '=', 'tabArtist.id')
					->leftJoin('tabGenre', 'tabArtistGenreDetails.genre_id', '=', 'tabGenre.id')
					->whereIn('tabArtistGenreDetails.artist_id', $artists_id)
					->pluck('tabGenre.name');

				if ($genres) {
					$artist_genres[$artist->id] = $genres;
				}
			}
		}

		$venues = DB::table('tabVenue')
			->select('id', 'avatar', 'name', 'description')
			->whereIn('id', $venues_id)
			->where('status', 'Active')
			->get();

		$genres = DB::table('tabGenre')
			->select('id', 'avatar', 'name', 'description')
			->whereIn('id', $genres_id)
			->where('status', 'Active')
			->get();

		return view('website.layouts.following')->with(compact('artists', 'artist_gigs', 'venues', 'genres'));
	}


	// follow any category
	public function follow($category, $id) {
		$details = [
			'user_login_id' => Session::get('login_id'),
			'category' => strtolower($category),
			'category_id' => $id,
			'owner' => Session::get('login_id'),
			'last_updated_by' => Session::get('login_id'),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		];

		$result = DB::table('tabFollowing')->insert($details);

		if ($result) {
			$response_data = [
				'status' => 'OK',
				'status_code' => 200,
				'message' => 'Followed successfully',
				'link' => '/unfollow/' . $category . '/' . $id
			];
			return response()->json($response_data, 200);
		}
		else {
			$response_data = [
				'status' => 'Internal Server Error',
				'status_code' => 500,
				'message' => 'Some error occured. Please try again'
			];
			return response()->json($response_data, 500);
		}
	}


	// unfollow any category
	public function unfollow($category, $id) {
		$category = strtolower($category);

		$result = DB::table('tabFollowing')
			->where('user_login_id', Session::get('login_id'))
			->where('category', $category)
			->where('category_id', $id)
			->delete();

		if ($result) {
			$response_data = [
				'status' => 'OK',
				'status_code' => 200,
				'message' => 'Unfollowed successfully',
				'link' => '/follow/' . $category . '/' . $id
			];
			return response()->json($response_data, 200);
		}
		else {
			$response_data = [
				'status' => 'Internal Server Error',
				'status_code' => 500,
				'message' => 'Some error occured. Please try again'
			];
			return response()->json($response_data, 500);
		}
	}


	// verify customer email id
	public static function verify_email($token) {
		$login_id = Crypt::decrypt($token);

		$result = DB::table('tabUser')
			->where('login_id', $login_id)
			->update(['status' => 'Active']);

		if ($result) {
			return redirect('/user_login')->with([
				'msg' => 'Email successfully verified',
				'success' => 'true'
			]);
		}
		else {
			return redirect('/user_login')->with([
				'msg' => 'Verification error occured. Please try again...!!!',
				'success' => 'false'
			]);
		}
	}
}