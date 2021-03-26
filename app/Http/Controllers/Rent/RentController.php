<?php

namespace App\Http\Controllers\Rent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Mail\TestMail;
use function MongoDB\BSON\toCanonicalExtendedJSON;

class RentController extends Controller {

    public function __construct()
    {

    }

    // method to handle toggle view change
    public function toggleViewRentChanged(Request $request) {
        $value = $request->input('value');

        if (isset($value))
            \Session::put('toggleViewRent', $value);

        return response()->json(array('msg'=> Session::get('toggleViewRent')), 200);
    }

    // show and save method for rent-step-1
    public function showRentStep1() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep1')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep1(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-1', $realValue);

        return redirect()->to('/rent-step-2');
    }
    // ==============================================

    // show and save method for rent-step-2
    public function showRentStep2() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep2')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep2(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-2', $realValue);

        return redirect()->to('/rent-step-3');
    }

    public function showRentStep3(Request $request) {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep3')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep3(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-3', $realValue);

        return redirect()->to('/rent-step-4');
    }

    public function showRentStep4(Request $request) {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        if (\Location::get($request->ip())) {
            $latitude = \Location::get($request->ip())->latitude;
            $longitude = \Location::get($request->ip())->longitude;
        } else {
            $latitude = \Location::get()->latitude;
            $longitude = \Location::get()->longitude;
        }

        return view('rent.rentStep4')->with(compact('toggleViewRentValue', 'latitude', 'longitude'));
    }

    public function saveRentStep4(Request $request) {
        return redirect()->to('/rent-step-5');
    }

    public function showRentStep5() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep5')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep5(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-5', $realValue);

        return redirect()->to('/rent-step-6');
    }

    public function showRentStep6() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep6')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep6(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-6', $realValue);

        return redirect()->to('/rent-step-7');
    }

    public function showRentStep7() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep7')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep7(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-7', $realValue);

        return redirect()->to('/rent-step-8');
    }

    public function showRentStep8() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep8')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep8(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-8', $realValue);

        return redirect()->to('/rent-step-9');
    }

    public function showRentStep9() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep9')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep9(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-9', $realValue);

        return redirect()->to('/rent-step-10');
    }

    public function showRentStep10() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep10')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep10(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-10', $realValue);

        return redirect()->to('/rent-step-11');
    }

    public function showRentStep11() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep11')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep11(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-11', $realValue);

        return redirect()->to('/rent-step-12');
    }

    public function showRentStep12() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep12')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep12(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-12', $realValue);

        return redirect()->to('/rent-step-13');
    }

    public function showRentStep13() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep13')->with(compact('toggleViewRentValue'));
    }

    public function saveRentStep13(Request $request) {
        $value = $request->input();
        $realValue = array();

        $realValue = array_filter($value, function ($key) {
            if ($key != "_token")
                return true;
            else
                return false;

        }, ARRAY_FILTER_USE_KEY);

        if (count($realValue) > 0)
            \Session::put('rent-step-13', $realValue);

        return redirect()->to('/rent-step-14');
    }

    public function showRentStep14() {
        $toggleViewRentValue = false;

        $sessionValue = Session::get('toggleViewRent');

        if (isset($sessionValue))
            $toggleViewRentValue = $sessionValue;

        return view('rent.rentStep14')->with(compact('toggleViewRentValue'));
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
            \Session::put('rent-step-14', $realValue);

        $to_email = $value['email'];
        $to_name = $value['username'];

        $from_email = 'montanajagger1995@gmail.com';
        $from_name = 'montanajagger';

        $data = array();
        if (Session::has('rent-step-1'))
            $data["What type of property are you looking for?"] = Session::get('rent-step-1');
        else
            $data["What type of property are you looking for?"] = "";

        if (Session::has('rent-step-2'))
            $data["How many bedrooms are you looking for?"] = Session::get('rent-step-2');
        else
            $data["What type of property are you looking for?"] = "";

        if (Session::has('rent-step-3'))
            $data["What are you looking to pay?"] = Session::get('rent-step-3');
        else
            $data["What are you looking to pay?"] = "";

        if (Session::has('rent-step-4'))
            $data["What side of towns are you looking on?"] = Session::get('rent-step-4');
        else
            $data["What side of towns are you looking on?"] = "";

        if (Session::has('rent-step-5'))
            $data["What neighborhood amenities are important?"] = Session::get('rent-step-5');
        else
            $data["What neighborhood amenities are important?"] = "";

        if (Session::has('rent-step-6'))
            $data["Pets?"] = Session::get('rent-step-6');
        else
            $data["Pets?"] = "";

        if (Session::has('rent-step-7'))
            $data["Floor Preference / # of Levels"] = Session::get('rent-step-7');
        else
            $data["Floor Preference / # of Levels"] = "";

        if (Session::has('rent-step-8'))
            $data["What household features are you important to you?"] = Session::get('rent-step-8');
        else
            $data["What household features are you important to you?"] = "";

        if (Session::has('rent-step-9'))
            $data["Laundry"] = Session::get('rent-step-9');
        else
            $data["Laundry"] = "";

        if (Session::has('rent-step-10'))
            $data["What matters most?"] = Session::get('rent-step-10');
        else
            $data["What matters most?"] = "";

        if (Session::has('rent-step-11'))
            $data["When do you want to move in?"] = Session::get('rent-step-11');
        else
            $data["When do you want to move in?"] = "";

        if (Session::has('rent-step-12'))
            $data["How long are you looking to sign a lease for?"] = Session::get('rent-step-12');
        else
            $data["How long are you looking to sign a lease for?"] = "";

        if (Session::has('rent-step-13'))
            $data["Are there any known issues with your Income, Credit, Criminal, or Rental History?"] = Session::get('rent-step-13');
        else
            $data["Are there any known issues with your Income, Credit, Criminal, or Rental History?"] = "";

        if (Session::has('rent-step-14'))
            $data["userInfo"] = Session::get("rent-step-14");
        else
            return redirect()->to('/rent-step-14');

        $data['type'] = 'Rent';

        $mailData = array("title"=>"Hawk->Rent", "body" => $data);
        \Mail::send("emails.mail", $mailData, function($message) use ($to_name, $to_email, $from_name, $from_email) {
            $message->to($to_email, $to_name)->subject("HawK->Rent");
            $message->from($from_email, $from_name);
        });

        return redirect()->to('/');
    }
}
