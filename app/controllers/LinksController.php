<?php

use SuperTiny\validation\ValidationException;
use SuperTiny\Exceptions\NonExistentHashException;

class LinksController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 * GET /links/create
	 *
	 * @return Response
	 */
	public function create()
	{	
		return View::make('Links.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /links
	 *
	 * @return Response
	 */
	public function store()
	{
		try {
				//we will try to shorten the url 
				$hash = Little::make(Input::get('url'));

			} catch (ValidationException $e) {

				//But if there's any validation exception we will catch them and redirect home with the errors
				return Redirect::home()->withErrors($e->getErrors())->withInput();
			}

		return Redirect::home()->with([
			'flash_message' => 'Here you go! '. Link_to($hash),
			'hashed'		=> $hash
			]);	
	}


	public function translateHash($hash)
	{	
		//we are going to try to fetch an url according to its hash
		try {
				$url = Little::getUrlByHash($hash);

		} catch (NonExistentHashException $e) {

			return Redirect::home()->withFlashMessage('Sorry - could not find a url associated to that hash.');
			
		}

		return Redirect::to($url);
	}	

}