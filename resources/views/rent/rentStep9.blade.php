@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView rent yellow" id="heroSec" style="background-image:url({{ asset('images/hawknest/rentStep9Building.png') }})">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="question">
                    Laundry
                </div>

                <div class="container-fluid answers">
                    <form action="/rent-step-9" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="radiobtn">
                                    <input type="checkbox" id="washer" name="Washer/Dryer Provided" value="Washer/Dryer Provided" />
                                    <label class="py-2" for="washer"><i class="icofont-washing-machine"></i> Washer/Dryer Provided</label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="radiobtn">
                                    <input type="checkbox" id="DryerConnections" name="Washer/Dryer Connections" value="Washer/Dryer Connections" />
                                    <label class="py-2" for="DryerConnections"><i class="icofont-plugin"></i> Washer/Dryer Connections</label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="radiobtn">
                                    <input type="checkbox" id="LaundryRoom" name="Community Laundry Room" value="Community Laundry Room" />
                                    <label class="py-2" for="LaundryRoom"><i class="icofont-ui-home"></i> Community Laundry Room</label>
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
