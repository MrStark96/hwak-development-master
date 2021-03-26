@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView blue buy" id="heroSec" style="background-image:url({{ asset('images/hawknest/rent5building.png') }})">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="question">
                        Neighborhood Amenities
                    </div>
                    <div class="container-fluid answers">
                        <form action="/buy-step-8" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <ul class="checkboxWrap" style="height:145px">
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/yard.svg') }}"></i> Gated
                                                <input type="checkbox" name="Gated" value="Gated" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i class="fas fa-swimming-pool"></i> Pool
                                                <input type="checkbox" name="Pool" value="Pool" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i class="fas fa-shopping-cart"></i> Near Shopping
                                                <input type="checkbox" name="Near Shopping" value="Near Shopping" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i class="fas fa-walking"></i> Walkability
                                                <input type="checkbox" name="Walkability" value="Walkability" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i class="fas fa-tree"></i> Parks
                                                <input type="checkbox" name="Parks" value="Parks" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i class="fas fa-moon"></i> Near Nighlife
                                                <input type="checkbox" name="Near Nighlife" value="Near Nighlife" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="18" src="{{ asset('images/icons/sportsCourt.png') }}"></i> Sports Courts
                                                <input type="checkbox" name="Sports Courts" value="Sports Courts" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i class="fas fa-graduation-cap"></i> Near Work/School
                                                <input type="checkbox" name="Work/School" value="Work/School" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i class="fas fa-road"></i> Near Highway
                                                <input type="checkbox" name="Highway" value="Highway" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i class="icofont-gym-alt-2"></i> Fitness Center
                                                <input type="checkbox" name="Fitness Center" value="Fitness Center" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="18" src="{{ asset('images/icons/courseGolf.png') }}"></i> Golf Course
                                                <input type="checkbox" name="Golf Course" value="Golf Course" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="18" src="{{ asset('images/icons/clubhouse.png') }}"></i> Clubhouse
                                                <input type="checkbox" name="Clubhouse" value="Clubhouse" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="18" src="{{ asset('images/icons/wateraccess.svg') }}"></i> Water Access
                                                <input type="checkbox" name="Water Access" value="Water Access" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="18" src="{{ asset('images/icons/hoa.png') }}"></i> HOA
                                                <input type="checkbox" name="HOA" value="HOA" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="18" src="{{ asset('images/icons/nohoa.png') }}"></i> No HOA
                                                <input type="checkbox" name="No HOA" value="No HOA" />
                                            </label>
                                        </li>
                                        <li>
                                            <label><i><img width="20" src="{{ asset('images/icons/rentStep8/other.png') }}"></i> Other:
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
