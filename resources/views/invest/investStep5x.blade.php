@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView invest" style="background-image:url({{ asset('images/hawknest/6.jpg') }})" id="heroSec">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                <div class="question">
                    Pets?
                </div>

                <div class="container-fluid answers">
                    <form action="/rent-step-7">
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="radiobtn">
                                    <input type="checkbox" id="dog" name="Pets" value="Dog" />
                                    <label for="dog">
                                        <div><span class="icon"><img src="{{ asset('images/icons/dog.svg') }}" alt=""></span><br> Dog</div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="radiobtn">
                                    <input type="checkbox" id="cat" name="Pets" value="Cat" />
                                    <label for="cat">
                                        <div><span class="icon"><img src="{{ asset('images/icons/cat.svg') }}" alt=""></span><br> Cat</div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="radiobtn">
                                    <input type="checkbox" id="hawks" name="Pets" value="Hawks" />
                                    <label for="hawks">
                                        <div><span class="icon"><img src="{{ asset('images/icons/bird.svg') }}" alt=""></span><br> Hawks!!</div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="radiobtn">
                                    <input type="checkbox" id="other" name="Pets" value="Other" />
                                    <label for="other">
                                        <div><span class="icon"><img src="{{ asset('images/icons/snake.svg') }}" alt=""></span><br> Other</div> 
                                    </label>
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
