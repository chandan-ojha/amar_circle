<?php

namespace App\Http\Controllers;

use App\About_us;
use App\Contact_us;
use App\Entertainment;
use App\FAQ;
use App\Logo;
use App\Message;
use App\Offerpackage;
use App\Our_team;
use App\Package;
use App\Services;
use App\Slider;
use App\Social_media;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $entertainments = Entertainment::all();
        $offer = Offerpackage::all();
        $packages = Package::all();
        $logos = Logo::all();
        $services= Services::all();
        $abouts = About_us::all();
        $contacts = Contact_us::all();
        $Social_medias = Social_media::all();
        $sliders = Slider::all();
        return view('welcome', compact('logos', 'offer', 'packages', 'entertainments','services','abouts','contacts','Social_medias','sliders'));
    }

    public function package()
    {
        $logos = Logo::all();
        $entertainments = Entertainment::all();
        $Social_medias = Social_media::all();
        $offer = Offerpackage::all();
        $packages = Package::all();
        $abouts = About_us::all();
        return view('package', compact('packages', 'offer','abouts','logos','entertainments','Social_medias'));
    }

    public function payment()
    {
        $logos = Logo::all();
        $entertainments = Entertainment::all();
        $Social_medias = Social_media::all();
        return view('payment', compact('logos','entertainments','Social_medias'));
    }

    public function team()
    {
        $logos = Logo::all();
        $entertainments = Entertainment::all();
        $Social_medias = Social_media::all();
        $team_members = Our_team::all();
        return view('team', compact('team_members','logos','entertainments','Social_medias'));
    }

    public function contactus()
    {
        $logos = Logo::all();
        $entertainments = Entertainment::all();
        $Social_medias = Social_media::all();
        $contacts = Contact_us::all();
        return view('contact_us', compact('contacts','logos','entertainments','Social_medias'));

    }

    public function message()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required']);
        $values = request(['name', 'email', 'phone', 'subject', 'message']);
        Message::create($values);
        return redirect()->to('/contactus');


    }

    public function aboutus()
    {
        $logos = Logo::all();
        $entertainments = Entertainment::all();
        $Social_medias = Social_media::all();
        $abouts = About_us::all();
        $faqs=FAQ::all();
        return view('about_us', compact('abouts', 'faqs','logos','entertainments','Social_medias'));
    }

    public function services()
    {
        $logos = Logo::all();
        $entertainments = Entertainment::all();
        $Social_medias = Social_media::all();
        $services= Services::all();
        return view('services',compact('services','logos','entertainments','Social_medias'));
    }

}
