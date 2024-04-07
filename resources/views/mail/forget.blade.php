@component('mail::message')
    Hello {{$user->name}},
    <p>you can reset your password now</p>
@component('mail::button',['url'=>route('resetpassword',$user->id)])
    Reset password
@endcomponent
    thanks<br>
    {{config('app.name')}}
@endcomponent
