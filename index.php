<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS BESAR PWEB</title>
    <link rel="stylesheet" href="TA.css" />
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
      <div class="nav content">
        <div class="logo">
          <img src="logo sma 30.png" />
          <span class="logo-text">SMA NEGERI 30 JAKARTA</span>
        </div>
        <input type="checkbox" id="check">
        <div class="btn">
          <label for="check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        <div class="menu">
          <ul>
            <li><a href="index.php">Beranda</a></li>
            <li class="profil">
              <a href=" " class="dropbtn">Profil</a> <i class="fas fa-angle-down"></i></a>
              <div class="dropdown-content">
                <a href="profil.php">Profil</a>
                <a href="sejarah.php">Sejarah Singkat</a>
                <a href="visi misi.php">Visi Misi</a>
              </div>
            </li>
            <li><a href="fasilitas.php">Fasilitas</a></li>
            <li class="ppdb">
              <a href=" " class="dropbtn">PPPDB</a> <i class="fas fa-angle-down"></i></a>
              <div class="dropdown-content">
                <a href="https://ppdb.jakarta.go.id/#/0304/sekilas">Prestasi</a>
                <a href="https://ppdb.jakarta.go.id/#/0302/sekilas">Afirmasi</a>
                <a href="https://ppdb.jakarta.go.id/#/0307/sekilas">Zonasi</a>
                <a href="https://ppdb.jakarta.go.id/#/0300/sekilas"
                  >Tahap Kedua</a
                >
              </div>
            </li>
            <li><a href="informasi.php">Informasi</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- untuk beranda-->
    <div class="beranda">
      <div class="banner">
        <img src="beranda.jpg" />
      </div>
      <div class="banner">
        <img src="beranda0.jpg" />
      </div>
      <div class="banner">
        <img src="beranda2.jpg" />
      </div>
      <script src="slider.js"></script>
      <div class="kolom">
        <h1>Selamat Datang Di SMAN 30 Jakarta</h1>
        <p>
          SMA Negeri 30 Jakarta menerapkan Kurikulum Merdeka sebagai bentuk
          komitmen menyelanggarakan pendidikan yang tuntas, berkualitas dan
          bertumpu pada penguatan Profil Pelajar Pancasila dalam proses belajar
          mengajar
        </p>
      </div>

      <div class="waktu">
        <span id="current-time"></span>
        <script src="index.js"></script>
      </div>
    </div>

    <!--untuk footer -->
    <footer class="footer-distributed">
      <div class="footer-left">
        <img src="logo sma 30.png">
        <p class="footer-links">
            <a href="index.html">Beranda</a>
            |
            <a href="profil.html">Profil</a>
            |
            <a href="fasilitas.html">Fasilitas</a>
            |
            <a href="informasi.html">Informasi</a>
        </p>
        
        <p class="footer-company-name">© 1987 SMA NEGERI 30 JAKARTA </p>
      </div>
      
      <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
              <p><span>JL. JEND. A. YANI, Cempaka Putih Timur, Kec. Cempaka Putih, Kota Jakarta Pusat, Dki Jakarta, dengan kode pos 10510.</span>
                Sandika Ariyanto</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>0123-4567-8910</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="https://www.samuelpasaribu.com">dapo@kemdikbud.go.id</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
            <span>About SMA NEGERI 30 JAKARTA</span>
            We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
        <div class="footer-icons">
            <a href="https://www.instagram.com/sman_30/"><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fa-regular fa-envelope"></i></a>
            <a href=""><i class="fa-solid fa-fax"></i></a>
            <a href=""><i class="fa-solid fa-phone"></i></a>
            <a href=""><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </footer>
  </body>
</html>
