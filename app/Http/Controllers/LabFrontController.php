<?php

namespace App\Http\Controllers;
use App\Event;
use App\News;
use App\Paper;
use App\Project;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use App\Blog;
use App\Http\Requests\BlogRequest;
use Redirect;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Pagination;
class LabFrontController extends Controller
{


    /*==================================================*/
    //Home PAGE
    /*==================================================*/
    public function index(){
        $event = Event::take(3)->orderBy('id','desc')->get();
        $news = News::take(3)->orderBy('id','desc')->get();

        $blog= Blog::take(4)->orderBy('id','desc')->get();
        $project= Project::take(5)->orderBy('id','desc')->get();
        $paper= Paper::take(5)->orderBy('id','desc')->get();


        return view('labfront.index',compact('event','news','blog','project','paper'))
            ->with('title','Home | SUST CSE Data Science Lab');
    }



    /*==================================================*/
    //View all blog list, descending order
    /*==================================================*/
    public function blog()
    {
        $tag= Tag::all();
        $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
        $blog = Blog::orderBy('id', 'desc')->paginate(5);

        return view('labfront.blog', compact('blog','recent','tag'))->with('title',"Blog | Data Science Lab ");
    }



    /*==================================================*/
    //View blog details
    /*==================================================*/
    public function frontBlogDetails($meta_data)
    {
        try{
            $tag= Tag::all();
            $blog = Blog::where('meta_data','=',$meta_data)->first();
            $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
            return view('labfront.blog_details', compact('blog','recent','tag'))->with('title',"Details Blog " );
        }catch(\Exception $e){
            return "Sorry, Page not Found ";
        }

    }


    /*==================================================*/
    //Getting these Blog Associate which associate with
    // selected tag
    /*==================================================*/
    public function tagAssociateBlog($tag_name){
        try{
            $tag= Tag::all();
            $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
            $blog = Blog::where('tag','=',$tag_name)->orderBy('id', 'desc')->paginate(5);
            $bing = str_slug($tag_name, "+");;
            return view('labfront.blog', compact('blog','recent','tag','bing'))->with('title',"Tag :||: $tag_name" );

        }
        catch(\Exception $e){

            return "Sorry, Page not Found ";
        }
    }



    /*==================================================*/
    //For Search any blog with blog title or blog details
    /*==================================================*/

    public function search(){

        $search_value = \Input::get('search_value');
        try{
            $tag= Tag::all();
            $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
            $blog = Blog::where('details','like','%'.$search_value.'%')
                ->orWhere('details','like',$search_value.'%')
                ->orWhere('title','like',$search_value.'%')
                ->orWhere('title','like','%'.$search_value.'%')
                ->orderBy('id', 'desc')
                ->paginate(5);
            $bing = str_slug($search_value, "+");

            return view('labfront.blog', compact('blog','recent','tag','bing'))->with('title',"Search | $search_value");
        } catch (Exception $e) {

            return "Sorry, Page not Found ";
        }
    }


    /*==================================================*/
    //Blog Archive
    /*==================================================*/

    public function archive()
    {
        try{
            $tag= Tag::all();
            // $blog = Blog::where('meta_data','=',$meta_data)->first();
            $blog = Blog::all()->groupBy(function($date) {
                return Carbon::parse($date->created_at)->formatLocalized('%B %Y');
            });

            $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news

            return view('labfront.archive_blog', compact('blog','recent','tag'))->with('title',"Archive |  Blog");
        }catch(Exception $e){
            return "Sorry, Page not Found ";
        }

    }


    /*==================================================*/
    //Supervisor List
    /*==================================================*/

    public function supervisor(){
        $user = User::where('is_teacher', 1)
            ->where('status',1)->get();
        $news = News::take(3)->orderBy('id','desc')->get();
        return view('labfront.supervisor',compact('user','news'))->with('title','Lab Supervisors');
    }


    /*==================================================*/
    //Student List
    /*==================================================*/

    public function student(){
        $user = User::where('is_teacher', 0)
            ->where('status',1)->get();
        $news = News::take(3)->orderBy('id','desc')->get();
        return view('labfront.supervisor',compact('user','news'))->with('title','Lab Student/Developer');
    }


    /*==================================================*/
    //Allumni List
    /*==================================================*/

    public function alumni(){
        $user = User::where('is_teacher', 2)
            ->where('status',1)->get();
        $news = News::take(3)->orderBy('id','desc')->get();
        return view('labfront.alumni',compact('user','news'))->with('title','Lab Alumni');
    }


    /*==================================================*/
    //Event List
    /*==================================================*/

    public function events(){
        $event = Event::orderBy('id', 'desc')->paginate(5);
        $news = News::take(5)->orderBy('id','desc')->get();
        return view('labfront.events',compact('event','news'))->with('title','Event List');
    }

    /*==================================================*/
    //Event details
    /*==================================================*/
    public function fullEvent($meta_data)
    {
        try{
            $events = Event::where('event_meta_data','=',$meta_data)->first();
            $event = Event::take(4)->orderBy('id','desc')->get(); //recent 3 news
            return view('labfront.event_single', compact('events','event'))->with('title',"Details Event" );
        }catch(\Exception $e){
            return "Sorry, Page not Found ";
        }

    }


    /*==================================================*/
    //News List
    /*==================================================*/

    public function news(){
        $news =   News::orderBy('id', 'desc')->paginate(6);
        $event =  Event::take(5)->orderBy('id','desc')->get();
        return view('labfront.news',compact('event','news'))->with('title','News List');
    }



    /*==================================================*/
    //News details
    /*==================================================*/
    public function fullNews($meta_data)
    {
        try{
            $news = News::where('news_meta_data','=',$meta_data)->first();
            $recent= News::take(4)->orderBy('id','desc')->get(); //recent 3 news
            return view('labfront.full_news', compact('news','recent'))->with('title',"Details News" );
        }catch(\Exception $e){
            return "Sorry, Page not Found ";
        }

    }




    /*==================================================*/
    //Paper List
    /*==================================================*/

    public function paper(){
        $news =   News::orderBy('id', 'desc')->paginate(6);
        $event =  Event::take(5)->orderBy('id','desc')->get();
        return view('labfront.news',compact('event','news'))->with('title','News List');
    }


}