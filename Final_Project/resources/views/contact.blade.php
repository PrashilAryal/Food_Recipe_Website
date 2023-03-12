@extends('layout.main')

@section('content')
<section class="contactSection">
    <div class="contactContainer">
        <div class="contactInfo">
            <div>
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><img src="{{ asset('../images/location.png') }}" alt=""></span>
                        <span>
                            Jalpa Chowk, Baniyatar<br>
                            Ward no. 1 <br>
                            Kathmandu, Nepal
                        </span>
                    </li>
                    <li>
                        <span><img src="{{ asset('../images/mail.png') }}" alt=""></span>
                        <span>chefskitchen@gmail.com</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('../images/phone-call.png') }}" alt=""></span>
                        <span>9876543210</span>
                    </li>
                </ul>
            </div>
            <ul class="contactSocialMedia">
                <li><a href="#"><img src="{{ asset('../images/location.png') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('../images/location.png') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('../images/location.png') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('../images/location.png') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('../images/location.png') }}" alt=""></a></li>
            </ul>
        </div>
        <form action="{{route('send_message')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="contactForm">
                <h2>Send a message</h2>
                @if(Session::has('success'))
                <div class="messageSentSuccess">
                    <span class="">{{Session::get('success')}}</span><br>
                </div>
                @endif
                {{-- @if($errors->any())
                        <span>{{$error}}</span>
                @endif --}}
                <div class="contactFormBox">
                    <div class="contactInputBox w50">
                        <input type="text" name="user_firstname" id="user_firstname" autocomplete="off" required>
                        <span>First Name</span>
                    </div>
                    <div class="contactInputBox w50">
                        <input type="text" name="user_lastname" id="user_lastname" autocomplete="off" required>
                        <span>Last Name</span>
                    </div>
                    <div class="contactInputBox w50">
                        <input type="email" name="user_email" id="user_email" autocomplete="off" required>
                        <span>Email Address</span>
                    </div>
                    <div class="contactInputBox w50">
                        <input type="text" name="user_subject" id="user_subject" autocomplete="off" required>
                        <span>Subject</span>
                    </div>
                    <div class="contactInputBox w100">
                        <textarea name="user_message" id="user_message" autocomplete="off" required></textarea>
                        <span>Write your message here...</span>
                    </div>
                    <div class="contactInputBox w50">
                        <input type="submit" id="send_message_btn" value="Send">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection