@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView buy" id="heroSec" style="background-image:url({{ asset('images/hawknest/rentStep9Building.png') }})">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="question" style="margin-bottom: 18px;">
                        What matters most?
                    </div>

                    <div class="container-fluid answers">
                        <form action="/buy-step-9" method="post">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="features" name="Getting all my features" value="Getting all my features" />
                                        <label for="features"><i class="icofont-star"></i> Getting all my features</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="location" name="Staying in the location" value="Staying in the location" />
                                        <label for="location"><i class="icofont-location-pin"></i> Staying in the location</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="price" name="Having the cheapest price" value="Having the cheapest price" />
                                        <label for="price"><i class="icofont-tag"></i> Having the cheapest price</label>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1" id="rentStep10Description">Don't worry this won't remove any maches.</p>
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
