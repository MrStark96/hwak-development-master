@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView sell pink" style="background-image:url({{ asset('images/hawknest/2.jpg') }})" id="heroSecSell2">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="question">
                        Tell us about the home you are selling..
                    </div>
                    <div class="answers container-fluid">
                        <form action="/sell-step-2" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <label class="input-group-prepend">
                                            <span class="input-group-text" for="inputGroupSelect01"><i class="icofont-bed"></i></span>
                                        </label>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected value="0">Select bedrooms...</option>
                                            <option value="1">1+ bed</option>
                                            <option value="2">2+ beds</option>
                                            <option value="3">3+ beds</option>
                                            <option value="4">4+ beds</option>
                                            <option value="5">5+ beds</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <label class="input-group-prepend">
                                            <span class="input-group-text" for="inputGroupSelect01"><i class="icofont-bathtub"></i></span>
                                        </label>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected value="0">Select Bathrooms...</option>
                                            <option value="1">1+ bath</option>
                                            <option value="2">2+ baths</option>
                                            <option value="3">3+ baths</option>
                                            <option value="4">4+ baths</option>
                                            <option value="5">5+ baths</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-outline-light mb-2" type="submit" id="investNextButton"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button><br>
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

        toggleViewValue = {!! json_encode($toggleViewSellValue) !!};
        let heroSec = document.getElementById('heroSecSell2');
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
