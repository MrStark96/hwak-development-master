@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView rent" id="heroSec" style="background-image:url({{ asset('images/hawknest/6.jpg') }})">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="question">
                    Pets?
                </div>

                <div class="container-fluid answers">
                    <form action="/rent-step-6" method="post">
                        @csrf
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="dog" name="Dog" value="Dog" />
                                        <label for="dog">
                                            <div><img src="{{ asset('images/icons/dog.png') }}" alt=""><br> Dog</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="cat" name="Cat" value="Cat" />
                                        <label for="cat">
                                            <div><img src="{{ asset('images/icons/cat.png') }}" alt=""><br> Cat</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="hawks" name="Hawks" value="Hawks" />
                                        <label for="hawks">
                                            <div><span class="icon"><img src="{{ asset('images/icons/bird.svg') }}" alt=""></span><br> Hawks!!</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-3 p-1">
                                    <div class="radiobtn">
                                        <input type="checkbox" id="other" name="Other" value="Other" />
                                        <label for="other">
                                            <div><span class="icon"><img src="{{ asset('images/icons/snake.svg') }}" alt=""></span><br> Other</div>
                                        </label>
                                    </div>
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
