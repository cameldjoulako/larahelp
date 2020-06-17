@extends('layout')

@section('content')



    <header id="header">
        <div id="navigation">
            <div id="logo">
                <img src="images/logo.png" alt="logo du site" id="header-img" id="logo-img">
            </div>

        </div>

        <div class="header-text">
            <h1 class="hero-title">
                we are <br><span>Homedeve !</span>
            </h1>
            <p class="hero-description">
                A Software development Start-Up, We create outstanding enterprise web, Desktop &amp; mobile app solutions.
            </p>
            <a class="button" href="#about"><span class="text"><span class="text">Find Out More</span></span></a>
        </div>
    </header>

    <section class="about-us" id="about">
        <h1 class="section-title">About Us</h1>
        <p class="section-content">
            Based in Cameroon, We collaborate closely with clients and partners around the globe, solving their digital problems and fitting their business needs with cutting-edge technologies. We aim to create long term partnerships by providing high quality cost-effective entreprise solutions backed up by over eight years in the field.
        </p>
        <a href="" id="about-us" class="button2"><span class="text">meet our team</span></a>
    </section>

    <section class="training-section" id="training">

        <h1 class="training-title">Training</h1>
        <div class="video-section">
            <div class="video-section-bg"></div>
            <video src="videos/code.mp4" id="video" autoplay loop></video>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="contact-info">
            <h1 class="contact-title">CONTACT US</h1>
            <h5>&nbsp; LOCATION</h5>
            <h6>Douala, Cameroon</h6>
            <h5> &nbsp; PHONE</h5>
            <h6>(+237) 6985421580</h6>
            <h5>&nbsp; EMAIL</h5>
            <h6>homedevemedia@gmail.com</h6>
        </div>

        <div class="contact-form">
            <h4>Leave a comment</h4>
            <form action="https://www.freecodecamp.com/email-submit" id="form" method="post">
                <label for="name">
                    <input type="name" placeholder="Your name">
                </label>

                <label for="email">
                    <input type="email" placeholder="Your email" id="email" required>
                </label>

                <label for="message">
                    <textarea name="message" id="" placeholder="Your Message" cols="30" rows="10"></textarea>
                </label>
                <label for="">
                    <input type="submit" id="submit" value="Send">
                </label>
            </form>
        </div>
    </section>

    <footer>
        <h5>
            Copyright © by <span> Camel Djoulako</span>  2019. All right reserved.
        </h5>
    </footer>
@endsection
