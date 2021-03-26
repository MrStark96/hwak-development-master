@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView rent pink" id="heroSec" style="background-image:url({{ asset('images/hawknest/rentStep12Update.png') }})">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="question" style="height: 48px;">
                    How long are you looking to sign a lease for?
                </div>

                <div class="container-fluid answers">
                    <form action="/rent-step-12" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-4" style="box-shadow: none;">
                                <div class="input-group mb-3">

                                    <input type="number" class="form-control" name="lookingfor" placeholder="Months" value="12" min="1" max="50" required>

                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Months</span>
                                    </div>
                                </div>
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
