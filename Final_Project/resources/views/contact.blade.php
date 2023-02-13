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
                            2912 Meadobrook ROad<br>
                            los Angeles, CA <br>
                            90017
                        </span>
                    </li>
                    <li>
                        <span><img src="{{ asset('../images/mail.png') }}" alt=""></span>
                        <span>chefkitchen@gmail.com</span>
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
        <div class="contactForm">
            <h2>Send a message</h2>
            <div class="contactFormBox">
                <div class="contactInputBox w50">
                    <input type="text" required>
                    <span>First Name</span>
                </div>
                <div class="contactInputBox w50">
                    <input type="text" required>
                    <span>Last Name</span>
                </div>
                <div class="contactInputBox w50">
                    <input type="email" required>
                    <span>Email Address</span>
                </div>
                <div class="contactInputBox w100">
                    <textarea name="" required></textarea>
                    <span>Write your message here...</span>
                </div>
                <div class="contactInputBox w50">
                    <input type="submit" value="Send">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection