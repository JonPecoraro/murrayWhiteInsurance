<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	return View::make('index')->with('title', 'Home');
});

Route::get('insurance', function()
{
	return View::make('insurance.index')->with('title', 'Insurance');
});

Route::get('quotes', function()
{
	return View::make('quotes.index')->with('title', 'Quotes');
});

Route::post('quotes', function()
{
	return View::make('quotes.index')->with('title', 'Quotes');
});

Route::post('autoQuote', function()
{
	if (Request::has("btnSubmitQuote"))
	{
		Mail::send('emails.autoQuote', Request::all(), function($message)
		{
		    $message->to('murraywhite@murraymwhiteinc.com', 'Murray White')->subject('New Auto Quote Request');
		});
		return View::make('quotes.index')->with('title', 'Quotes')->with("success", "success");
	}
	else
	{
		return View::make('quotes.auto')->with('title', 'Quotes');
	}
});

Route::get('companies', function()
{
	return View::make('companies.index')->with('title', 'Companies');
});

Route::get('team', function()
{
	return View::make('team.index')->with('title', 'Team');
});

Route::get('contact', function()
{
	return View::make('contact.index')->with('title', 'Contact');
});

Route::post('contact', function()
{
	return View::make('contact.index')->with('title', 'Contact');
});

Route::get('about', function()
{
	return View::make('about.index')->with('title', 'About Us');
});

Route::get('mission', function()
{
	return View::make('mission.index')->with('title', 'Mission Statement');
});
