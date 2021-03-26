@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView buy yellow" style="background-image:url({{ asset('images/hawknestInvest/invest8.jpg') }})" id="heroSec">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                    <div class=" question" style="width: 50%;">
                        How old of a home do you prefer?
                    </div>

                    <div class="container-fluid answers">
                        <form action="/buy-step-7" method="POST" autocomplete="off">
                            @csrf
                            <div class="row justify-content-between">
                                <div class="col-md-6 col-9 pb-2">
                                    <input type="text" placeholder="X,XXX" class="form-control pink" value="1900" id="yearMinumValue">
                                </div>
                                <div class="col-md-6 col-9 pb-2">
                                    <input type="text" placeholder="X,XXX" class="form-control pink" value="2022" id="yearMaximumValue">
                                </div>
                                <div class="w-100"></div>
                                <div class="col-12">
                                    <div class="container-fluid" style="padding: 0;">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex justify-content-between text-muted">
                                                    <span>1900 Year</span>
                                                    <span>2022 Year</span>
                                                </div>
                                                <input type="range" min="1" max="61" value="1" step="1" class="custom-range" id="yearMinumRange">
                                            </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-between text-muted">
                                                    <span>1900 Year</span>
                                                    <span>2022 Year</span>
                                                </div>
                                                <input type="range" min="1" max="61" value="61" step="1" class="custom-range" id="yearMaximumRange">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-outline-light" type="submit" id="investNextButton"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
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
