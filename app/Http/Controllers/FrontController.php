<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Faq;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\ManagingDirector;
use App\Models\RecruitmentProcess;
use App\Models\ServiceCategory;
use App\Models\Setting;
use App\Models\Service;
use App\Mail\ContactDetail;
use App\Models\HomePage;
use App\Models\Slider;

use App\Models\Subsidiary;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\SectionElement;
use App\Models\Page;
use App\Models\Client;
use App\Models\PageSection;
use App\Models\SectionGallery;
use App\Notifications\NewCareerNotification;
use App\Notifications\NewServiceNotification;
use App\Notifications\OtherNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use CountryState;


class FrontController extends Controller
{
    protected $contact = null;
    protected $setting = null;
    protected $blog = null;
    protected $bcategory = null;
    protected $faq = null;
    protected $service = null;
    protected $pojectPlan = null;
    protected $customer_package = null;
    protected $career = null;
    protected $apply_job = null;
    protected $our_work = null;
    protected $request_quote = null;
    protected $home_page = null;
    protected $page = null;
    protected $pagesection = null;
    protected $client = null;
    protected $slider = null;


    public function __construct(Slider $slider,HomePage $home_page,Client $client,PageSection $pagesection,Page $page,Service $service,Setting $setting,BlogCategory $bcategory,Blog $blog)
    {
        $this->setting = $setting;
        $this->bcategory = $bcategory;
        $this->blog = $blog;
        $this->service = $service;
        $this->page = $page;
        $this->pagesection = $pagesection;
        $this->client = $client;
        $this->slider = $slider;
        $this->home_page = $home_page;
    }



    public function index()
    {
        $clients            = $this->client->orderBy('created_at', 'asc')->get();
        $latestServices     = $this->service->orderBy('order', 'asc')->take(5)->get();
        $countries          = CountryState::getCountries();
        $sliders            = $this->slider->where('status','active')->orderBy('created_at', 'asc')->get();
        $homepage_info      = $this->home_page->first();
        $testimonials       = Testimonial::orderBy('created_at', 'asc')->get();
        $latestPosts        = $this->blog->inRandomOrder()->take(3)->get();
        $servicecategory    = ServiceCategory::inRandomOrder()->take(6)->get();
        $recruitments       = RecruitmentProcess::all();
        $director           = ManagingDirector::orderBy('order', 'asc')->get();
        $subsidiaries       = Subsidiary::orderBy('created_at', 'asc')->get();
        $today              = date('Y-m-d');
        $latestJobs         = Job::orderBy('created_at', 'DESC')->where('start_date','<=',$today)->take(3)->get();
        $recuruitment_index = [3,7,11,15];
        $legal_data         = get_legal_documents();

        return view('welcome',compact('director','legal_data','subsidiaries','today','latestJobs','clients','recruitments','servicecategory','testimonials','clients','latestPosts','latestServices','countries','homepage_info','sliders','recuruitment_index'));
    }


    public function privacy()
    {
        $page_detail = $this->page->with('sections')->where('slug','privacy-policy')->where('status','active')->first();
        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
        if (!$page_section) {
            return abort(404);
        }
        $sorted_sections        = array();
        $header_descp_elements = "";


        foreach ($page_section as $section){
            $sorted_sections[$section->id] = $section->section_slug;
            if ($section->section_slug == 'simple_header_and_description'){
                $header_descp_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }

        }
        return view('frontend.pages.privacy',compact('header_descp_elements'));
    }

    public function terms()
    {

        $page_detail = $this->page->with('sections')->where('slug','terms-condition')->where('status','active')->first();
        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
        if (!$page_section) {
            return abort(404);
        }
        $sorted_sections        = array();
        $header_descp_elements = "";


        foreach ($page_section as $section){
            $sorted_sections[$section->id] = $section->section_slug;
            if ($section->section_slug == 'simple_header_and_description'){
                $header_descp_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }

        }
        return view('frontend.pages.term',compact('header_descp_elements'));
    }




    public function faq()
    {
        $page_detail = $this->page->with('sections')->where('slug','faq')->where('status','active')->first();
        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
        if (!$page_section) {
            return abort(404);
        }
        $sorted_sections        = array();
        $accordian2_elements = "";
        $list_2        = "";


        foreach ($page_section as $section){
            $sorted_sections[$section->id] = $section->section_slug;
            if ($section->section_slug == 'accordion_section_2'){
                $list_2 = $section->list_number_2;
                $accordian2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }

        }
        return view('frontend.pages.faq',compact('list_2','accordian2_elements'));
    }


    public function page($page)
    {
        $page_detail = $this->page->with('sections')->where('slug', $page)->where('status','active')->first();

        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
        if (!$page_section) {
            return abort(404);
        }
        $sections      = array();

        $list_2        = "";
        $list_3        = "";
        $process_num   = "";
        $basic_elements = "";
        $map_descp = "";
        $call1_elements = "";
        $call2_elements = "";
        $bgimage_elements = "";
        $flash_elements = "";
        $header_descp_elements = "";
        $video_descp_elements = "";
        $gallery_elements = "";
        $location_map = "";
        $gallery2_elements = "";
        $contact_info_elements = "";
        $accordian1_elements = "";
        $accordian2_elements = "";
        $slider_list_elements = "";
        $icon_title_elements = "";
        $process_elements = "";
        $heading            = "";
        $subheading         = "";
        foreach ($page_section as $section){
            $sections[$section->id] = $section->section_slug;
            if($section->section_slug == 'basic_section'){
                $basic_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            } else if($section->section_slug == 'map_and_description'){
                $map_descp = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'call_to_action_1'){
                $call1_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'background_image_section'){
                $bgimage_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'flash_cards'){
                $flash_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'simple_header_and_description'){
                $header_descp_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'accordion_section_2'){
                $list_2 = $section->list_number_2;
                $accordian2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'gallery_section'){
                $gallery_elements = SectionGallery::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
                $heading =$section->gallery_heading;
                $subheading = $section->gallery_subheading;
            }
            else if ($section->section_slug == 'gallery_section_2'){
                $gallery2_elements = SectionGallery::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'slider_list'){
                $list_3      = $section->list_number_3;
                $slider_list_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }

            else if ($section->section_slug == 'small_box_description'){
                $process_num = $section->list_number_3;
                $process_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
        }

        return view('frontend.pages.dynamic_page',compact( 'page_detail','heading','subheading','sections','process_num','process_elements','map_descp','icon_title_elements','location_map','video_descp_elements','list_2','list_3','basic_elements','call1_elements','gallery2_elements','bgimage_elements','call2_elements','flash_elements','gallery_elements','header_descp_elements','accordian1_elements','accordian2_elements','slider_list_elements','contact_info_elements'));

    }

    public function sliderSingle($slug){

        $singleSlider = SectionElement::with('section')->where('subheading', $slug)->first();
        if (!$singleSlider) {
            return abort(404);
        }
        $slider_lists = SectionElement::with('section')->where('page_section_id', @$singleSlider->page_section_id)->get();


        return view('frontend.pages.sliderlist.single',compact('singleSlider','slider_lists'));
    }


    public function work(){
        $our_works = $this->our_work->get();
        return view('frontend.pages.work',compact('our_works'));
    }


    public function blogs(){
        $bcategories = $this->bcategory->withCount('blogs')->having('blogs_count', '>', 0)->get();
        $allPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->paginate(4);
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();

        return view('frontend.pages.blogs.index',compact('allPosts','latestPosts','bcategories'));
    }


    public function blogSingle($slug){

        $singleBlog = $this->blog->where('slug', $slug)->first();
        if (!$singleBlog) {
            return abort(404);
        }
        $catid = $singleBlog->blog_category_id;
        $bcategories = $this->bcategory->withCount('blogs')->having('blogs_count', '>', 0)->get();
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();
        return view('frontend.pages.blogs.single',compact('singleBlog','bcategories','latestPosts'));
    }

    public function service(){
        $allservices = $this->service->paginate(6);

        $latestServices = $this->service->orderBy('created_at', 'DESC')->take(4)->get();

        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();

        return view('frontend.pages.services.index',compact('allservices','latestPosts','latestServices'));
    }


    public function contact()
    {
        return view('frontend.pages.contact');

    }




    public function contactStore(Request $request)
    {
        $theme_data = Setting::first();
            $data = array(
                'fullname'        =>$request->input('name'),
                'message'        =>$request->input('message'),
                'email'        =>$request->input('email'),
                'subject'        =>$request->input('subject'),
                'customer_phone'        =>$request->input('phone'),
                'address'        =>ucwords($theme_data->address),
                'site_email'        =>ucwords($theme_data->email),
                'site_name'        =>ucwords($theme_data->website_name),
                'phone'        =>ucwords($theme_data->phone),
                'logo'        =>ucwords($theme_data->logo),
            );
//        Mail::to('anmolkoirala1313@gmail.com')->send(new ContactDetail($data));

//            if($theme_data->email){
//                Mail::to($theme_data->email)->send(new ContactDetail($data));
//            }
            $status ='success';
            return response()->json($status);
    }
    public function careerSingle($slug){

        $singleCareer = $this->career->where('slug', $slug)->first();
        if (!$singleCareer) {
            return abort(404);
        }

        return view('frontend.pages.careers.single',compact('singleCareer'));
    }

    public function package(){
        $allpackages = $this->pojectPlan->get();
        return view('frontend.pages.package',compact('allpackages'));
    }


    public function serviceSingle($slug){

        $singleService = $this->service->where('slug', $slug)->first();
        if (!$singleService) {
            return abort(404);
        }
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();
        $latestServices = $this->service->orderBy('created_at', 'DESC')->take(5)->get();

        return view('frontend.pages.services.single',compact('singleService','latestPosts','latestServices'));
    }

    public function blogCategories($slug){

        $bcategory = $this->bcategory->where('slug', $slug)->first();
        $catid = $bcategory->id;
        $cat_name = $bcategory->name;
        $allPosts = $this->blog->where('blog_category_id', $catid)->where('status','publish')->orderBy('created_at', 'DESC')->paginate(6);
        $bcategories = $this->bcategory->withCount('blogs')->having('blogs_count', '>', 0)->get();
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();
        return view('frontend.pages.blogs.category',compact('allPosts','cat_name','latestPosts','bcategories'));
    }



    public function searchBlog(Request $request)
    {
        $query = $request->s;
        $allPosts = $this->blog->where('title', 'LIKE', '%' . $query . '%')->where('status','publish')->orderBy('title', 'asc')->paginate(6);
        $bcategories = $this->bcategory->withCount('blogs')->having('blogs_count', '>', 0)->get();
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();

        return view('frontend.pages.blogs.search',compact('allPosts','query','latestPosts','bcategories'));
    }

    public function jobs(){
        $today      = date('Y-m-d');
        $alljobs    = Job::orderBy('created_at', 'DESC')->where('start_date','<=',$today)->paginate(9);
        $category   = JobCategory::all();
        $latestJobs = Job::orderBy('created_at', 'DESC')->where('start_date','<=',$today)->take(3)->get();

        return view('frontend.pages.jobs.index',compact('today','alljobs','latestJobs','category'));
    }


    public function jobSingle($slug){

        $singleJob = Job::where('slug', $slug)->first();
        if (!$singleJob) {
            return abort(404);
        }

        $today = date('Y-m-d');
        $countries  = CountryState::getCountries();
        $latestJobs = Job::orderBy('created_at', 'DESC')->where('start_date','<=',$today)->take(3)->get();

        return view('frontend.pages.jobs.single',compact('today','countries','singleJob','latestJobs'));
    }

    public function searchJob(Request $request)
    {
        $today = date('Y-m-d');
        $title = $request->s;
        $alljobs = Job::where('name', 'LIKE', '%' . $title . '%')->orderBy('name', 'asc')
            ->where('start_date','<=',$today)
            ->paginate(6);
        $latestJobs = Job::orderBy('created_at', 'DESC')->where('start_date','<=',$today)->take(3)->get();

        return view('frontend.pages.jobs.search',compact('today','alljobs','title','latestJobs'));
    }

    public function clients()
    {
        $clients = Client::orderBy('country', 'asc')->get();
        $countries = CountryState::getCountries();
        $country = [];

        foreach ($clients as $client){
            if (!empty($client->country)) {
                foreach ($countries as $key => $value) {
                    if ($client->country == $key) {
                        $country[$key] = $value;
                    }
                }
            }
        }

        return view('frontend.pages.clients',compact('clients','countries','country'));
    }

    public function testimonial(){
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->paginate(6);
        return view('frontend.pages.testimonial',compact('testimonials'));
    }

    public function category(){
        $service_categories = ServiceCategory::orderBy('name', 'asc')->paginate(6);
        return view('frontend.pages.category.index',compact('service_categories'));
    }

    public function categorySingle($slug){
        $singleService      = ServiceCategory::where('slug', $slug)->first();
        $service_categories = ServiceCategory::orderBy('name', 'asc')->get();
        $latestPosts        = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(2)->get();
        $next_record        = ServiceCategory::where('id', '>', $singleService->id)->orderBy('id')->first();
        $previous_record    = ServiceCategory::where('id', '<', $singleService->id)->orderBy('id')->first();

        return view('frontend.pages.category.single',compact('singleService','service_categories','latestPosts','previous_record','next_record'));
    }

    public function team(){
        $teams = Team::orderBy('order', 'asc')->paginate(12);
        return view('frontend.pages.team',compact('teams'));
    }


    public function album(){
        $albums = Album::with('gallery')->has('gallery')->get();
        return view('frontend.pages.album',compact('albums'));
    }

    public function albumgallery($slug){
        $singleAlbum = Album::where('slug', $slug)->with('gallery')->first();
        if (!$singleAlbum) {
            return abort(404);
        }
        return view('frontend.pages.album_gallery',compact('singleAlbum'));
    }



}
