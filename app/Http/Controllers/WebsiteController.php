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
			->where('status', 'Active')
			->where('ends_at', '>=', date('Y-m-d H:i:s'))
			->get();

		return view('website.layouts.gigs')->with(compact('gigs'));
	}


	// show user following categories page
	public function showFollowings() {
		$followings = DB::table('tabFollowing')
			->where('user_login_id', Session::get('user_login_id'))
			->groupBy('category')
			->get();

		return view('website.layouts.followings')->with(compact('followings'));
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