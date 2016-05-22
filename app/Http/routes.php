<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return Redirect::route('labfront.index');
});




Route::group(['middleware' => 'guest'], function(){


	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::post('login', array('uses' => 'Auth\AuthController@doLogin'));


	// social login route
	//Route::get('login/fb', ['as'=>'login/fb','uses' => 'SocialController@loginWithFacebook']);
	//Route::get('login/gp', ['as'=>'login/gp','uses' => 'SocialController@loginWithGoogle']);


	Route::get('apply-for-member', ['as' => 'user.create', 'uses' => 'UsersController@create']);
	Route::post('admin/user/store', ['as'=>'user.store','uses' => 'UsersController@store']);

});




Route::group(array('middleware' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@profile']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));


	Route::put('profile/update', array('as' => 'profile.update', 'uses' => 'ProfileController@update'));
	Route::put('photo', array('as' => 'photo.store', 'uses' => 'ProfileController@photoUpload'));





//blog section
	Route::get('blog/create', array('as' => 'blog.create', 'uses' => 'BlogController@create'));
	Route::post('blog', array('as' => 'blog.store', 'uses' => 'BlogController@store'));
	Route::get('blog/{id}/edit', array('as' => 'blog.edit', 'uses' => 'BlogController@edit'));
	Route::put('blog/{id}/update', array('as' => 'blog.update', 'uses' => 'BlogController@update'));
	Route::delete('blog/{id}', array('as' => 'blog.delete', 'uses' => 'BlogController@destroy'));
	Route::get('myBlog', array('as' => 'blog.own', 'uses' => 'BlogController@myBlog'));


//award section
	Route::get('award', array('as' => 'award.index', 'uses' => 'AwardController@index'));
	Route::get('award/create', array('as' => 'award.create', 'uses' => 'AwardController@create'));
	Route::post('award', array('as' => 'award.store', 'uses' => 'AwardController@store'));
	Route::get('award/{id}/edit', array('as' => 'award.edit', 'uses' => 'AwardController@edit'));
	Route::put('award/{id}/update', array('as' => 'award.update', 'uses' => 'AwardController@update'));
	Route::delete('award/{id}', array('as' => 'award.delete', 'uses' => 'AwardController@destroy'));


//paper section
	Route::get('paper', array('as' => 'paper.index', 'uses' => 'PaperController@index'));
	Route::get('paper/create', array('as' => 'paper.create', 'uses' => 'PaperController@create'));
	Route::post('paper', array('as' => 'paper.store', 'uses' => 'PaperController@store'));
	Route::get('paper/{id}/edit', array('as' => 'paper.edit', 'uses' => 'PaperController@edit'));
	Route::put('paper/{id}/update', array('as' => 'paper.update', 'uses' => 'PaperController@update'));
	Route::delete('paper/{id}', array('as' => 'paper.delete', 'uses' => 'PaperController@destroy'));



//project category section
	Route::get('projectCat', array('as' => 'projectCat.index', 'uses' => 'ProjectCatController@index'));
	Route::get('projectCat/create', array('as' => 'projectCat.create', 'uses' => 'ProjectCatController@create'));
	Route::post('projectCat', array('as' => 'projectCat.store', 'uses' => 'ProjectCatController@store'));
	Route::get('projectCat/{id}/edit', array('as' => 'projectCat.edit', 'uses' => 'ProjectCatController@edit'));
	Route::put('projectCat/{id}/update', array('as' => 'projectCat.update', 'uses' => 'ProjectCatController@update'));
	Route::delete('projectCat/{id}', array('as' => 'projectCat.delete', 'uses' => 'ProjectCatController@destroy'));



//project section
	Route::get('project', array('as' => 'project.index', 'uses' => 'ProjectController@index'));
	Route::get('project/create', array('as' => 'project.create', 'uses' => 'ProjectController@create'));
	Route::post('project', array('as' => 'project.store', 'uses' => 'ProjectController@store'));
	Route::get('project/{id}/edit', array('as' => 'project.edit', 'uses' => 'ProjectController@edit'));
	Route::put('project/{id}/update', array('as' => 'project.update', 'uses' => 'ProjectController@update'));
	Route::delete('project/{id}', array('as' => 'project.delete', 'uses' => 'ProjectController@destroy'));


//event section
	Route::get('event', array('as' => 'event.index', 'uses' => 'EventController@index'));
	Route::get('event/create', array('as' => 'event.create', 'uses' => 'EventController@create'));
	Route::post('event', array('as' => 'event.store', 'uses' => 'EventController@store'));
	Route::get('event/{id}/edit', array('as' => 'event.edit', 'uses' => 'EventController@edit'));
	Route::put('event/{id}/update', array('as' => 'event.update', 'uses' => 'EventController@update'));
	Route::delete('event/{id}', array('as' => 'event.delete', 'uses' => 'EventController@destroy'));



//news section
	Route::get('news', array('as' => 'news.index', 'uses' => 'NewsController@index'));
	Route::get('news/create', array('as' => 'news.create', 'uses' => 'NewsController@create'));
	Route::post('news', array('as' => 'news.store', 'uses' => 'NewsController@store'));
	Route::get('news/{id}/edit', array('as' => 'news.edit', 'uses' => 'NewsController@edit'));
	Route::put('news/{id}/update', array('as' => 'news.update', 'uses' => 'NewsController@update'));
	Route::delete('news/{id}', array('as' => 'news.delete', 'uses' => 'NewsController@destroy'));



});

