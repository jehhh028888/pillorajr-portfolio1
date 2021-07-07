<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vicente Pillora Jr</title>

        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Stylesheet-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
        <style>
            .full-height{
                background: url("{{asset('assets/pics/bg-header.jpg')}}");
            }
        </style>
    </head>
    <body>
        <div class="full-height">
            <div class="nav">
                <div class="top-left links">
                    <a href="#header"><img src="{{ asset('assets/pics/VP.png') }}"></a> 
                </div> 
                <div class="top-right links">
                    <a href="#header">Home</a>
                    <a href="#about">About</a>
                    <a href="#skill">Skills</a>
                    <a href="#education">Education</a>
                    <a href="#experience">Experience</a>
                    <a href="#portfolio">Portfolio</a>
                    <a href="#contact">Contact</a>
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                    @endauth
                </div>    
            </div>
    
            <div class="content" id="header">
                <div class="title">
                    <p>Creating Designs <br /> For an Unending Innovation</p>
                    <p class="links">
                        <a href ="#about" class="about">Get to Know Me</a>
                        <a href ="#contact" class="contact">Contact me</a>
                    </p>
                </div>    
            </div>
        </div>

        <div class="content" id="about">
            <div class="info">
                <div class="inform">
                    <h2>Hi, I'm Vicente G. Pillora. Jr.,</h2>
                    <p>And I love to create beautiful and efficient websites as a good practice in my studies. I love going in every details from the website's concept, design and the process of launching the program. I also like to learn more about web design and also some application design which I can use to create something that can benefit in the future.</p>
                </div>

                <div class="inform">
                    <p class="links">
                        <a href ="#skill" class="skills">Skills</a>
                        <a href ="#education" class="educ">Education</a>
                        <a href ="#experience" class="exp">Experience</a>
                        <a href ="#portfolio" class="port">Portfolio</a>
                    </p>
                </div>
                    
                <div class="img">
                    <img src="{{ asset('assets/pics/Pillora.jpg') }}">
                </div>
            </div>
        </div>

        <div class="content" id="skill">
            <h1>SKILLS</h1>
        </div>

        <div class="content" id="education">
            <h1 class="flex-center">EDUCATION</h1>
            <p class="flex-center">Through the years in my life I experience knowledge that really strengthen my<br /> skills and my confidence to reach my goals</p>
            <!-- Schools -->
            <div class="polaroid">
                <p class="logo"><img src="{{ asset('assets/pics/TMES.png')}}"></p>
                <div class="container">
                    <p><b>School Name:</b> Teodora Moscoso Elementary School</p>
                    <p><b>Year Started:</b> 2011</p>
                    <p><b>Year Graduated:</b> 2012</p>
                </div>
            </div>

            <div class="polaroid">
                <p class="logo"><img src="{{ asset('assets/pics/ADNU.png')}}"></p>
                <div class="container">
                    <p><b>School Name:</b> Ateneo de Naga Junior High School</p>
                    <p><b>Year Started:</b> 2012</p>
                    <p><b>Year Graduated:</b> 2016</p>
                </div>
            </div>

            <div class="polaroid">
                <p class="logo"><img src="{{ asset('assets/pics/ADNU.png')}}"></p>
                <div class="container">
                    <p><b>School Name:</b> Ateneo de Naga Senior High School</p>
                    <p><b>Year Started:</b> 2016</p>
                    <p><b>Year Graduated:</b> 2018</p>
                </div>
            </div>

            <div class="polaroid">
                <p class="logo"><img src="{{ asset('assets/pics/ADNU.png')}}"></p>
                <div class="container">
                    <p><b>School Name:</b> Ateneo de Naga University</p>
                    <p><b>Year Started:</b> 2018</p>
                    <p><b>Year Graduated:</b> 2022</p>
                </div>
            </div>
        </div>

        <div class="content" id="experience">
            <h1>EXPERIENCE</h1>
        </div>

        <div class="content" id="portfolio">
            <h1>PORTFOLIO</h1>
        </div>

        <div class="content" id="contact">
            <h1 class="flex-center">Contact Information</h1>
            <p class="flex-center">For any type of online project please don't hesitate to get in touch with me. The fastest way is to <br />send me your message using the following email <a href="#">vpillorajr@gbox.adnu.edu.ph</a></p>
            <form method="post" action="/send"  class="flex-center">
                @csrf
                <input type="text" name="name" placeholder="Name"/>
                <input type="text" name="email" placeholder="Email"/>
                <textarea name="content" placeholder="Project Informations" class="body"></textarea>
                <button type="submit" class="submit">Send Email</button>
            </form>
        </div>
    </body>
</html>
