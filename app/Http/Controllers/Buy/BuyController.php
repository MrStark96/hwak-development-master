<?php

namespace App\Http\Controllers\Buy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Mail\TestMail;
use function MongoDB\BSON\toCanonicalExtendedJSON;
use Stevebauman\Location\Location;
use Stevebauman\Location\Position;
use Stevebauman\Location\Drivers\Driver;

class BuyController extends Controller {
    public function __construct()
    {

    }

    public function toggleviewBuyChanged(Request $request) {
        $value = $request->input('value');

        if (isset($value))
            \Session::put('toggleViewBuy', $value);

        return response()->json(array('msg'=> Session::get('toggleViewBuy')), 200);
    }

    public function showBuyStep1() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStep1')->with(compact('toggleViewBuyValue'));
    }

    public function saveBuyStep1(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-1', $realValue);

        return redirect()->to('/buy-step-2');
    }

    public function showBuyStep2() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStep2')->with(compact('toggleViewBuyValue'));
    }

    public function saveBuyStep2(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-2', $realValue);

        return redirect()->to('/buy-step-3');
    }

    public function showBuyStep3() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStep3')->with(compact('toggleViewBuyValue'));
    }

    public function saveBuyStep3(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-3', $realValue);

        return redirect()->to('/buy-step-4');
    }

    public function showBuyStep4() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStep4')->with(compact('toggleViewBuyValue'));
    }

    public function saveBuyStep4(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-4', $realValue);

        return redirect()->to('/buy-step-5');
    }

    public function showBuyStep5(Request $request) {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        if (\Location::get($request->ip())) {
            $latitude = \Location::get($request->ip())->latitude;
            $longitude = \Location::get($request->ip())->longitude;
        } else {
            $latitude = \Location::get()->latitude;
            $longitude = \Location::get()->longitude;
        }

        return view('buy.buyStep5')->with(compact('toggleViewBuyValue', 'latitude', 'longitude'));
    }

    public function saveBuyStep5(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-5', $realValue);

        return redirect()->to('/buy-step-added-6');
    }

    public function showBuyStepAdded6() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStepAdded')->with(compact('toggleViewBuyValue'));
    }

    public function saveBuyStepAdded6(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-added-6', $realValue);

        return redirect()->to('/buy-step-6');
    }

    public function showBuyStep6() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStep6')->with(compact('toggleViewBuyValue'));
    }

    public function saveBuyStep6(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-6', $realValue);

        return redirect()->to('/buy-step-7');
    }

    public function showBuyStep7() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStep7')->with(compact('toggleViewBuyValue'));
    }

    public function saveBuyStep7(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-7', $realValue);

        return redirect()->to('/buy-step-8');
    }

    public function showBuyStep8() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStep8')->with(compact('toggleViewBuyValue'));
    }

    public function saveBuyStep8(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-8', $realValue);

        return redirect()->to('/buy-step-9');
    }

    public function showBuyStep9() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStep9')->with(compact('toggleViewBuyValue'));
    }

    public function saveBuyStep9(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-9', $realValue);

        return redirect()->to('/buy-step-10');
    }

    public function showBuyStep10() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStep10')->with(compact('toggleViewBuyValue'));
    }

    public function saveBuyStep10(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('buy-step-10', $realValue);

        return redirect()->to('/buy-step-11');
    }

    public function showBuyStep11() {
        $toggleViewBuyValue = false;

        $sessionValue = Session::get('toggleViewBuy');

        if (isset($sessionValue))
            $toggleViewBuyValue = $sessionValue;

        return view('buy.buyStep11')->with(compact('toggleViewBuyValue'));
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
            \Session::put('buy-step-11', $realValue);

        $to_email = $value['email'];
        $to_name = $value['username'];

        $from_email = 'montanajagger1995@gmail.com';
        $from_name = 'montanajagger';

        $data = array();

        if (Session::has('buy-step-1'))
            $data["What are you looking for?"] = Session::get('buy-step-1');
        else
            $data["What are you looking for?"] = "";

        if (Session::has('buy-step-2'))
            $data["Bedrooms / Bathrooms per unit"] = Session::get('buy-step-2');
        else
            $data["What type of property are you looking for?"] = "";

        if (Session::has('buy-step-3'))
            $data["What are you looking to pay?"] = Session::get('buy-step-3');
        else
            $data["What are you looking to pay?"] = "";

        if (Session::has('buy-step-4'))
            $data["What features does your home have?"] = Session::get('buy-step-4');
        else
            $data["What features does your home have?"] = "";

        if (Session::has('buy-step-5'))
            $data["Where are you looking to move?"] = Session::get('buy-step-5');
        else
            $data["Where are you looking to move?"] = "";

        if (Session::has('buy-step-6'))
            $data["Floor Preference / # of Levels"] = Session::get('buy-step-6');
        else
            $data["Floor Preference / # of Levels"] = "";

        if (Session::has('buy-step-7'))
            $data["How old of a home do you prefer?"] = Session::get('buy-step-7');
        else
            $data["How old of a home do you prefer?"] = "";

        if (Session::has('buy-step-8'))
            $data["What neighborhood amenities are you into?"] = Session::get('buy-step-8');
        else
            $data["What neighborhood amenities are you into?"] = "";

        if (Session::has('buy-step-9'))
            $data["What matters most?"] = Session::get('buy-step-9');
        else
            $data["What matters most?"] = "";

        if (Session::has('buy-step-10'))
            $data["When do you want to move in?"] = Session::get('buy-step-10');
        else
            $data["When do you want to move in?"] = "";

        if (Session::has('buy-step-11'))
            $data["userInfo"] = Session::get("buy-step-11");
        else
            return redirect()->to('/buy-step-11');

        $data['type'] = "Buy";

        $mailData = array("title"=>"Hawk->Buy", "body" => $data);
        \Mail::send("emails.mail", $mailData, function($message) use ($to_name, $to_email, $from_name, $from_email) {
            $message->to($to_email, $to_name)->subject("HawK->Buy");
            $message->from($from_email, $from_name);
        });

        return redirect()->to('/');
    }
}
