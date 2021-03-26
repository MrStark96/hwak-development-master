<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand" href="/"><img height="54" src="{{ asset("/images/logo.png") }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Join Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>
{{--            @if (!Auth::check())--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/signup">Signup</a>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--            @if (Auth::check())--}}
{{--                @if (Auth::user()->is_admin == 1)--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/admin/buy">Admin</a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--            @endif--}}
{{--            <li class="nav-item">--}}
{{--                @if (Auth::check())--}}
{{--                    <a class="nav-link" href="/logout">logout</a>--}}
{{--                @else--}}
{{--                    <a class="nav-link" href="/login">login</a>--}}
{{--                @endif--}}
{{--            </li>--}}
            </ul>
        </div>
    </div>
</nav>
