<?php

namespace App\Http\Controllers\Invest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Mail\TestMail;
use function MongoDB\BSON\toCanonicalExtendedJSON;

class InvestController extends Controller {
    public function __construct()
    {

    }

    public function toggleviewInvestChanged(Request $request) {
        $value = $request->input('value');

        if (isset($value))
            \Session::put('toggleViewInvest', $value);

        return response()->json(array('msg'=> Session::get('toggleViewInvest')), 200);
    }

    public function showInvestStep1() {
        $toggleViewInvestValue = false;

        $sessionValue = Session::get('toggleViewInvest');

        if (isset($sessionValue))
            $toggleViewInvestValue = $sessionValue;

        return view('invest.investStep1')->with(compact('toggleViewInvestValue'));
    }

    public function saveInvestStep1(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('invest-step-1', $realValue);

        return redirect()->to('/invest-step-2');
    }

    public function showInvestStep2() {
        $toggleViewInvestValue = false;

        $sessionValue = Session::get('toggleViewInvest');

        if (isset($sessionValue))
            $toggleViewInvestValue = $sessionValue;

        return view('invest.investStep2')->with(compact('toggleViewInvestValue'));
    }

    public function saveInvestStep2(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('invest-step-2', $realValue);

        return redirect()->to('/invest-step-3');
    }

    public function showInvestStep3() {
        $toggleViewInvestValue = false;

        $sessionValue = Session::get('toggleViewInvest');

        if (isset($sessionValue))
            $toggleViewInvestValue = $sessionValue;

        return view('invest.investStep3')->with(compact('toggleViewInvestValue'));
    }

    public function saveInvestStep3(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('invest-step-3', $realValue);

        return redirect()->to('/invest-step-4');
    }

    public function showInvestStep4() {
        $toggleViewInvestValue = false;

        $sessionValue = Session::get('toggleViewInvest');

        if (isset($sessionValue))
            $toggleViewInvestValue = $sessionValue;

        return view('invest.investStep4')->with(compact('toggleViewInvestValue'));
    }

    public function saveInvestStep4(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('invest-step-4', $realValue);

        return redirect()->to('/invest-step-5');
    }

    public function showInvestStep5() {
        $toggleViewInvestValue = false;

        $sessionValue = Session::get('toggleViewInvest');

        if (isset($sessionValue))
            $toggleViewInvestValue = $sessionValue;

        return view('invest.investStep5')->with(compact('toggleViewInvestValue'));
    }

    public function saveInvestStep5(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('invest-step-5', $realValue);

        return redirect()->to('/invest-step-6');
    }

    public function showInvestStep6(Request $request) {
        $toggleViewInvestValue = false;

        $sessionValue = Session::get('toggleViewInvest');

        if (isset($sessionValue))
            $toggleViewInvestValue = $sessionValue;

        if (\Location::get($request->ip())) {
            $latitude = \Location::get($request->ip())->latitude;
            $longitude = \Location::get($request->ip())->longitude;
        } else {
            $latitude = \Location::get()->latitude;
            $longitude = \Location::get()->longitude;
        }

        return view('invest.investStep6')->with(compact('toggleViewInvestValue', 'latitude', 'longitude'));
    }

    public function saveInvestStep6(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('invest-step-6', $realValue);

        return redirect()->to('/invest-step-7');
    }

    public function showInvestStep7() {
        $toggleViewInvestValue = false;

        $sessionValue = Session::get('toggleViewInvest');

        if (isset($sessionValue))
            $toggleViewInvestValue = $sessionValue;

        return view('invest.investStep7')->with(compact('toggleViewInvestValue'));
    }

    public function saveInvestStep7(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('invest-step-7', $realValue);

        return redirect()->to('/invest-step-8');
    }

    public function showInvestStep8() {
        $toggleViewInvestValue = false;

        $sessionValue = Session::get('toggleViewInvest');

        if (isset($sessionValue))
            $toggleViewInvestValue = $sessionValue;

        return view('invest.investStep8')->with(compact('toggleViewInvestValue'));
    }

    public function saveInvestStep8(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('invest-step-8', $realValue);

        return redirect()->to('/invest-step-9');
    }

    public function showInvestStep9() {
        $toggleViewInvestValue = false;

        $sessionValue = Session::get('toggleViewInvest');

        if (isset($sessionValue))
            $toggleViewInvestValue = $sessionValue;

        return view('invest.investStep9')->with(compact('toggleViewInvestValue'));
    }

    public function saveInvestStep9(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('invest-step-9', $realValue);

        return redirect()->to('/invest-step-10');
    }

    public function showInvestStep10() {
        $toggleViewInvestValue = false;

        $sessionValue = Session::get('toggleViewInvest');

        if (isset($sessionValue))
            $toggleViewInvestValue = $sessionValue;

        return view('invest.investStep10')->with(compact('toggleViewInvestValue'));
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
            \Session::put('invest-step-10', $realValue);

        $to_email = $value['email'];
        $to_name = $value['username'];

        $from_email = 'montanajagger1995@gmail.com';
        $from_name = 'montanajagger';

        $data = array();

        if (Session::has('invest-step-1'))
            $data["What type of property are you looking for?"] = Session::get('invest-step-1');
        else
            $data["What type of property are you looking for?"] = "";

        if (Session::has('invest-step-2'))
            $data["Bedrooms / Bathrooms per unit"] = Session::get('invest-step-2');
        else
            $data["Bedrooms / Bathrooms per unit"] = "";

        if (Session::has('invest-step-3'))
            $data["What search criteria are you interested in?"] = Session::get('invest-step-3');
        else
            $data["What search criteria are you interested in?"] = "";

        if (Session::has('invest-step-4'))
            $data["What are you looking to pay?"] = Session::get('invest-step-4');
        else
            $data["What are you looking to pay?"] = "";

        if (Session::has('invest-step-5'))
            $data["Minimum Cap Rate"] = Session::get('invest-step-5');
        else
            $data["Minimum Cap Rate"] = "";

        if (Session::has('invest-step-6'))
            $data["What locations are you interested in?"] = Session::get('invest-step-6');
        else
            $data["What locations are you interested in?"] = "";

        if (Session::has('invest-step-7'))
            $data["Max Square Feet per unit"] = Session::get('invest-step-7');
        else
            $data["Max Square Feet per unit"] = "";

        if (Session::has('invest-step-8'))
            $data["Year Built"] = Session::get('invest-step-8');
        else
            $data["Year Built"] = "";

        if (Session::has('invest-step-9'))
            $data["Do you want to avoid properties with any of these features"] = Session::get('invest-step-9');
        else
            $data["Do you want to avoid properties with any of these features"] = "";

        if (Session::has('invest-step-10'))
            $data["userInfo"] = Session::get("invest-step-10");
        else
            return redirect()->to('/invest-step-10');

        $data['type'] = "Invest";

        $mailData = array("title"=>"Hawk->Invest", "body" => $data);
        \Mail::send("emails.mail", $mailData, function($message) use ($to_name, $to_email, $from_name, $from_email) {
            $message->to($to_email, $to_name)->subject("HawK->Invest");
            $message->from($from_email, $from_name);
        });

        return redirect()->to('/');
    }
}
