@extends('layouts.app')

@section('header_scripts')
@endsection
@include('include.header')
@section('content')
<div class="heroSec">
    <div class="birdNestL"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="heading">
                    <h1>The Hawk Is In The House!</h1>
                    <h5 class="SubHead">Let the Hawk find the Right Home, Right Now.</h5>
                </div>
                <p>Select Your Goals and Search Your Location</p>
                <ul class="options menu" style="margin-bottom: 20px;">
                    <li style="display: none"><a></a></li>
                    <li style="display: none"><a></a></li>
                    <li><a>Rent</a></li>
                    <li><a>Invest</a></li>
                </ul>
                <div class="input-group input-group-lg" style="max-width: 360px;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icofont-location-pin"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Location" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $cityName }}, {{$abbreviation}}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="goSearch"><i class="icofont-search-1"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_scripts')
@endsection
