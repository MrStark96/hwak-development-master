@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView rent yellow" id="heroSec" style="background-image:url({{ asset('images/hawknest/rentStep13Building.png') }})">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <p id="loading"><span>.</span><span>.</span><span>.</span><span>.</span></p>
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="question" id="rentStep13Question">
                    Are there any issues with your Income, Credit, Criminal or Rental History?
                </div>
                <div class="container-fluid answers">
                    <form action="/rent-step-13" method="post">
                        @csrf
                        <div class="row" style="margin: 10px 10px 30px 10px;">
                            <div class="col">
                                <div class="radiobtn">
                                    <input type="checkbox" id="naughty" name="Yes, I've been naughty" value="Yes, I've been naughty" />
                                    <label for="naughty" style="height: 92px;">
                                        <div class="rentStep13Icon"><img width="52" height="52" src="{{ asset('images/icons/smilyemojens.jpg') }}"><br>Yes I've been naughty</div>
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="radiobtn">
                                    <input type="checkbox" id="saint" name="Nope I'm a saint" value="Nope I'm a saint" />
                                    <label for="saint" style="height: 92px;">
                                        <div class="rentStep13Icon"><img width="52" height="52" src="{{ asset('images/icons/angel.svg') }}"><br>Nope I'm a saint</div>
                                    </label>
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
