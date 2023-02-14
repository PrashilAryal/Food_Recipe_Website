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
        <form action="" method="">
            <div class="contactForm">
                <h2>Send a message</h2>
                <div class="contactFormBox">
                    <div class="contactInputBox w50">
                        <input type="text" name="customer_first_name" id="customer_first_name" autocomplete="off"
                            required>
                        <span>First Name</span>
                    </div>
                    <div class="contactInputBox w50">
                        <input type="text" name="customer_last_name" id="customer_last_name" autocomplete="off"
                            required>
                        <span>Last Name</span>
                    </div>
                    <div class="contactInputBox w50">
                        <input type="email" name="customer_email" id="customer_email" autocomplete="off" required>
                        <span>Email Address</span>
                    </div>
                    <div class="contactInputBox w50">
                        <input type="text" name="customer_subject" id="customer_subject" autocomplete="off" required>
                        <span>Subject</span>
                    </div>
                    <div class="contactInputBox w100">
                        <textarea name="customer_message" id="customer_message" autocomplete="off" required></textarea>
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