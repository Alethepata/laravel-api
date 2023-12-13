<div>
    <h1>Hai ricevuto un messaggio da: {{$lead->name}}</h1>
    <em>{{$lead->email}}</em>
    <p>
        {{ $lead->message }}
    </p>
</div>

<style>
    div{
        padding: 0 20px;
    }
</style>
