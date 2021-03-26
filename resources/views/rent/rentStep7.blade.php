@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView rent blue" id="heroSec" style="background-image:url({{ asset('images/hawknest/rent7StepBuilding.png') }});"
     xmlns="http://www.w3.org/1999/html">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="question" style="margin-bottom: 46px; letter-spacing: 0;">
                    Floor Preference / # of Levels
                </div>

                <div class="container-fluid answers">
                    <form action="/rent-step-7" method="post">
                        @csrf
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="one" name="floor" value="1 Floor" />
                                        <label for="one" name="floor" style="height: 100px;"><div style="font-size: 12px; height: 75px;"><span style="margin-bottom: 12px;">1</span><br>Floor</div></label>
                                    </div>
                                </div>
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="2" name="floor" value="2 Floor" />
                                        <label for="2" name="floor" style="height: 100px;"><div style="font-size: 12px; height: 75px;"><span style="margin-bottom: 12px;">2</span><br>Floor</div></label>
                                    </div>
                                </div>
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="3+" name="floor" value="3+ Floor" />
                                        <label for="3+" name="floor" style="height: 100px;"><div style="font-size: 12px; height: 75px;"><span style="margin-bottom: 12px;">3+</span><br>Floor</div></label>
                                    </div>
                                </div>
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="tower" name="floor" value="Hight-Rise Tower" />
                                        <label for="tower" name="floor" style="height: 100px;"><div style="font-size: 12px; height: 75px;"><span style="margin-bottom: 12px;"><img width="33" src="{{ asset('images/icons/highbuilding.png') }}"></span><br> Tower</div></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-outline-light" type="submit" id="nextButton"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
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
