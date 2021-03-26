<div style="text-align: center; background-color: #f8f8f8; position: relative; padding: 100px 0;">
{{--    @component('mail::button', ['url' => $actionUrl, 'color' => $color])--}}
{{--        {{ $title }}--}}
{{--    @endcomponent--}}
    <div style="max-width: 650px; text-align: center; background-color: white; margin: auto; padding: 30px 30px;">
        <h1 style="padding-bottom: 0; margin-bottom: 2px; color: #4458dc;">Hawk {{$body['type']}}</h1>
        <h3 style="margin-bottom: 10px; color: #854fee;">{{$body['userInfo']['username']}}<br>{{$body['userInfo']['email']}}<br>{{$body['userInfo']['phone']}}</h3>
        <ul style="list-style: none; text-align: center; padding: 0; border: 2px solid #8666b4; background-image: url({{ asset('images/hawknest/1.jpg') }})">
            @foreach($body as $key => $val)
                @if($key != 'userInfo' and $key != 'type')
                    <li style="padding: 12px; margin: 0; border-bottom: 1px solid #8666b4;">
                        <span style="font-size: 14px; float: left;">{{$key}}</span> <br><br>
                        @if(is_array($val))
                            <ul style="list-style: none; padding: 0;">
                                @foreach($val as $subKey => $subVal)
                                    <li style="font-size: 17px; margin: 0; padding: 0;">
                                        {{ $subVal }}
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <span style="font-size: 14px;">
                                @if($val == '')
                                    <span style="font-size: 17px;">nothing</span>
                                @else
                                    <span style="font-size: 17px;">{{ $val }}</span>
                                @endif
                            </span>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
        <p>You agree to The House Hawk’s Terms of Use & Privacy Policy and to be contacted by us or third parties.
            By registering, you give us your express written consent to deliver automated emails to you.
            Consent is not a condition of purchase. Your registration acts as your binding electronic signature.
        </p>
    </div>
</div>
