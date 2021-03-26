@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
    <div class="heroSec aniView sell pink" id="heroSec" style="background-image:url({{ asset('images/hawknest/rentStep9Building.png') }})">
        <div class="birdNestR"></div>
        <div class="NestL"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="question">
                        Laundry
                    </div>

                    <div class="container-fluid answers">
                        <form action="/sell-step-6" method="post">
                            @csrf
                            <div class="row justify-content-center" style="padding: 0.1rem;">
                                <div class="col-10">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="New" name="New" value="New" />
                                        <label class="py-2" for="New"> New</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center" style="padding: 0.1rem;">
                                <div class="col-10">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="FixerUpper" name="Fixer Upper" value="Fixer Upper" />
                                        <label class="py-2" for="FixerUpper"> Fixer Upper</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center" style="padding: 0.1rem;">
                                <div class="col-10">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="gentlyLivedIn" name="Gently Lived in" value="Gently Lived in" />
                                        <label class="py-2" for="gentlyLivedIn"> Gently Lived in</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center" style="padding: 0.2rem;">
                                <div class="col-10">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="recentlyRemodelled" name="Recently Remodelled" value="Recently Remodelled" />
                                        <label class="py-2" for="recentlyRemodelled"> Recently Remodelled</label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-danger" type="submit" id="nextButton"><span>Next</span><i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
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
