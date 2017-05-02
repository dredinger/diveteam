@component('mail::message')
# Introduction

Thank you for registering, {{ $user->name }}!

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some inspirational quote!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
