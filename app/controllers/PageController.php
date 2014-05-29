<?php

class PageController extends BaseController {



	public function home()
	{
	
		// Get a random diss		
		return View::make('pages.home', [
			'diss' => Diss::random()
		]);
	}


	public function dissAFriend() {

		// Check fields
		if (!Input::has('from_name') || !Input::has('from_email') || !Input::has('to_email') ||
			!filter_var(Input::get('from_email'), FILTER_VALIDATE_EMAIL) ||
			!filter_var(Input::get('to_email'), FILTER_VALIDATE_EMAIL)) {

			return Redirect::to('/')->with('message', 'Het formulier is niet goed ingevuld.')->withInput();

		}

		Mail::send('emails.diss-a-friend', [
			'from_name' => Input::get('from_name')
		], function($message) {

			$message->to(Input::get('to_email'))->subject(Input::get('from_name') . ' wil je dissen');
			$message->from('no-reply@disser.nl', 'disser.nl');


		});

		Session::set('from_name', Input::get('from_name'));
		Session::set('from_email', Input::get('from_email'));

		return Redirect::to('/')->with('message', 'De dis is verstuurd naar ' . Input::get('to_email') . ".");


	}

}
