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


	# social login route
	#Route::get('login/fb', ['as'=>'login/fb','uses' => 'SocialController@loginWithFacebook']);
	#Route::get('login/gp', ['as'=>'login/gp','uses' => 'SocialController@loginWithGoogle']);


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


	Route::put('profile/updateTeacher', array('as' => 'profile.updateTeacher', 'uses' => 'ProfileController@updateTeacher'));
	Route::put('profile/updateStudent', array('as' => 'profile.updateStudent', 'uses' => 'ProfileController@updateStudent'));
	Route::put('photo', array('as' => 'photo.store', 'uses' => 'ProfileController@photoUpload'));





    #blog section   complete
	Route::get('blog/create', array('as' => 'blog.create', 'uses' => 'BlogController@create'));
	Route::post('blog', array('as' => 'blog.store', 'uses' => 'BlogController@store'));
	Route::get('blog/{id}/edit', array('as' => 'blog.edit', 'uses' => 'BlogController@edit'));
	Route::put('blog/{id}/update', array('as' => 'blog.update', 'uses' => 'BlogController@update'));
	Route::delete('blog/{id}', array('as' => 'blog.delete', 'uses' => 'BlogController@destroy'));
	Route::get('myBlog', array('as' => 'blog.own', 'uses' => 'BlogController@myBlog'));



    #paper section  complete
	Route::get('paper', array('as' => 'paper.index', 'uses' => 'PaperController@index'));
	Route::get('paper/create', array('as' => 'paper.create', 'uses' => 'PaperController@create'));
	Route::post('paper', array('as' => 'paper.store', 'uses' => 'PaperController@store'));
	Route::get('paper/{id}/edit', array('as' => 'paper.edit', 'uses' => 'PaperController@edit'));
	Route::put('paper/{id}/update', array('as' => 'paper.update', 'uses' => 'PaperController@update'));
	Route::delete('paper/{id}', array('as' => 'paper.delete', 'uses' => 'PaperController@destroy'));


    #news section complete
	Route::get('news', array('as' => 'news.index', 'uses' => 'NewsController@index'));
	Route::get('news/create', array('as' => 'news.create', 'uses' => 'NewsController@create'));
	Route::post('news', array('as' => 'news.store', 'uses' => 'NewsController@store'));
	Route::get('news/{id}/edit', array('as' => 'news.edit', 'uses' => 'NewsController@edit'));
	Route::put('news/{id}/update', array('as' => 'news.update', 'uses' => 'NewsController@update'));
	Route::delete('news/{id}', array('as' => 'news.delete', 'uses' => 'NewsController@destroy'));




    #project section complete
	Route::get('project', array('as' => 'project.index', 'uses' => 'ProjectController@index'));
	Route::get('project/create', array('as' => 'project.create', 'uses' => 'ProjectController@create'));
	Route::post('project', array('as' => 'project.store', 'uses' => 'ProjectController@store'));
	Route::get('project/{id}/edit', array('as' => 'project.edit', 'uses' => 'ProjectController@edit'));
	Route::put('project/{id}/update', array('as' => 'project.update', 'uses' => 'ProjectController@update'));
	Route::delete('project/{id}', array('as' => 'project.delete', 'uses' => 'ProjectController@destroy'));
	Route::get('changeStatus/{id}', array('as' => 'project.changeStatus', 'uses' => 'ProjectController@changeStatus'));





	#books section
	Route::get('book', array('as' => 'book.index', 'uses' => 'BookController@index'));
	Route::get('book/create', array('as' => 'book.create', 'uses' => 'BookController@create'));
	Route::post('book', array('as' => 'book.store', 'uses' => 'BookController@store'));
	Route::get('book/{id}/edit', array('as' => 'book.edit', 'uses' => 'BookController@edit'));
	Route::put('book/{id}/update', array('as' => 'book.update', 'uses' => 'BookController@update'));
	Route::delete('book/{id}', array('as' => 'book.delete', 'uses' => 'BookController@destroy'));


});




