@component('mail::message')
# Welcome to Instagram

This is a community of fellow developers and we are happy that you joined us.

{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent--}}

Thank you!,<br>
{{ config('app.name') }}
@endcomponent
