<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>

<body>
    <main class="page-wrap" id="app">
        <!-- Nav -->
        <nav id="nav">
            <ul>
                @auth
                <li>
                    <a href="{{ route('home') }}" class="active"><span class="icon fa-home"></span></a>
                </li>
                @else
                <li>
                    <a href="{{ route('welcome') }}"><span class="icon fa-home"></span></a>
                </li>
                @endauth
                @guest
                <li>
                    <a href="{{ route('login') }}"><span class="icon fa-sign-in"></span></a>
                </li>
                <li>
                    <a href="{{ route('register') }}"><span class="icon fa-registered"></span></a>
                </li>
                @endguest
                <li><a href="gallery.html"><span class="icon fa-camera-retro"></span></a></li>
                <li><a href="generic.html"><span class="icon fa-file-text-o"></span></a></li>
            </ul>
        </nav>

        <!-- Main -->
        <section id="main">

            <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <h1>Hey, I'm Snapshot</h1>
                    <p>A fully responsive gallery template by <a href="https://templated.co">TEMPLATED</a></p>
                    <ul class="actions">
                        <li><a href="#galleries" class="button alt scrolly big">Continue</a></li>
                    </ul>
                </div>
            </section>

            <!-- Gallery -->
            <section id="galleries">

                <!-- Photo Galleries -->
                <div class="gallery">
                    <header class="special">
                        <h2>What's New</h2>
                    </header>
                    <div class="content">
                        <div class="media">
                            <a href="images/fulls/01.jpg"><img src="images/thumbs/01.jpg" alt="" title="This right here is a caption." /></a>
                        </div>
                        <div class="media">
                            <a href="images/fulls/05.jpg"><img src="images/thumbs/05.jpg" alt="" title="This right here is a caption." /></a>
                        </div>
                        <div class="media">
                            <a href="images/fulls/09.jpg"><img src="images/thumbs/09.jpg" alt="" title="This right here is a caption." /></a>
                        </div>
                        <div class="media">
                            <a href="images/fulls/02.jpg"><img src="images/thumbs/02.jpg" alt="" title="This right here is a caption." /></a>
                        </div>
                        <div class="media">
                            <a href="images/fulls/06.jpg"><img src="images/thumbs/06.jpg" alt="" title="This right here is a caption." /></a>
                        </div>
                        <div class="media">
                            <a href="images/fulls/10.jpg"><img src="images/thumbs/10.jpg" alt="" title="This right here is a caption." /></a>
                        </div>
                        <div class="media">
                            <a href="images/fulls/03.jpg"><img src="images/thumbs/03.jpg" alt="" title="This right here is a caption." /></a>
                        </div>
                        <div class="media">
                            <a href="images/fulls/07.jpg"><img src="images/thumbs/07.jpg" alt="" title="This right here is a caption." /></a>
                        </div>
                    </div>
                    <footer>
                        <a href="gallery.html" class="button big">Full Gallery</a>
                    </footer>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact">
                <!-- Social -->
                <div class="social column">
                    <h3>About Me</h3>
                    <p>Mus sed interdum nunc dictum rutrum scelerisque erat a parturient condimentum potenti dapibus
                        vestibulum condimentum per tristique porta. Torquent a ut consectetur a vel ullamcorper a
                        commodo a mattis ipsum class quam sed eros vestibulum quisque a eu nulla scelerisque a elementum
                        vestibulum.</p>
                    <p>Aliquet dolor ultricies sem rhoncus dolor ullamcorper pharetra dis condimentum ullamcorper rutrum
                        vehicula id nisi vel aptent orci litora hendrerit penatibus erat ad sit. In a semper velit
                        eleifend a viverra adipiscing a phasellus urna praesent parturient integer ultrices montes
                        parturient suscipit posuere quis aenean. Parturient euismod ultricies commodo arcu elementum
                        suspendisse id dictumst at ut vestibulum conubia quisque a himenaeos dictum proin dis purus
                        integer mollis parturient eros scelerisque dis libero parturient magnis.</p>
                    <h3>Follow Me</h3>
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    </ul>
                </div>

                <!-- Form -->
                <div class="column">
                    <h3>Get in Touch</h3>
                    <form action="#" method="post">
                        <div class="field half first">
                            <label for="name">Name</label>
                            <input name="name" id="name" type="text" placeholder="Name">
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" placeholder="Email">
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <ul class="actions">
                            <li><input value="Send Message" class="button" type="submit"></li>
                        </ul>
                    </form>
                </div>

            </section>

            <!-- Footer -->
            <footer id="footer">
                <div class="copyright">
                    &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>.
                </div>
            </footer>
        </section>
    </main>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.poptrox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('assets/js/skel.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>