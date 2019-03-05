@component('mail::message')
    <h1>Nuova Lead</h1>
    Inviata da: {{ $lead->name }}, con email: {{ $lead->mail }} e con messaggio: {{ $lead->message }}
@endcomponent
