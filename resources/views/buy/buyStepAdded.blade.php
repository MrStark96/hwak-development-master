@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView buy pink" style="background-image:url({{ asset('images/hawknestInvest/invest7.jpg') }})" id="heroSec">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                    <div class=" question">
                        How many Square feet?
                    </div>

                    <div class="container-fluid answers">
                        <form action="/buy-step-added-6" method="POST">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-9 pb-2">
                                    <div class="row form-control-row">
                                        <div class="col-6 offset-1 form-control-col">
                                            <input type="text" class="form-control pink" placeholder="X,XXX" name="lookingforTextValue" id="textValue" value="">
                                        </div>
                                        <div class="col-4 form-control-col">
                                            <input type="text" class="form-control pink" placeholder="Sqft" name="lookingfor" id="leftValue" value="Sqft" readonly style="text-align: center; letter-spacing: 6px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-12">

                                    <!-- <span class="hilight"></span> -->
                                    <div class="d-flex justify-content-between text-muted">
                                        <span>500 Sqft</span>
                                        <span>7,500+ Sqft</span>
                                    </div>
                                    <input type="range" min="1" max="70" value="35" class="custom-range" id="myRange">

                                </div>
                            </div>

                            <button class="btn btn-outline-light" type="submit"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="toggleView">
            <input type="checkbox" id="toggleView">
            <label for="toggleView">
                <span>Animation</span>
                <span>Normal</span>
            </label>
        </div>
    </div>
@endsection

@section('footer_scripts')
    <script type="text/javascript">
        let toggleViewValue = false;

        toggleViewValue = {!! json_encode($toggleViewBuyValue) !!};
        let heroSec = document.getElementById('heroSec');
        let toggleView = document.getElementById('toggleView');

        if (toggleViewValue === "true") {
            heroSec.classList.remove("aniView");
            heroSec.classList.remove("normalView");
            heroSec.classList.add("normalView");
            toggleView.checked = true;
        } else {
            heroSec.classList.remove("aniView");
            heroSec.classList.remove("normalView");
            heroSec.classList.add("aniView");
            toggleView.checked = false;
        }
    </script>
@endsection
