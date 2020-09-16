@component('mail::message')
# Here are some of the details of the License Registration Form you just Created.
# Fullname:
 {{$movie->name}}
# Vehicle category:
{{$movie->vehicle}}

@component('mail::button', ['url' => url('/members/successlogin/')])
Review your Form here.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
