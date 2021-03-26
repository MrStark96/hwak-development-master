@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView buy blue" id="heroSec" style="background-image:url({{ asset('images/hawknest/rent7StepBuilding.png') }});"
         xmlns="http://www.w3.org/1999/html">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="question" style="margin-bottom: 45px;">
                        Floor Preference / # of Stories
                    </div>

                    <div class="container-fluid answers p-0">
                        <form action="/buy-step-6" method="post">
                            @csrf
                            <div class="container-fluid">
                                <div class="row justify-content-between">
                                    <div class="col-2 p-0">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="one" name="floor" value="1 Floor" />
                                            <label for="one" name="floor" style="height: 90px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">1</span><br>Story</div></label>
                                        </div>
                                    </div>
                                    <div class="col-2 p-0">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="2" name="floor" value="2 Floor" />
                                            <label for="2" name="floor" style="height: 90px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">2</span><br>Story</div></label>
                                        </div>
                                    </div>
                                    <div class="col-2 p-0">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="3+" name="floor" value="3+ Floor" />
                                            <label for="3+" name="floor" style="height: 90px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">3+</span><br>Story</div></label>
                                        </div>
                                    </div>
                                    <div class="col-2 p-0">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="basement" name="floor" value="Basement" />
                                            <label for="basement" name="basement" style="height: 90px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;"><img width="33" src="{{ asset('images/icons/basement.png') }}" style="width: 24px; height: 24px;"></span><br>Basement</div></label>
                                        </div>
                                    </div>
                                    <div class="col-2 p-0 mb-3">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="tower" name="floor" value="Hight-Rise Tower" />
                                            <label for="tower" name="floor" style="height: 90px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;"><img width="33" src="{{ asset('images/icons/highbuilding.png') }}"></span><br> Tower</div></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-info" type="submit" id="nextButton"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
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
