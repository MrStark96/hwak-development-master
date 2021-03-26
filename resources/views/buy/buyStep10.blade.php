@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView buy yellow" id="heroSec" style="background-image:url({{ asset('images/hawknest/rent11building2.jpg') }})">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="question">
                        When do you want to move in?
                    </div>

                    <div class="container-fluid answers">
                        <form action="/buy-step-10" method="post">
                            @csrf
                            <div style="min-height: 100px; height: 180px; overflow-y: auto; overflow-x: hidden;">
                                <div class="row">
                                    <div class="col ml-1">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="looking" name="I'm just looking" value="I'm just looking" />
                                            <label for="looking" name="buyStep10Label" style="height: 100px;"><div><span class="mr-2">1</span><br> I'm just looking</div></label>
                                        </div>
                                    </div>
                                    <div class="col mr-1">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="current" name="I need to sell my current home first" value="I need to sell my current home first" />
                                            <label for="current" name="buyStep10Label" style="height: 100px;">
                                                <div><span class="mr-2">2</span><br> I need to sell my current home first</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col ml-1">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="hurry" name="I want to move, but I'm in no hurry" value="I want to move, but I'm in no hurry" />
                                            <label for="hurry" name="buyStep10Label" style="height: 100px;">
                                                <div><span class="mr-2">3</span><br> I want to move, but I'm in no hurry</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mr-1">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="flexible" name="I need to move, but flexible" value="I need to move, but flexible" />
                                            <label for="flexible" name="buyStep10Label" style="height: 100px;">
                                                <div><span class="mr-2">4</span><br> I need to move, but flexible</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-6 mr-1">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="yesterday" name="I've gotta move yesterday!" value="I've gotta move yesterday!" />
                                            <label for="yesterday" name="buyStep10Label" style="height: 100px;">
                                                <div><span class="mr-2">5</span><br> I've gotta move yesterday!</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline-light mt-2" type="submit" id="nextButton"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
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
