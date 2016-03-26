<?php

namespace Gig\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;

use Gig\Http\Requests;

class WebsiteController extends Controller
{
	// show website landing page
	public function showIndex() {
		return view('website.index');
	}


	// show artist page
	public function showArtistDetails($slug) {
		$artist = DB::table('tabArtist')
			->where('slug', $slug)
			->first();

		$artist_gigs = DB::table('tabGig')
			->leftJoin('tabGigArtistDetails', 'tabGig.id', '=', 'tabGigArtistDetails.gig_id')
			->where('tabGig.status', 'Active')
			->where('tabGigArtistDetails.artist_id', $artist->id)
			->get();

		return view('website.layouts.artist')->with(compact('artist', 'artist_gigs'));
	}


	// show gigs page
	public function showGigs() {
		$gigs = DB::table('tabGig')
			->where('status', 'Active')
			->where('starts_at', '>=', date('Y-m-d H:i:s'))
			->where('ends_at', '<=', date('Y-m-d H:i:s'))
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
			'category_id' => $id
		];

		$result = DB::table('tabFollowing')->insert($details);

		if ($result) {
			$response_data = [
				'status' => 'OK',
				'status_code' => 200,
				'message' => 'Followed successfully'
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
		$result = DB::table('tabFollowing')
			->where('user_login_id', Session::get('login_id'))
			->where('category', strtolower($category))
			->where('category_id', $id)
			->delete();

		if ($result) {
			$response_data = [
				'status' => 'OK',
				'status_code' => 200,
				'message' => 'Unfollowed successfully'
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
}