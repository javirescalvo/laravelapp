<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->
<html>
<head>
    <title>Big Picture by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="{{asset('assets/js/ie/html5shiv.js')}}"></script><![endif]-->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!--[if lte IE 8]><link rel="stylesheet" href="{{asset('assets/css/ie8.css')}}" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="{{asset('assets/css/ie9.css')}}" /><![endif]-->
</head>
<body>

<!-- Header -->
<header id="header">
    <h1>Big Picture</h1>
    <nav>
        <ul>
            <li><a href="#intro">Intro</a></li>
            <li><a href="#one">What I Do</a></li>
            <li><a href="#two">Who I Am</a></li>
            <li><a href="#work">My Work</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- Intro -->
<section id="intro" class="main style1 dark fullscreen">
    <div class="content">
        @yield('content')
    </div>
</section>

<!-- One -->
<section id="one" class="main style2 right dark fullscreen">
    <div class="content box style2">
        <header>
            <h2>What I Do</h2>
        </header>
        <p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
            Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu,
            id varius justo euismod in. Curabitur egestas consectetur magna.</p>
    </div>
    <a href="#two" class="button style2 down anchored">Next</a>
</section>

<!-- Two -->
<section id="two" class="main style2 left dark fullscreen">
    <div class="content box style2">
        <header>
            <h2>Who I Am</h2>
        </header>
        <p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
            Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu,
            id varius justo euismod in. Curabitur egestas consectetur magna.</p>
    </div>
    <a href="#work" class="button style2 down anchored">Next</a>
</section>

<!-- Work -->
<section id="work" class="main style3 primary">
    <div class="content">
        <header>
            <h2>My Work</h2>
            <p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
                Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis
                arcu, id varius justo euismod in. Curabitur egestas consectetur magna vitae.</p>
        </header>

        <!-- Gallery  -->
        <div class="gallery">
            <article class="from-left">
                <a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a>
            </article>
            <article class="from-right">
                <a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a>
            </article>
            <article class="from-left">
                <a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" title="Air Lounge" alt="" /></a>
            </article>
            <article class="from-right">
                <a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" title="Carry on" alt="" /></a>
            </article>
            <article class="from-left">
                <a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a>
            </article>
            <article class="from-right">
                <a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" title="Bent IX" alt="" /></a>
            </article>
        </div>

    </div>
</section>

<!-- Contact -->
<section id="contact" class="main style3 secondary">
    <div class="content">
        <header>
            <h2>Say Hello.</h2>
            <p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.</p>
        </header>
        <div class="box">
            <form method="post" action="#">
                <div class="field half first"><input type="text" name="name" placeholder="Name" /></div>
                <div class="field half"><input type="email" name="email" placeholder="Email" /></div>
                <div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" /></li>
                </ul>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="footer">

    <!-- Icons -->
    <ul class="actions">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
        <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
    </ul>

    <!-- Menu -->
    <ul class="menu">
        <li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
    </ul>

</footer>

<!-- Scripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.poptrox.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
<script src="{{asset('assets/js/skel.min.js')}}"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
<!--[if lte IE 8]><script src="{{asset('assets/js/ie/respond.min.js')}}"></script><![endif]-->
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>