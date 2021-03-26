<?php

namespace App\Http\Controllers\Sell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Mail\TestMail;
use function MongoDB\BSON\toCanonicalExtendedJSON;

class SellController extends Controller {
    public function __construct()
    {

    }

    public function toggleviewSellChanged(Request $request) {
        $value = $request->input('value');

        if (isset($value))
            \Session::put('toggleViewSell', $value);

        return response()->json(array('msg'=> Session::get('toggleViewSell')), 200);
    }

    public function showSellStep1() {
        $toggleViewSellValue = false;

        $sessionValue = Session::get('toggleViewSell');

        if (isset($sessionValue))
            $toggleViewSellValue = $sessionValue;

        return view('sell.sellStep1')->with(compact('toggleViewSellValue'));
    }

    public function saveSellStep1(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('sell-step-1', $realValue);

        return redirect()->to('/sell-step-2');
    }

    public function showSellStep2() {
        $toggleViewSellValue = false;

        $sessionValue = Session::get('toggleViewSell');

        if (isset($sessionValue))
            $toggleViewSellValue = $sessionValue;

        return view('sell.sellStep2')->with(compact('toggleViewSellValue'));
    }

    public function saveSellStep2(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('sell-step-2', $realValue);

        return redirect()->to('/sell-step-3');
    }

    public function showSellStep3() {
        $toggleViewSellValue = false;

        $sessionValue = Session::get('toggleViewSell');

        if (isset($sessionValue))
            $toggleViewSellValue = $sessionValue;

        return view('sell.sellStep3')->with(compact('toggleViewSellValue'));
    }

    public function saveSellStep3(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('sell-step-3', $realValue);

        return redirect()->to('/sell-step-4');
    }

    public function showSellStep4(Request $request) {
        $toggleViewSellValue = false;

        $sessionValue = Session::get('toggleViewSell');

        if (isset($sessionValue))
            $toggleViewSellValue = $sessionValue;

        if (\Location::get($request->ip())) {
            $latitude = \Location::get($request->ip())->latitude;
            $longitude = \Location::get($request->ip())->longitude;
        } else {
            $latitude = \Location::get()->latitude;
            $longitude = \Location::get()->longitude;
        }

        return view('sell.sellStep4')->with(compact('toggleViewSellValue', 'latitude', 'longitude'));
    }

    public function saveSellStep4(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('sell-step-4', $realValue);

        return redirect()->to('/sell-step-5');
    }

    public function showSellStep5() {
        $toggleViewSellValue = false;

        $sessionValue = Session::get('toggleViewSell');

        if (isset($sessionValue))
            $toggleViewSellValue = $sessionValue;

        return view('sell.sellStep5')->with(compact('toggleViewSellValue'));
    }

    public function saveSellStep5(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('sell-step-5', $realValue);

        return redirect()->to('/sell-step-6');
    }

    public function showSellStep6() {
        $toggleViewSellValue = false;

        $sessionValue = Session::get('toggleViewSell');

        if (isset($sessionValue))
            $toggleViewSellValue = $sessionValue;

        return view('sell.sellStep6')->with(compact('toggleViewSellValue'));
    }

    public function saveSellStep6(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('sell-step-6', $realValue);

        return redirect()->to('/sell-step-7');
    }

    public function showSellStep7() {
        $toggleViewSellValue = false;

        $sessionValue = Session::get('toggleViewSell');

        if (isset($sessionValue))
            $toggleViewSellValue = $sessionValue;

        return view('sell.sellStep7')->with(compact('toggleViewSellValue'));
    }

    public function saveSellStep7(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('sell-step-7', $realValue);

        return redirect()->to('/sell-step-8');
    }

    public function showSellStep8() {
        $toggleViewSellValue = false;

        $sessionValue = Session::get('toggleViewSell');

        if (isset($sessionValue))
            $toggleViewSellValue = $sessionValue;

        return view('sell.sellStep8')->with(compact('toggleViewSellValue'));
    }

    public function saveSellStep8(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('sell-step-8', $realValue);

        return redirect()->to('/sell-step-9');
    }

    public function showSellStep9() {
        $toggleViewSellValue = false;

        $sessionValue = Session::get('toggleViewSell');

        if (isset($sessionValue))
            $toggleViewSellValue = $sessionValue;

        return view('sell.sellStep9')->with(compact('toggleViewSellValue'));
    }

    public function submitAnswers(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('sell-step-9', $realValue);

        $to_email = $value['email'];
        $to_name = $value['username'];

        $from_email = 'montanajagger1995@gmail.com';
        $from_name = 'montanajagger';

        $data = array();

        if (Session::has('sell-step-1'))
            $data["What type of property are you selling?"] = Session::get('sell-step-1');
        else
            $data["What type of property are you selling?"] = "";

        if (Session::has('sell-step-2'))
            $data["Tell us about the home you are selling.."] = Session::get('sell-step-2');
        else
            $data["Tell us about the home you are selling.."] = "";

        if (Session::has('sell-step-3'))
            $data["How much would you like to sell for?"] = Session::get('sell-step-3');
        else
            $data["How much would you like to sell for?"] = "";

        if (Session::has('sell-step-4'))
            $data["Where is your property located?"] = Session::get('sell-step-4');
        else
            $data["Where is your property located?"] = "";

        if (Session::has('sell-step-5'))
            $data["What features does your home have?"] = Session::get('sell-step-5');
        else
            $data["What features does your home have?"] = "";

        if (Session::has('sell-step-6'))
            $data["Laundry"] = Session::get('sell-step-6');
        else
            $data["Laundry"] = "";

        if (Session::has('sell-step-7'))
            $data["Tell us about the neighborhood"] = Session::get('sell-step-7');
        else
            $data["Tell us about the neighborhood"] = "";

        if (Session::has('sell-step-8'))
            $data["How soon do you need to sell?"] = Session::get('sell-step-8');
        else
            $data["How soon do you need to sell?"] = "";

        if (Session::has('sell-step-9'))
            $data["userInfo"] = Session::get("sell-step-9");
        else
            return redirect()->to('/sell-step-9');

        $data['type'] = "Sell";

        $mailData = array("title"=>"Hawk->Sell", "body" => $data);
        \Mail::send("emails.mail", $mailData, function($message) use ($to_name, $to_email, $from_name, $from_email) {
            $message->to($to_email, $to_name)->subject("HawK->Sell");
            $message->from($from_email, $from_name);
        });

        return redirect()->to('/');
    }
}
