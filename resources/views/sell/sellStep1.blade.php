@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView sell pink" id="heroSec" style="background-image:url({{ asset('images/hawknest/1.jpg') }}); background-size: cover">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-5">
                    <div class="question" style="margin-bottom: 50px;">
                        What type of property are you selling?
                    </div>
                    <div class="answers container-fluid p-0">
                        <form action="/sell-step-1" method="post">
                            @csrf
                            <div class="container-fluid">
                                <div class="row mb-3 justify-content-between">
                                    <div class="col-2 p-0">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="house" name="House" value="House" />
                                            <label for="house" style="height: 110px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">1</span><br> House</div></label>
                                        </div>
                                    </div>
                                    <div class="col-2 p-0">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="condo" name="Condo" value="Condo" />
                                            <label for="condo" style="height: 110px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">2</span> Condo</div></label>
                                        </div>
                                    </div>
                                    <div class="col-2 p-0">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="emptyLot" name="EmptyLot" value="EmptyLot" />
                                            <label for="emptyLot" style="height: 110px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">3</span> Empty Lot</div></label>
                                        </div>
                                    </div>
                                    <div class="col-2 p-0">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="apartment" name="Apartment" value="Apartment" />
                                            <label for="apartment" style="height: 110px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">4</span> Apartment</div></label>
                                        </div>
                                    </div>
                                    <div class="col-2 p-0">
                                        <div class="radiobtn">
                                            <input type="checkbox" id="townhome" name="Townhome" value="Townhome" />
                                            <label for="townhome" style="height: 110px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">5</span> Townhome</div></label>
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

        toggleViewValue = {!! json_encode($toggleViewSellValue) !!};
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
