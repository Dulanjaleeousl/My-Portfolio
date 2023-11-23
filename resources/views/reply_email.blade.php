@component('mail::message')

# Hi {{ $name }},
{{-- # {{ $senderMessage }} --}}
  
  
Receive  your message. I will reply you soon.
  

Thanks,

{{ config('app.name') }}
@endcomponent
 