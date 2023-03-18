@extends('adminpanel')

@section('adminContent')

<div class="messageContainer">
    <div class="cardHeader">
        <h2>Inbox</h2>
    </div>

    <table>
        <thead>
            <tr>
                <td>SN</td>
                <td>Name</td>
                <td>Subject</td>
                <td>Message</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $key => $message)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$message->user_firstname}} {{$message->user_lastname}}</td>
                <td>{{$message->user_subject}}</td>
                <td>{{$message->user_message}}</td>
                <td>{{$message->user_email}}</td>
                <td><a class="btn btn-danger" href="/delete-message/{{$message->id}}"> Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection