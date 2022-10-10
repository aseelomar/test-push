<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Albums;
use App\Models\Attachment;
use App\Models\Category;
use App\Models\ConnectUs;
use App\Models\Job;
use App\Models\MunicipalCouncilMember;
use App\Models\PeopleContactUs;
use App\Models\Poster;
use App\Models\Publication;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $lastNews = Publication::news()->orderBy('created_at', 'DESC')->take(6)->get();
        $newsSliders =Publication::news()->where('showSlider',1)->orderBy('created_at', 'DESC')->take(6)->get();
       
        $infoConnectUs = ConnectUs::first();
        $fileHierarchy = Attachment::FileHierarchy()->first();
        $posters = Poster::poster()->orderBy('created_at', 'DESC')->take(2)->get();
        $activityEvents = Publication::activityEvent()->orderBy('created_at', 'DESC')->take(6)->get();
        $bidsAdvertisings = Publication::bidsAdvertising()->orderBy('created_at', 'DESC')->take(5)->get();
        $service = Service::service()->orderBy('created_at', 'DESC')->take(6)->get();
        $videos = Attachment::video()->orderBy('created_at', 'DESC')->take(4)->get();
        $albums = Albums::albumsShowInSlider()->orderBy('created_at', 'DESC')->take(6)->get();

        $boss = MunicipalCouncilMember::boss()->orderBy('created_at', 'DESC')->first();
