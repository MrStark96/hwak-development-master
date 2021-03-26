@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView rent yellow" id="heroSec" style="background-image:url({{ asset('images/hawknest/1.jpg') }}); background-size: cover">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="question">
                    What type of property are you looking for?
                </div>
                <div class="answers container-fluid">
                    <form action="/rent-step-1" method="post">
                        @csrf
                        <div class="container-fluid">
                            <div class="row mb-3">
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="house" name="House" value="House" />
                                        <label for="house"><div><span>1</span><br>House</div></label>
                                    </div>
                                </div>
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="condo" name="Condo" value="Condo" />
                                        <label for="condo"><div><span>2</span> Condo</div></label>
                                    </div>
                                </div>
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="apartment" name="Apartment" value="Apartment" />
                                        <label for="apartment"><div><span>3</span> Apartment</div></label>
                                    </div>
                                </div>
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="townhome" name="Townhome" value="Townhome" />
                                        <label for="townhome"><div><span>4</span> Townhome</div></label>
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