##only admin can access this area
Route::group(array('middleware' => 'auth'), function() {
	Route::group(array('middleware' => 'user'), function() {

		#slider image
		Route::get('slider', array('as' => 'slider.index', 'uses' => 'SliderController@index'));
		Route::get('slider/create', array('as' => 'slider.create', 'uses' => 'SliderController@create'));
		Route::post('slider', array('as' => 'slider.store', 'uses' => 'SliderController@store'));
		Route::delete('slider/{id}', array('as' => 'slider.delete', 'uses' => 'SliderController@destroy'));



        #home page welcome message
		Route::get('welcome', array('as' => 'welcome.index', 'uses' => 'WelcomeController@index'));
		Route::get('welcome/edit', array('as' => 'welcome.edit', 'uses' => 'WelcomeController@edit'));
		Route::put('award/update', array('as' => 'welcome.update', 'uses' => 'WelcomeController@update'));



		#user list
		#Route::get('allUser', array('as' => 'user.index', 'uses' => 'UsersController@index'));
		Route::get('student-list', array('as' => 'user.student', 'uses' => 'UsersController@student'));
		Route::delete('student-list/{id}', array('as' => 'user.delete', 'uses' => 'UsersController@destroy'));
        Route::post('teacher-sort', array('as' => 'user.teacher.sort', 'uses' => 'UsersController@teacherSort'));
		Route::get('teacher-list', array('as' => 'user.teacher', 'uses' => 'UsersController@teacher'));
		Route::delete('teacher-list/{id}', array('as' => 'user.delete', 'uses' => 'UsersController@destroy'));
		Route::get('alumni-list', array('as' => 'user.alumni', 'uses' => 'UsersController@alumni'));
		Route::delete('alumni-list/{id}', array('as' => 'user.delete', 'uses' => 'UsersController@destroy'));
		Route::get('makeAlumni/{id}', array('as' => 'user.makeAlumni', 'uses' => 'UsersController@makeAlumni'));
          #here different delete for different user


		#user profile
		Route::get('user-profile/{id}', array('as' => 'user.profile', 'uses' => 'UsersController@userProfile'));


		#apply user list
		Route::get('allApplyList', array('as' => 'user.applyList', 'uses' => 'UsersController@applyList'));
		Route::delete('allApplyList/{id}', array('as' => 'user.destroy', 'uses' => 'UsersController@destroy'));


		#teacher and student add by admin
		Route::get('user-add', array('as' => 'auth.userAdd', 'uses' => 'UserAddController@userAdd'));
		Route::post('user-add/store', array('as' => 'auth.userStore', 'uses' => 'UserAddController@userStore'));


		#all user  list
		Route::get('allUser', array('as' => 'user.index', 'uses' => 'UsersController@index'));
		#waiting user approve
		Route::get('userApprove/{id}', array('as' => 'user.approve', 'uses' => 'UsersController@approve'));


		#all blog
		Route::get('blog', array('as' => 'blog.index', 'uses' => 'BlogController@index'));

		#support/ help
		Route::get('help', array('as' => 'help', 'uses' => 'UsersController@help'));



		#tag section   complete
		Route::get('tag', array('as' => 'tag.index', 'uses' => 'TagController@index'));
		Route::get('tag/create', array('as' => 'tag.create', 'uses' => 'TagController@create'));
		Route::post('tag', array('as' => 'tag.store', 'uses' => 'TagController@store'));
		Route::get('tag/{id}/edit', array('as' => 'tag.edit', 'uses' => 'TagController@edit'));
		Route::put('tag/{id}/update', array('as' => 'tag.update', 'uses' => 'TagController@update'));
		Route::delete('tag/{id}', array('as' => 'tag.delete', 'uses' => 'TagController@destroy'));

		#award section   complete
		Route::get('award', array('as' => 'award.index', 'uses' => 'AwardController@index'));
		Route::get('award/create', array('as' => 'award.create', 'uses' => 'AwardController@create'));
		Route::post('award', array('as' => 'award.store', 'uses' => 'AwardController@store'));
		Route::get('award/{id}/edit', array('as' => 'award.edit', 'uses' => 'AwardController@edit'));
		Route::put('award/{id}/update', array('as' => 'award.update', 'uses' => 'AwardController@update'));
		Route::delete('award/{id}', array('as' => 'award.delete', 'uses' => 'AwardController@destroy'));


		#event section  complete
		Route::get('event', array('as' => 'event.index', 'uses' => 'EventController@index'));
		Route::get('event/create', array('as' => 'event.create', 'uses' => 'EventController@create'));
		Route::post('event', array('as' => 'event.store', 'uses' => 'EventController@store'));
		Route::get('event/{id}/edit', array('as' => 'event.edit', 'uses' => 'EventController@edit'));
		Route::put('event/{id}/update', array('as' => 'event.update', 'uses' => 'EventController@update'));
		Route::delete('event/{id}', array('as' => 'event.delete', 'uses' => 'EventController@destroy'));

		#Route::get('event/{event_meta_data}', array('as' => 'event.show', 'uses' => 'EventController@show'));
		Route::get('event-file-upload', array('as' => 'event.eventFileUpload', 'uses' => 'EventController@fileUploadView')); #file upload dropdown view
		Route::post('eventFileUpload', array('as' => 'event.upload', 'uses' => 'EventController@fileUpload')); #file upload from dropdown event
	    Route::post('singleFileUpload', array('as' => 'event.singleUpload', 'uses' => 'EventController@singleFileUpload')); #for modal file upload

		#Route::get('/download/{event_file}', array('as' => 'event.download', 'uses' => 'EventController@getDownload'));



		#project category section   complete
		Route::get('projectCat', array('as' => 'projectCat.index', 'uses' => 'ProjectCatController@index'));
		Route::get('projectCat/create', array('as' => 'projectCat.create', 'uses' => 'ProjectCatController@create'));
		Route::post('projectCat', array('as' => 'projectCat.store', 'uses' => 'ProjectCatController@store'));
		Route::get('projectCat/{id}/edit', array('as' => 'projectCat.edit', 'uses' => 'ProjectCatController@edit'));
		Route::put('projectCat/{id}/update', array('as' => 'projectCat.update', 'uses' => 'ProjectCatController@update'));
		Route::delete('projectCat/{id}', array('as' => 'projectCat.delete', 'uses' => 'ProjectCatController@destroy'));


	});

});




