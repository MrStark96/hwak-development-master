@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView invest" style="background-image:url({{ asset('images/hawknestInvest/invest1-1.jpg') }})" id="heroSec">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                <div class="question">
                    What type of property are you looking for?
                </div>
                <div class="answers container-fluid" style="height: 280px;">
                    <form action="/invest-step-1" method="POST" style="padding: 20px 0;">
                        @csrf
                        <div class="row mb-1">
                            <div class="col-6">
                                <div class="radiobtn">
                                    <input type="checkbox" id="house" name="lookingFor" value="House" />
                                    <label for="house" style="height: 70px;"><div><span>1</span><br> Single Family Rentals</div></label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="radiobtn">
                                    <input type="checkbox" id="condo" name="lookingFor" value="Condo" />
                                    <label for="condo" style="height: 70px;"><div><span>2</span><br> Multi-Family Rentals</div></label>
                                </div>
                            </div>
                            <div class="w-100 p-1"></div>
                            <div class="col-6">
                                <div class="radiobtn">
                                    <input type="checkbox" id="apartment" name="lookingFor" value="Apartment" />
                                    <label for="apartment" style="height: 70px;"><div><span>3</span><br> Rehabs & Flips</div></label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="radiobtn">
                                    <input type="checkbox" id="townhome" name="lookingFor" value="Townhome" />
                                    <label for="townhome" style="height: 70px;"><div><span>4</span><br> Commercial</div></label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-light" type="submit" id="investNextButton"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
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
