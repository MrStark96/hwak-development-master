@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView buy purple" id="heroSec" style="background-image:url({{ asset('images/hawknest/rentStep8Building.jpg') }})">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="question" style="height: 42px;">
                        What features does your home have?
                    </div>

                    <div class="container-fluid answers">
                        <form action="/buy-step-4" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <ul class="checkboxWrap" style="height:150px">
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/yard.svg') }}"></i>Large Yard
                                                <input type="checkbox" name="Large Yard" value="Large Yard" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/cul-de-sec.svg') }}"></i>Cul-de-sac
                                                <input type="checkbox" name="Cul-de-sac" value="Cul-de-sac" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/kitchen-island.png') }}"></i>Kitchen Island
                                                <input type="checkbox" name="Kitchen Island" value="Kitchen Island" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/game-room.png') }}"></i>Game Room
                                                <input type="checkbox" name="Game Room" value="Game Room" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/open-floor-plan.png') }}"></i>Open Floor Plan
                                                <input type="checkbox" name="Open Floor Plan" value="Open Floor Plan" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/garage.png') }}"></i>Garage
                                                <input type="checkbox" name="Garage" value="Garage" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/tree.png') }}"></i>Views
                                                <input type="checkbox" name="Views" value="Views"/>
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/study-office.png') }}"></i>Study/Office
                                                <input type="checkbox" name="Study/Office" value="Study/Office" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/theater-room.png') }}"></i>Theater Room
                                                <input type="checkbox" name="Theater Room" value="Theater Room" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/water-softner.svg') }}"></i>Water Softener
                                                <input type="checkbox" name="Water Softener" value="Water Softener"/>
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/fireplace.png') }}"></i>Fireplace
                                                <input type="checkbox" name="Fireplace" value="Fireplace" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/pool-hottup-spa.png') }}"></i>Pool/hot tub/spa
                                                <input type="checkbox" name="Pool/hot tub/spa" value="Pool/hot tub/spa" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/florida-room.png') }}"></i>Florida Room
                                                <input type="checkbox" name="Florida Room" value="Florida Room" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/high-ceiling.svg') }}"></i>High Ceilings
                                                <input type="checkbox" name="High Ceilings" value="High Ceilings" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/ada-accessible.png') }}"></i>ADA Accessible
                                                <input type="checkbox" name="ADA Accessible" value="ADA Accessible" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/furnished.png') }}"></i>Furnished
                                                <input type="checkbox" name="Furnished" value="Furnished" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/upgrading-flooring.png') }}"></i>Upgraded flooring
                                                <input type="checkbox" name="Upgraded flooring" value="Upgraded flooring" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/patio-balcony.png') }}"></i>Patio/Balcony
                                                <input type="checkbox" name="Balcony" value="Balcony" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/central-air-condition.png') }}"></i>CentralAirCondition
                                                <input type="checkbox" name="Central Air Conditioning" value="Central Air Conditioning" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/upgraded-counter-top.svg') }}"></i>Upgrad Countertops
                                                <input type="checkbox" name="Upgraded Countertops" value="Upgraded Countertops" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/man-cave.png') }}"></i>Man Cave
                                                <input type="checkbox" name="Man Cave" value="Man Cave" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/she-shed.svg') }}"></i>She Shed
                                                <input type="checkbox" name="She Shed" value="She Shed" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/water-front.png') }}"></i>Waterfront
                                                <input type="checkbox" name="Waterfront" value="Waterfront" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/other.png') }}"></i>Other
                                                <input type="checkbox" name="Other" value="Other" />
                                            </label>
                                        </li>
                                        <input type="text" class="form-control" name="otherText" placeholder="" aria-describedby="basic-addon1" style="display: none;">
                                    </ul>
                                </div>
                            </div>

                            <button class="btn btn-info" type="submit" id="nextButton"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button><br>
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
