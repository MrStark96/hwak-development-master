@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView rent blue" id="heroSec" style="background-image:url({{ asset('images/hawknest/rentStepBuilding2.png') }})">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="question">
                    How many bedrooms?
                </div>
                <div class="answers container-fluid" style="height: 260px;">
                    <form action="/rent-step-2" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-4 offset-2">
                                <div class="radiobtn">
                                    <input type="checkbox" id="studio" name="Studio" value="Studio" />
                                    <label for="studio"><div><span>S</span><br> Studio</div></label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="radiobtn">
                                    <input type="checkbox" id="1bed" name="1 Bed" value="1 Bed" />
                                    <label for="1bed"><div><span>1</span><br> 1 Bed</div></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 offset-2">
                                <div class="radiobtn">
                                    <input type="checkbox" id="2bed" name="2 Bed" value="2 Bed" />
                                    <label for="2bed"><div><span>2</span><br> 2 Bed</div> </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="radiobtn">
                                    <input type="checkbox" id="3+bed" name="3+ Bed" value="3+ Bed" />
                                    <label for="3+bed"><div><span>3+</span><br> 3+ Bed</div></label>
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
