@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView invest blue" style="background-image:url({{ asset('images/hawknestInvest/invest9.jpg') }})" id="heroSec">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-7 col-lg-6 col-xl-5">
                <div class="question mt-2">
                    Do you want to avoid properties with any of these features
                </div>
                <div class="container-fluid answers">
                    <form action="/invest-step-9" method="POST">
                        @csrf
                        <div class="container-fluid mt-3" style="height: 100px; margin-bottom: 30px;">
                            <div class="row">
                                <div class="col-3" style="padding: 0;">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="one" name="floor" value="1" />
                                        <label for="one" style="height: 100px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">1</span><br>Pools</div></label>
                                    </div>
                                </div>
                                <div class="col-3" style="padding: 0;">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="2" name="floor" value="2" />
                                        <label for="2" style="height: 100px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">2</span><br>Non-Slab Foundations</div></label>
                                    </div>
                                </div>
                                <div class="col-3" style="padding: 0;">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="3+" name="floor" value="3+" />
                                        <label for="3+" style="height: 100px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">3</span><br>HOAs</div></label>
                                    </div>
                                </div>
                                <div class="col-3" style="padding: 0;">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="tower" name="floor" value="Tower" />
                                        <label for="tower" style="height: 100px;"><div style="font-size: 12px; height: 80px;"><span style="margin-bottom: 12px;">4</span><br>Other</div></label>
                                    </div>
                                </div>
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
