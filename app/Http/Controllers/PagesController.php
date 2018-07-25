<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfferPage;
use App\Page;
use App\FareTrend;
use Carbon\Carbon;
use App\Enquiry;
use App\Newsletter;
use App\ContentBlock;

class PagesController extends Controller {
    public function getIndex() {
    	$date = Carbon::now()->addDays(2);
    	$seoContent = ContentBlock::where("name", "Home SEO Content")->limit(1)->first();
    	$del_bom = FareTrend::where([['org', 'DEL'], ['dest', 'BOM'], ['date', '<', $date]])
    		->orderBy('id', 'DESC')
    		->limit(1)
    		->get()
    		->first();
    	$bom_del = FareTrend::where([['org', 'BOM'], ['dest', 'DEL'], ['date', '<', $date]])
    		->orderBy('id', 'DESC')
    		->limit(1)
    		->get()
    		->first();
    	$del_goi = FareTrend::where([['org', 'DEL'], ['dest', 'GOI'], ['date', '<', $date]])
    		->orderBy('id', 'DESC')
    		->limit(1)
    		->get()
    		->first();
    	$blr_del = FareTrend::where([['org', 'BLR'], ['dest', 'DEL'], ['date', '<', $date]])
    		->orderBy('id', 'DESC')
    		->limit(1)
    		->get()
    		->first();
    	$blr_bom = FareTrend::where([['org', 'BLR'], ['dest', 'BOM'], ['date', '<', $date]])
    		->orderBy('id', 'DESC')
    		->limit(1)
    		->get()
    		->first();
    	$bom_goi = FareTrend::where([['org', 'BOM'], ['dest', 'GOI'], ['date', '<', $date]])
    		->orderBy('id', 'DESC')
    		->limit(1)
    		->get()
    		->first();
        $offers = OfferPage::where("valid_upto", ">=", Carbon::now())->get();
		return view('pages.index')
			->with('del_bom', $del_bom)
			->with('bom_del', $bom_del)
			->with('del_goi', $del_goi)
			->with('blr_del', $blr_del)
			->with('blr_bom', $blr_bom)
			->with('bom_goi', $bom_goi)
            ->with('offers', $offers)
            ->with('seo_content', $seoContent);
	}

	public function getPages($pageslug) {
		$page = Page::where('slug', $pageslug)->first();
		return view("pages.singlePage")
    		->with("page", $page);
	}

    public function postNewsLetter(Request $request) {
        $email = $request->input("email");
        $newsletter = new Newsletter;
        $newsletter->email = $email;
        $newsletter->save();
        return redirect("/")->with('status', 'Thanks for subscribing to Newsletters');
    }

	public function postContactUs(Request $request) {
        $name = $request->input("name");
        $email = $request->input("email");
        $phone = $request->input("phone");
        $message = $request->input("message");
        $enquiry = new Enquiry;
        $enquiry->name = $name;
        $enquiry->email = $email;
        $enquiry->phone = $phone;
        $enquiry->message = $message;
        $enquiry->save();
        return redirect("/contact-us")->with('status', 'Your Enquiry has been registered. Our executive will contact you soon.');
    }
}
