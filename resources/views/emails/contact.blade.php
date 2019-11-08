@component('mail::message')
# Contact Form Email 

{{ $data['subject'] }}
<br>

{{ $data['comment'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
