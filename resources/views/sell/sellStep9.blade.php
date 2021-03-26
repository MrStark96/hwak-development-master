@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec normalView sell welcomeRent" style="display: flex; background: white; height: 100%; justify-content: center; align-items: center;">
        <div class="row">
            <div class="col">
                <div class="container-fluid">
                    <div class="row  justify-content-center">
                        <h3>
                            Welcome
                        </h3>
                    </div>
                    <div class="row  justify-content-center">
                        <p>
                            We are working on your results now!
                        </p>
                    </div>
                    <div class="row justify-content-center">
                        <ul class="dot-row">
                            <li class="dot-item active"><div></div></li>
                            <li class="dot-item"><div></div></li>
                            <li class="dot-item"><div></div></li>
                            <li class="dot-item"><div></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="heroSec normalView sell" id="heroSec" style="background-image:url({{ asset('images/hawknest/rent14building.png') }}); display: none;">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <h3 style="text-align: center;">YOUR RESULTS ARE READY!</h3>
                    <br>
                    <div class="question">
                        Enter your information to see your results and get real-time updates delivered right to your inbox.
                    </div>

                    <div class="container-fluid answers">
                        <form action="/sell-step-9" method="post" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="icofont-user-alt-3 rent14Ico"></i></span>
                                        </div>
                                        <input type="text" class="form-control text-left pl-3" name="username" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" style="color: black;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="icofont-email rent14Ico"></i></span>
                                        </div>
                                        <input type="email" class="form-control text-left pl-3" name="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" style="color: black;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="icofont-phone rent14Ico"></i></span>
                                        </div>
                                        <input type="text" class="form-control text-left pl-3" name="phone" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1" style="color: black;">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline-light" type="submit" id="nextButton"><span>See My Matches</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
                            <p class="pt-2 text-muted"><small>You agree to The House Hawk’s Terms of Use & Privacy Policy and to be contacted by us or third parties. By registering, you give us your express written consent to deliver automated emails to you. Consent is not a condition of purchase. Your registration acts as your binding electronic signature.</small> </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        {{--    <div class="toggleView">--}}
        {{--        <input type="checkbox" id="toggleView">--}}
        {{--        <label for="toggleView">--}}
        {{--            <span>Animation</span>--}}
        {{--            <span>Normal</span>--}}
        {{--        </label>--}}
        {{--    </div>--}}
    </div>
@endsection

@section('footer_scripts')
    {{--    <script type="text/javascript">--}}
    {{--        let toggleViewValue = false;--}}

    {{--        toggleViewValue = {!! json_encode($toggleViewRentValue) !!};--}}
    {{--        let heroSec = document.getElementById('heroSec');--}}
    {{--        let toggleView = document.getElementById('toggleView');--}}

    {{--        if (toggleViewValue === "true") {--}}
    {{--            heroSec.classList.remove("aniView");--}}
    {{--            heroSec.classList.remove("normalView");--}}
    {{--            heroSec.classList.add("normalView");--}}
    {{--            toggleView.checked = true;--}}
    {{--        } else {--}}
    {{--            heroSec.classList.remove("aniView");--}}
    {{--            heroSec.classList.remove("normalView");--}}
    {{--            heroSec.classList.add("aniView");--}}
    {{--            toggleView.checked = false;--}}
    {{--        }--}}
    {{--    </script>--}}
@endsection