#home
Route::get('/', array('as' => 'labfront.index', 'uses' => 'LabFrontController@index'));

#profile viwe front
Route::get('peopleProfile/{id}', array('as' => 'labfront.peopleProfile', 'uses' => 'LabFrontController@peopleProfile'));



#contact section
Route::get('contact', array('as' => 'labfront.contact', 'uses' => 'ContactController@contact'));
Route::post('contact','ContactController@getContactUsForm');


#blog section
Route::get('blog-all', array('as' => 'labfront.blog', 'uses' => 'LabFrontController@blog'));
Route::get('blog-details/{meta_data}', array('as' => 'labfront.blog_details', 'uses' => 'LabFrontController@frontBlogDetails'));
Route::get('blog-all/{tag}', array('as' => 'labfront.tag', 'uses' => 'LabFrontController@tagAssociateBlog'));
Route::get('blog/archive', array('as' => 'labfront.archive_blog', 'uses' => 'LabFrontController@archive'));
Route::post('blog-all', array('as' => 'search.action', 'uses' => 'LabFrontController@search'));


#news
Route::get('home/news', array('as' => 'labfront.news', 'uses' => 'LabFrontController@news'));
Route::get('home/news/{meta_data}', array('as' => 'labfront.full_news', 'uses' => 'LabFrontController@fullNews'));



#people
Route::get('people/supervisor', array('as' => 'labfront.supervisor', 'uses' => 'LabFrontController@supervisor'));
Route::get('people/student', array('as' => 'labfront.student', 'uses' => 'LabFrontController@student'));
Route::get('people/alumni', array('as' => 'labfront.alumni', 'uses' => 'LabFrontController@alumni'));
Route::get('people/all', array('as' => 'labfront.allPeople', 'uses' => 'LabFrontController@allPeople'));



#events
Route::get('home/event', array('as' => 'labfront.events', 'uses' => 'LabFrontController@events'));
Route::get('home/event/{meta_data}', array('as' => 'labfront.event_single', 'uses' => 'LabFrontController@fullEvent'));

#project
Route::get('home/running-projects', array('as' => 'labfront.runningProject', 'uses' => 'LabFrontController@runningProject'));
Route::get('home/complete-projects', array('as' => 'labfront.completeProject', 'uses' => 'LabFrontController@completeProject'));
Route::get('home/projects/{meta_data}', array('as' => 'labfront.project_single', 'uses' => 'LabFrontController@fullProject'));


#paper
Route::get('home/papers', array('as' => 'labfront.paper', 'uses' => 'LabFrontController@paper'));
Route::get('home/papers/{meta_data}', array('as' => 'labfront.paper_single', 'uses' => 'LabFrontController@fullPaper'));

#award
Route::get('home/award', array('as' => 'labfront.award', 'uses' => 'LabFrontController@award'));
Route::get('home/award/{meta_data}', array('as' => 'labfront.award_single', 'uses' => 'LabFrontController@awardDetails'));


#subscriber or newsletter
Route::post('home/subscriber', array('as' => 'subscriber.action', 'uses' => 'SubscriberController@addSubscriber'));




















/**
 * Developer
 * MD. ABU TALHA
 * SUST, CSE'12 Batch
 * Reg: 2012331008
 * Mob: +8801967402131
 */










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
	return View::make('template.advanced_form')->with('title','Advanced Form');#problem
});

Route::get('form-wizard',function(){
	return View::make('template.form_wizard')->with('title','Form Wizard');
});

Route::get('dataTable',function(){
	return View::make('template.datatable')->with('title','Data Table');
});


*/
/********** Velonic  Admin  End ************/

