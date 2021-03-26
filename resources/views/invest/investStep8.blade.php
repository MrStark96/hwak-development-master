@extends('layouts.app')

@section('header_scripts')
@endsection

@section('content')
<div class="heroSec aniView invest pink" style="background-image:url({{ asset('images/hawknestInvest/invest8.jpg') }})" id="heroSec">
    <div class="birdNestR"></div>
    <div class="NestL"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                <div class=" question">
                Year Built
                </div>

                <div class="container-fluid answers">
                    <form action="/invest-step-8" method="POST">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6 col-9 pb-2">
                                <input type="text" placeholder="0000" class="form-control pink" value="1900" id="yearMinumValue">
                            </div>
                            <div class="col-md-6 col-9 pb-2">
                                <input type="text" placeholder="0000" class="form-control pink" value="2022" id="yearMaximumValue">
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12">
                                <div class="container-fluid mt-4 mb-3" style="padding: 0;">
                                    <div class="d-flex justify-content-between text-muted">
                                        <span id="minYear">1900 Year</span>
                                        <span id="maxYear">2022 Year</span>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div id="slider-range"></div>
                                        </div>
                                    </div>
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
        $( function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 122,
                values: [ 0, 61 ],
                slide: function( event, ui ) {
                    $("#yearMinumValue").val(parseInt(ui.values[ 0 ]) + 1900);
                    $("#yearMaximumValue").val(parseInt(ui.values[ 1 ]) + 1900);
                    // $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });
            // $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            //     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
            $("#yearMinumValue").val(parseInt($( "#slider-range" ).slider( "values", 0 )) + 1900);
            $("#yearMaximumValue").val(parseInt($( "#slider-range" ).slider( "values", 1 )) + 1900);

            $('#yearMaximumValue').change(function() {
                if (parseInt($(this).val()) <= parseInt($('#yearMinumValue').val())) {
                    $(this).val(String(parseInt($('#yearMinumValue').val()) + 1));
                    $('#slider-range').slider('values', '1', String(parseInt($('#yearMinumValue').val()) + 1 - 1900));

                    return;
                }

                $('#slider-range').slider('values', '1', String(parseInt($(this).val()) - 1900));
            });

            $('#yearMinumValue').change(function() {
                if (parseInt($(this).val()) >= parseInt($('#yearMaximumValue').val())) {
                    $(this).val(String(parseInt($('#yearMaximumValue').val()) - 1));
                    $('#slider-range').slider('values', '0', String(parseInt($('#yearMaximumValue').val()) - 1 - 1900));

                    return;
                }

                $('#slider-range').slider('values', '0', String(parseInt($(this).val()) - 1900));
            });

            $(document).on('click', function(event) {
                if (event.target.id != 'yearMinumValue' && event.target.id != 'yearMaximumValue') {
                    $("#yearMinumValue").val(parseInt($( "#slider-range" ).slider( "values", 0 )) + 1900);
                    $("#yearMaximumValue").val(parseInt($( "#slider-range" ).slider( "values", 1 )) + 1900);
                }
            });
        });

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