//       return $boss->socialMember->load('socialMedia');
        $bossVice = MunicipalCouncilMember::bossVice()->with('categoryMember')->orderBy('created_at', 'DESC')->first();

        $secretary = MunicipalCouncilMember::secretary()->with('categoryMember')->orderBy('created_at', 'DESC')->first();
        $members = MunicipalCouncilMember::member()->with('categoryMember')->orderBy('created_at', 'DESC')->take(10)->get();

        return view('site.home.main', compact(
            [
               'newsSliders', 'lastNews', 'infoConnectUs', 'fileHierarchy', 'posters', 'activityEvents', 'bidsAdvertisings', 'service', 'videos', 'albums', 'boss', 'bossVice', 'secretary', 'members'
            ]));
    }

    public function getNews()
    {
        $lastNews = Publication::where('category_id', Category::TYPE_NEWS)->orderBy('created_at', 'DESC')->take(3)->get();
        $fileHierarchy = Attachment::FileHierarchy()->first();
        $infoConnectUs = ConnectUs::first();
        $images = Attachment::image()->orderBy('created_at', 'DESC')->take(6)->get();
        $service = Service::service()->orderBy('created_at', 'DESC')->take(6)->get();
        $bidsAdvertisings = Publication::bidsAdvertising()->orderBy('created_at', 'DESC')->take(5)->get();
        $publications = Publication::news()->with('category')->orderBy('created_at', 'DESC')->paginate(10);

        return view('site.news', compact(['publications', 'lastNews', 'infoConnectUs', 'fileHierarchy', 'service', 'images', 'bidsAdvertisings']));

    }

    public function getAdsAdvertising()
    {
        $lastNews = Publication::where('category_id', Category::TYPE_NEWS)->orderBy('created_at', 'DESC')->take(3)->get();
        $fileHierarchy = Attachment::FileHierarchy()->first();
        $infoConnectUs = ConnectUs::first();

        $images = Attachment::image()->orderBy('created_at', 'DESC')->take(6)->get();
        $service = Service::service()->orderBy('created_at', 'DESC')->take(6)->get();
        $bidsAdvertisings = Publication::bidsAdvertising()->orderBy('created_at', 'DESC')->paginate(10);
        $publications = Publication::news()->with('category')->orderBy('created_at', 'DESC')->take(5)->get();

        return view('site.bisAdvertising', compact(['publications', 'lastNews', 'infoConnectUs', 'fileHierarchy', 'service', 'images', 'bidsAdvertisings']));

    }

    public function getImageAlbums()
    {
        $lastNews = Publication::where('category_id', Category::TYPE_NEWS)->orderBy('created_at', 'DESC')->take(3)->get();
        $fileHierarchy = Attachment::FileHierarchy()->first();
        $infoConnectUs = ConnectUs::first();
        $albums = Albums::where('active',true)->orderBy('created_at', 'DESC')->paginate(12);

        return view('site.imageAlbums', compact(['lastNews', 'infoConnectUs', 'fileHierarchy', 'albums']));

    }

    public function getVideos()
    {
        $lastNews = Publication::where('category_id', Category::TYPE_NEWS)->orderBy('created_at', 'DESC')->take(3)->get();
        $fileHierarchy = Attachment::FileHierarchy()->first();
        $infoConnectUs = ConnectUs::first();
        $videos = Attachment::video()->orderBy('created_at', 'DESC')->paginate(12);
        return view('site.video', compact(['lastNews', 'infoConnectUs', 'fileHierarchy', 'videos']));

    }

    public function getAboutUs()
    {
        $lastNews = Publication::where('category_id', Category::TYPE_NEWS)->orderBy('created_at', 'DESC')->take(3)->get();
        $fileHierarchy = Attachment::FileHierarchy()->first();
        $infoConnectUs = ConnectUs::first();
        $aboutUsInfo = AboutUs::first();
        return view('site.aboutUs', compact(['lastNews', 'infoConnectUs', 'fileHierarchy', 'aboutUsInfo']));

    }
    public function jobDetails($id)
    {

        $lastNews = Publication::where('category_id', Category::TYPE_NEWS)->orderBy('created_at', 'DESC')->take(3)->get();
        $fileHierarchy = Attachment::FileHierarchy()->first();
        $infoConnectUs = ConnectUs::first();
        $job = Job::findOrFail($id);

        return view('site.jobDetails', compact(['lastNews', 'infoConnectUs', 'fileHierarchy', 'job']));

    }

    public function getPlans()
    {
        $lastNews = Publication::where('category_id', Category::TYPE_NEWS)->orderBy('created_at', 'DESC')->take(3)->get();
        $fileHierarchy = Attachment::FileHierarchy()->first();
        $infoConnectUs = ConnectUs::first();
        $plans = Attachment::plan()->orderBy('created_at', 'DESC')->take(12)->get();
        return view('site.plans', compact(['lastNews', 'infoConnectUs', 'fileHierarchy', 'plans']));

    }

    public function getReports()
    {
        $lastNews = Publication::where('category_id', Category::TYPE_NEWS)->orderBy('created_at', 'DESC')->take(3)->get();
        $fileHierarchy = Attachment::FileHierarchy()->first();
        $infoConnectUs = ConnectUs::first();
        $reports = Attachment::report()->orderBy('created_at', 'DESC')->take(12)->get();
        return view('site.reports', compact(['lastNews', 'infoConnectUs', 'fileHierarchy', 'reports']));

    }

    public function getContactUs()
    {
        $lastNews = Publication::news()->orderBy('created_at', 'DESC')->take(6)->get();
        $infoConnectUs = ConnectUs::first();
        $fileHierarchy = Attachment::where('category_id', Category::TYPE_MUNICIPAL_STRUCTURE)->first();
        $service = Service::service()->orderBy('created_at', 'DESC')->take(6)->get();
        $infoConnectUs = ConnectUs::first();

        return view('site.contactUs', compact(['lastNews', 'infoConnectUs', 'fileHierarchy', 'service', 'infoConnectUs']));
    }

    public function getActivityEvent()
    {

        $lastNews = Publication::where('category_id', Category::TYPE_NEWS)->orderBy('created_at', 'DESC')->take(3)->get();
        $fileHierarchy = Attachment::FileHierarchy()->first();
        $infoConnectUs = ConnectUs::first();

        $images = Attachment::image()->orderBy('created_at', 'DESC')->take(6)->get();
        $service = Service::service()->orderBy('created_at', 'DESC')->take(6)->get();
        $activityEvents = Publication::activityEvent()->orderBy('created_at', 'DESC')->paginate(10);
        $publications = Publication::news()->with('category')->orderBy('created_at', 'DESC')->take(5)->get();

        return view('site.activityEvent', compact(['publications', 'lastNews', 'infoConnectUs', 'fileHierarchy', 'service', 'images', 'activityEvents']));

    }

    public function getPostDetails($id)
    {

        $postDetails = Publication::where('id', $id)->with('category')->first();
        $lastNews = Publication::news()->orderBy('created_at', 'DESC')->take(6)->get();
        $infoConnectUs = ConnectUs::first();
        $fileHierarchy = Attachment::where('category_id', Category::TYPE_MUNICIPAL_STRUCTURE)->first();
        $lastPublication = Publication::where('active',true)->orderBy('created_at', 'DESC')->first();
        if($postDetails== null){
            return redirect()->route('site.errorPage');
        }
        return view('site.postDetails', compact(['lastNews', 'infoConnectUs', 'fileHierarchy', 'postDetails','lastPublication']));
    }

    public function getPosterDetails($id)
    {
        $lastNews = Publication::news()->orderBy('created_at', 'DESC')->take(6)->get();
        $infoConnectUs = ConnectUs::first();
        $fileHierarchy = Attachment::where('category_id', Category::TYPE_MUNICIPAL_STRUCTURE)->first();
        $poster = Poster::findOrFail($id);
        if($poster== null){
            return redirect()->route('site.errorPage');
        }
        return view('site.showPoster', compact(['lastNews', 'infoConnectUs', 'fileHierarchy', 'poster']));

    }

    public function getService($id)
    {
        $lastNews = Publication::news()->orderBy('created_at', 'DESC')->take(6)->get();
        $infoConnectUs = ConnectUs::first();
        $fileHierarchy = Attachment::where('category_id', Category::TYPE_MUNICIPAL_STRUCTURE)->first();
        $service = Service::findOrFail($id);
        if($service== null){
            return redirect()->route('site.errorPage');
        }
        return view('site.serviceDetails', compact(['service', 'lastNews', 'infoConnectUs', 'fileHierarchy']));
    }
    public function jobs()
    {

        $lastNews = Publication::news()->orderBy('created_at', 'DESC')->take(6)->get();
        $infoConnectUs = ConnectUs::first();
        $fileHierarchy = Attachment::where('category_id', Category::TYPE_MUNICIPAL_STRUCTURE)->first();
        $jobs = Job::where('active',true)->orderBy('created_at', 'DESC')->paginate(10);
        $images = Attachment::image()->orderBy('created_at', 'DESC')->take(6)->get();
        $service = Service::service()->orderBy('created_at', 'DESC')->take(6)->get();
        $publications = Publication::news()->with('category')->orderBy('created_at', 'DESC')->take(5)->get();


       return view('site.jobs', compact(['jobs', 'publications','images','service','lastNews', 'infoConnectUs', 'fileHierarchy']));
    }

    public function peopleContact(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'phone' => 'string|required',
            'email' => 'string|required',
            'subject' => 'string|required',
            'message' => 'string|required'
            ]);


        $peopleContactInfo = new PeopleContactUs();
        $peopleContactInfo->fill($request->only($peopleContactInfo->getFillable()));
        $add = $peopleContactInfo->save();
        $status = 'تم ارسالة الرسالة بنجاح';
        if ($add) {
            return [
                'data' => $status,
                'success' => true
            ];
        }

    }

    public function getNextNews($id)
    {
        $postDetails = Publication::with('category')->where('id', '>', $id)->where('active',true)->take(1)->first();
        return redirect()->route('site.postDetails', ['id' => $postDetails->id]);
    }

    public function errorPage(){
        $lastNews = Publication::news()->orderBy('created_at', 'DESC')->take(6)->get();
        $infoConnectUs = ConnectUs::first();
        $fileHierarchy = Attachment::where('category_id', Category::TYPE_MUNICIPAL_STRUCTURE)->first();

        return view('site.errors.404', compact([ 'lastNews', 'infoConnectUs', 'fileHierarchy']));

    }

    public function showAlbumDetails($id)
    {
        $album = Albums::where('id',$id)->with('photos')->first();
      //$photo= $album->photos()->paginate(1) ;
       // $link=$album->photos()->paginate(2);
        $lastNews = Publication::news()->orderBy('created_at', 'DESC')->take(6)->get();
        $infoConnectUs = ConnectUs::first();
        $fileHierarchy = Attachment::where('category_id', Category::TYPE_MUNICIPAL_STRUCTURE)->first();

        return view('site.albumDetails', compact([ 'lastNews', 'infoConnectUs', 'fileHierarchy','album']));


    }

}