//only admin can access this area
Route::group(array('middleware' => 'auth'), function() {
	Route::group(array('middleware' => 'user'), function() {

		//blogger list
		Route::get('allUser', array('as' => 'user.index', 'uses' => 'UsersController@index'));
		Route::delete('allUser/{id}', array('as' => 'user.delete', 'uses' => 'UsersController@destroy'));


		//apply user list
		Route::get('allApplyList', array('as' => 'user.applyList', 'uses' => 'UsersController@applyList'));
		Route::delete('allApplyList/{id}', array('as' => 'user.destroy', 'uses' => 'UsersController@destroy'));


		//approve users
		Route::get('allUser', array('as' => 'user.index', 'uses' => 'UsersController@index'));



		//tag section
		Route::get('tag', array('as' => 'tag.index', 'uses' => 'TagController@index'));
		Route::get('tag/create', array('as' => 'tag.create', 'uses' => 'TagController@create'));
		Route::post('tag', array('as' => 'tag.store', 'uses' => 'TagController@store'));
		Route::get('tag/{id}/edit', array('as' => 'tag.edit', 'uses' => 'TagController@edit'));
		Route::put('tag/{id}/update', array('as' => 'tag.update', 'uses' => 'TagController@update'));
		Route::delete('tag/{id}', array('as' => 'tag.delete', 'uses' => 'TagController@destroy'));


		//all blog section
		Route::get('userApprove/{id}', array('as' => 'user.approve', 'uses' => 'UsersController@approve'));

		//all blog
		Route::get('blog', array('as' => 'blog.index', 'uses' => 'BlogController@index'));



		//support/ help
		Route::get('help', array('as' => 'help', 'uses' => 'UsersController@help'));

	});

});





//home
Route::get('home', array('as' => 'labfront.index', 'uses' => 'LabFrontController@index'));



//contact section
Route::get('contact', array('as' => 'labfront.contact', 'uses' => 'ContactController@contact'));
Route::post('contact','ContactController@getContactUsForm');


//blog section
Route::get('blog-all', array('as' => 'labfront.blog', 'uses' => 'LabFrontController@blog'));
Route::get('blog-details/{meta_data}', array('as' => 'labfront.blog_details', 'uses' => 'LabFrontController@frontBlogDetails'));
Route::get('blog-all/{tag}', array('as' => 'labfront.tag', 'uses' => 'LabFrontController@tagAssociateBlog'));
Route::get('blog/archive', array('as' => 'labfront.archive_blog', 'uses' => 'LabFrontController@archive'));
Route::post('blog-all', array('as' => 'search.action', 'uses' => 'LabFrontController@search'));


//news
Route::get('home/news', array('as' => 'labfront.news', 'uses' => 'LabFrontController@news'));
Route::get('home/news/{meta_data}', array('as' => 'labfront.full_news', 'uses' => 'LabFrontController@fullNews'));



//people
Route::get('people/supervisor', array('as' => 'labfront.supervisor', 'uses' => 'LabFrontController@supervisor'));
Route::get('people/student', array('as' => 'labfront.student', 'uses' => 'LabFrontController@student'));
Route::get('people/alumni', array('as' => 'labfront.alumni', 'uses' => 'LabFrontController@alumni'));


//events
Route::get('home/event', array('as' => 'labfront.events', 'uses' => 'LabFrontController@events'));
Route::get('home/event/{meta_data}', array('as' => 'labfront.event_single', 'uses' => 'LabFrontController@fullEvent'));







































/**********Velonic  Admin  starts ************/
/*
Route::get('profile1',function(){
	return View::make('template.profile')->with('title','Profile');
});

Route::get('timeline',function(){
	return View::make('template.timeline')->with('title','Timeline');
});

Route::get('widgets',function(){
	return View::make('template.widgets')->with('title','Widgets');
});

Route::get('portlets',function(){
	return View::make('template.portlets')->with('title','Portlets');
});

Route::get('panel',function(){
	return View::make('template.panel')->with('title','Panel');
});

Route::get('chart_x',function(){
	return View::make('template.chart_x')->with('title','Chart_x');
});


Route::get('index2',function(){
	return View::make('template.dashboard')->with('title','Dashboard');
});

Route::get('gmap',function(){
	return View::make('template.gmap')->with('title','GMap');
});

Route::get('friends',function(){
	return View::make('template.friends')->with('title','Friends');
});

Route::get('adForm',function(){
	return View::make('template.advanced_form')->with('title','Advanced Form');//problem
});

Route::get('form-wizard',function(){
	return View::make('template.form_wizard')->with('title','Form Wizard');
});

Route::get('dataTable',function(){
	return View::make('template.datatable')->with('title','Data Table');
});


*/
/********** Velonic  Admin  End ************/

