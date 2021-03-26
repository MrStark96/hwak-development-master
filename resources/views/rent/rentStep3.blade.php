@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView rent pink" id="heroSec" style="background-image:url({{ asset('images/hawknest/rentStep3Building.jpg') }})">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class=" question">
                    What are you looking to pay?
                </div>

                <div class="container-fluid answers">
                    <form action="/rent-step-3" method="post" autocomplete="off">
                        @csrf
                        <div class="row justify-content-md-center">
                            <div class="col-md-6 pb-2">
                                <div class="row form-control-row">
                                    <div class="col-4 form-control-col">
                                        <input type="text" class="form-control pink" placeholder="Up to $" name="lookingfor" id="leftValue" value="Up to $" readonly>
                                    </div>
                                    <div class="col-4 form-control-col">
                                        <input type="text" class="form-control pink" placeholder="X,XXX" name="lookingforTextValue" id="textValue" value="">
                                    </div>
                                    <div class="col-4 form-control-col">
                                        <input type="text" class="form-control pink" placeholder="a month" name="lookingfor" id="rightValue" value="a month" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="w-100"></div>
                            <div class="col-12">

                                <!-- <span class="hilight"></span> -->
                                <div class="d-flex justify-content-between text-muted">
                                    <span>$500</span>
                                    <span>$5,000+</span>
                                </div>
                                <input type="range" min="1" max="46" value="23" class="custom-range" id="myRange">

                            </div>
                        </div>

                        <button class="btn btn-warning" type="submit" id="nextButton"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
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

        toggleViewValue = {!! json_encode($toggleViewRentValue) !!};
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
