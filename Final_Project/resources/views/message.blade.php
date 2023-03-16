@extends('adminpanel')

@section('adminContent')
<table>
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Email</th>
    </tr>
    @foreach($messages as $key => $message)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$message->user_firstname}} {{$message->user_lastname}}</td>
        <td>{{$message->user_subject}}</td>
        <td>{{$message->user_message}}</td>
        <td>{{$message->user_email}}</td>
    </tr>
    @endforeach
</table>

@endsection