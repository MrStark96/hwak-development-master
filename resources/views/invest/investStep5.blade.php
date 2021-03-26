@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView invest yellow" style="background-image:url({{ asset('images/hawknestInvest/invest5-2.jpg') }})" id="heroSec">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                <div class=" question">
                Minimum Cap Rate
                </div>

                <div class="container-fluid answers">
                    <form action="/invest-step-5" method="POST">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-4 pb-2">
                                <input type="number" placeholder="Cap Rate" value="10.0" step="0.1" min="0.0" class="form-control" style="padding-left: 10px; width: 80%;">
                                <span style="position: relative; right: 38px;">% &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </div>
                        </div>
                        <button class="btn btn-success">Next</button>
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

        toggleViewValue = {!! json_encode($toggleViewInvestValue) !!};
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
