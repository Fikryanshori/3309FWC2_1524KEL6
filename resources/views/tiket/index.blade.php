<!DOCTYPE HTML>
<!--
  Escape Velocity by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Reservasi.id</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  </head>
  <body class="homepage">
    <div id="page-wrapper">

      <!-- Header -->
        <div id="header-wrapper" class="wrapper">
          <div id="header">

            <!-- Logo -->
              <div id="logo">
                <h1><a href="/">Reservasi dot com</a></h1>
                <p>Tujuan Penerbangan Domestik Terbaik</p>
              </div>

            <!-- Nav -->
              <nav id="nav">
                <ul>
                  <li class="current"><a href="/">Home</a></li>
                  <li>
                    <a href="#">Tiket</a>
                    <ul>
                      <li><a href="/tiket">Pesan Tiket</a></li>
                      <li><a href="/cektiket">Cek Keberangkatan</a></li>
                      <li><a href="/jadwal">Jadwal</a></li>
                      <li><a href="/cekjadwal">Jadwal Keberangkatan</a></li>
<!--                       <li>
                        <a href="#">Sed consequat</a>
                        <ul>
                          <li><a href="#">Lorem dolor</a></li>
                          <li><a href="#">Amet consequat</a></li>
                          <li><a href="#">Magna phasellus</a></li>
                          <li><a href="#">Etiam nisl</a></li>
                          <li><a href="#">Sed feugiat</a></li>
                        </ul>
                      </li> -->
                      <!-- <li><a href="#">Nisl tempus</a></li> -->
                    </ul>
                  </li>
                  <!-- <li><a href="left-sidebar.html">Left Sidebar</a></li>
                  <li><a href="right-sidebar.html">Right Sidebar</a></li> -->
                  <li><a href="/masuk">Loggout</a></li>
                </ul>
              </nav>

          </div>
        </div>

      <!-- Intro -->
        

      <!-- Main -->
        <div class="wrapper style2">
          <div class="title">Pesan Tiket</div>
          <div id="main" class="container">

            <!-- Image -->
              <!-- <a href="#" class="image featured">
                <img src="images/pic01.jpg" alt="" />
              </a> -->

            <!-- Features -->
              <div class="border_box"><br><br>
    <form method="POST" action="/cektiket">
          
          Tujuan : 
          <select name="tujuan">
            <option value="0" selected="">- Pilih Tujuan -</option>
      <option value="Jakarta">Jakarta</option><option value="Bandung">Bandung</option>  </select>
          <input type="submit" value="Cek">
          </form><br><br>
      </div>

          </div>
        </div>

      <!-- Footer -->
        <div id="footer-wrapper" class="wrapper">
          <div class="title">The Rest Of It</div>
          <div id="footer" class="container">
            <header class="style1">
              <h2>Jadi ...</h2>
              <p>
                Tunggu apa lagi? Pesan tiket mu sekarang dan nikmati kenyamanan bepergiannmu
              </p>
            </header>
            <hr />
            <div class="row 150%">
              <div class="6u 12u(mobile)">


                <!-- Contact -->  

            </div>
            <hr />
          </div>
          <div id="copyright">
            <ul>
              <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
          </div>
        </div>

    </div>

    <!-- Scripts -->

      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.dropotron.min.js') }}"></script>
      <script src="{{ asset('assets/js/skel.min.js') }}"></script>
      <script src="{{ asset('assets/js/skel-viewport.min.js') }}"></script>
      <script src="{{ asset('assets/js/util.js') }}"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="{{ asset('assets/js/main.js') }}"></script>

  </body>
</html>