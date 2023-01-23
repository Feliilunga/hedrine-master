@component('mail::message')
# Hedrine

Un nouveau bug a été découvert par: 

{{ $data['email'] }}

Sur l'URL: 

{{ $data['route']}}

Titre: 

{{ $data['subject']}}


Description: 

{{ $data['desc']}}


Date: 

{{ date('d / m / Y H:i ') }}

@endcomponent
