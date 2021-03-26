@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView invest" style="background-image:url({{ asset('images/hawknestInvest/invest3.jpg') }})" id="heroSec">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                <div class="question">
                    What search criteria are you interested in?
                </div>
                <div class="container-fluid answers" style="padding: 0;">
                    <form action="/invest-step-3" method="POST" style="height: 90%;">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <ul class="checkboxWrap" style="height:150px">
                                    <li>
                                        <label><i class="icofont-home"></i> Vacant Homes
                                            <input type="checkbox" name="Gated" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-home"></i> Low Price
                                            <input type="checkbox" name="Gated" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-home"></i> Vacation Rentals
                                            <input type="checkbox" name="Gated" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-island-alt"></i> Existing Tenants
                                            <input type="checkbox" name="Pool" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-home"></i> Low Price/sqft
                                            <input type="checkbox" name="Gated" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-home"></i>Bed & Breakfasts
                                            <input type="checkbox" name="Gated" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-sale-discount"></i> Short Sales
                                            <input type="checkbox" name="NearShopping" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-sale-discount"></i> Price Reductions
                                            <input type="checkbox" name="NearShopping" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-sale-discount"></i> High Traffic Location
                                            <input type="checkbox" name="NearShopping" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-legal"></i> Foreclosures
                                            <input type="checkbox" name="Walkability" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-legal"></i> Long Days on Market
                                            <input type="checkbox" name="Walkability" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-legal"></i> Off Market Properties
                                            <input type="checkbox" name="Walkability" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-exclamation-circle"></i> REOs
                                            <input type="checkbox" name="Parks" />
                                        </label>
                                    </li>
                                    <li>
                                        <label><i class="icofont-exclamation-circle"></i> Other: (Freeform)
                                            <input type="checkbox" name="Other" />
                                        </label>
                                    </li>
                                    <input type="text" class="form-control" name="otherText" placeholder="" aria-describedby="basic-addon1" style="display: none;">
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-success mb-2" type="submit" id="investNextButton"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button><br>
{{--                        <a class="skipButton" style="color: #3490dc; cursor: pointer;">Skip this question <i class="icofont-long-arrow-right"></i></a>--}}
                        <a href="/invest-step-4">Skip this question <i class="icofont-long-arrow-right"></i></a>
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
