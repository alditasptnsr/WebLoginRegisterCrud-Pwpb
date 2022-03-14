<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMKN 1 CIAMIS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style-web.css" >
  </head>
  <body>
    <!-- navigasi -->
    <nav
      class="navbar navbar-expand-lg navbar-blue bg-white shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="logo1.png" width="160" height="60">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#home">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile">PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kompetensikeahlian">KOMPETENSI KEAHLIAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentangkami">TENTANG KAMI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">KONTAK</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- banner -->
    <div class="container-fluid banner" id="home">
      <div class="container text-center">
        <h5 class="display-6"><b> Selamat Datang di Website Kami</h5>
        <h3 class="display-1">SMKN 1 CIAMIS</h3>
          <button type="button" class="btn btn-danger btn-lg"><a href="login.php">DAFTAR</a>
          </button>
        </a>
      </div>
    </div>

    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="profile">PROFILE</h2>
        <p>
          Sekolah Menengah Kejuruan Bidang Keahlian Bisnis-Manajemen, Pariwisata dan Teknologi Informasi dan Komunikasi, Melaksanakan pembelajaran berbasis Teknologi Informasi dan Komunikasi, Memenuhi fasilitas praktik dan bahan ajar sesuai dengan standar yang ditetapkan.
        </p>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-school fa-5x"></i></span>
            <h3 class="mt-3">Lulusan Berkualitas</h3>
            <p>
              SMKN 1 CIAMIS Telah mencetak lulusan berkualitas sesuai kebutuhan industri dengan program program sekolah juga teaching factory.
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-chalkboard fa-5x"></i></span>
            <h3 class="mt-3">Fasilitas Lengkap</h3>
            <p>
              SMKN 1 CIAMIS Memiliki Fasilitas Sarana yang Lengkap dan memadai untuk Menunjang proses pembelajaran.
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="fas fa-backpack fa-5x"></i
            ></span>
            <h3 class="mt-3">Guru Yang Berkompeten</h3>
            <p>
              SMKN 1 CIAMIS Memiliki Guru - Guru berkompeten dalam bidangnya masing - masing.
            </p>
          </div>
        </div>
      </div>
    </div>

    <ul class="nav bg-light justify-content-center">
       <div class="container-banner">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://smkn1ciamis.id/assets/images/slider/file_1620187581.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://smkn1ciamis.id/assets/images/slider/file_1538019015.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://smkn1ciamis.id/assets/images/slider/file_1617611060.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- portofolio -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="kompetensikeahlian">KOMPETENSI KEAHLIAN</h2>
        <p>
          Terdapat beberapa jurusan keunggulan SMKN 1 CIAMIS
        </p>

        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://dwiguna.info/wp-content/uploads/2019/05/rpl.jpeg"
                width="350"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Rekayasa Perangkat Lunak</h5>
                <p class="card-text">
                   <small>Rekayasa Perangkat Lunak SMK Negeri 1 Ciamis   bertekad untuk mencetak tenaga-tenaga ahli dan profesional yang handal dan siap berkompetisi di bidang Komunikasi dan Informatika (IT).</small>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://www.utopicomputers.com/wp-content/uploads/2019/10/Gambar-Multimedia.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Multimedia</h5>
                <p class="card-text">
                  <small>Multimedia SMK Negeri 1 Ciamis   bertekad untuk mencetak tenaga-tenaga ahli dan profesional yang handal dan siap berkompetisi di bidang Komunikasi dan Informatika (Penyiaran dan Multimedia).</small>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://www.mas-software.com/wp-content/uploads/2020/11/pengertian-Akuntansi.jpeg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Akuntansi</h5>
                <p class="card-text">
                  <small>Mewujudkan Kompetensi Keahlian Akuntansi yang berkualitas dan religius di bidang bisnis dan manajemen untuk menanggapi persaingan di era global.</small>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://belajarekonomi.com/wp-content/uploads/2020/08/Strategi-Pemasaran-Untuk-Melambungkan-Bisnis-Anda.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Pemasaran</h5>
                <p class="card-text">
                  <small>Menjadi lembaga diklat yang menghasilkan sumber daya manusia yang profesional  yang mampu berkompetisi di tingkat nasional dan internasional.</small>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://proxsisgroup.com/wp-content/uploads/2019/08/Management-Office-1024x699.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Administrasi Perkantoran</h5>
                <p class="card-text">
                 <small> Mencetak calon sekretaris, dan profesional.</small>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://rencanamu.id/assets/file_uploaded/blog/1566194439-7a39c1bb-7.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Akomodasi Perhotelan</h5>
                <p class="card-text">
                  <small>Menjadi lembaga diklat yang menghasilkan sumber daya manusia yang profesional  yang mampu berkompetisi di tingkat nasional dan internasional.</small>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://www.ican-education.com/blog/wp-content/uploads/2021/07/universitas-tata-boga-di-luar-negeri.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Jasa Boga</h5>
                <p class="card-text">
                  <small>Menjadi lembaga diklat yang menghasilkan sumber daya manusia yang profesional yang mampu berkompetisi di tingkat nasional dan internasional.</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5">
      <div class="container">
        <h2 class="display-3 text-center" id="tentangkami">Tentang Kami</h2>
        <p class="text-center">
          Sekolah Menengah Kejuruan Bidang Keahlian Bisnis-Manajemen, Pariwisata dan Teknologi Informasi dan Komunikasi.
        </p>
        <div class="clearfix pt-5">
          <img
            src="https://smkn1ciamis.id/assets/images/smkn1ciamis.jpg"
            class="col-md-6 float-md-end mb-3 crop-img"
            width="300"
            height="300"
          />
          <p>
            1. Sekolah Menengah Kejuruan Bidang Keahlian Bisnis-Manajemen, Pariwisata dan Teknologi Informasi dan Komunikasi, Melaksanakan pembelajaran berbasis Teknologi Informasi dan Komunikasi, Memenuhi fasilitas praktik dan bahan ajar sesuai dengan standar yang ditetapkan.
          </p>
          <p>
            2. SMKN 1 CIAMIS JUARA 1 LOMBA SEKOLAH SEHAT BERKARAKTER TINGKAT NASIONAL TAHUN 2019 UNTUK KATEGORI BEST PERFORMANCE
          </p>
          <p>
            3. SMKN 1 Ciamis menjuarai Lomba Pembukuan Akuntansi Tingkat SMK Se-Jawa Barat yang dilaksanakan oleh HMJ DIKMI Universitas Siliwangi
          </p>
          <p>
            4. LOMBA SEKOLAH SEHAT BERKARAKTER TINGKAT NASIONAL TAHUN 2019.
          </p>
        </div>
      </div>
    </div>
 <center>
 	<br><hr>
    <div class="col-md-6">
            <section class="course-finder" style="height: 418px;">
                <h1 class="section-heading text-highlight"><span class="line">Kepala SMKN 1 CIAMIS</span></h1>
                <div class="section-content">
                    <div style="float: left;">
                        <img style="width: 185px; border-radius:3%"
                            src="https://smkn1ciamis.id/assets/images/new-kepsek.jpeg">
                    </div>
                    <br><br>
                    <div style="float: right; font-family: 'open sans','Roboto',sans-serif; font-size: 13px">
                        <p><i class="fa fa-quote-left"></i>
                        <h5>Dengan hadirnya situs SMK Negeri 1 Ciamis ini,<br>semoga dapat memberikan
                            informasi<br>kepada khalayak tentang SMK Negeri 1 Ciamis.<br> SMK Bisa, SMKN 1 Ciamis Yakin
                            Bisa.</h5>
                        </p>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <!-- <p style="font-size: 14px; font-family: 'open sans',Roboto,sans-serif;">Drs. Joko Maryoto</p> -->
                </div>
                <!--//section-content-->
            </section>
            <!--//course-finder-->
            <br><hr>
            <section class="video">
                                <h1 class="section-heading text-highlight"><span class="line">Profile SMK NEGERI 1 CIAMIS</span></h1>
                <div class="carousel-controls">
                    <a class="prev" href="#" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                    <a class="next" href="#" data-slide="next"><i class="fa fa-caret-right"></i></a>
                </div>
                <!--//carousel-controls-->
                <div class="section-content">
                    <div id="videos-carousel" class="videos-carousel carousel slide"></div>
                    <div class="carousel-inner">
                        <div class="item active">
                            <iframe class="video-iframe" height="450px" width="500px" src="https://www.youtube.com/embed/FZmbSq2W1hY"
                                frameborder="0" allowfullscreen=""></iframe>
                        </div>
                        <!--//item-->
                    </div>
                    <!--//carousel-inner-->
                    <p class="description"></p>
                </div>
                <!--//carousel-controls-->
                <div class="section-content">
                    <div id="videos-carousel" class="videos-carousel carousel slide"></div>
                    <div class="carousel-inner">
                        <div class="item active">
                            <iframe class="video-iframe" height="450px" width="500px" src="https://www.youtube.com/embed/AGxBaSncqC0"
                                frameborder="0" allowfullscreen=""></iframe>
                        </div>
                        <!--//item-->
                    </div>
                    <!--//carousel-inner-->
                    <p class="description"></p>
                </div>
                <!--//section-content-->
                            </section>
            <!--//video-->
        </div>
        <br><br><hr>
        <div class="col-md-3">
            <section class="links" style="height: 400px">
                <h1 class="section-heading text-highlight"><span class="line">Referensi :</span></h1>
                <div class="section-content">
                    <p class="location"><a href="http://e-lib.smkn1cms.net/" target="_blank"><i
                                class="fa fa-caret-right"></i>Perpustakaan SMKN 1 CIAMIS</a></p>
                    <p class="location"><a href="http://lms.smkn1cms.net/" target="_blank"><i
                                class="fa fa-caret-right"></i>LMS SMKN 1 CIAMIS</a></p>
                    <p class="location"><a href="http://ppdb.smkn1ciamis.id/" target="_blank"><i
                                class="fa fa-caret-right"></i>PPDB SMKN 1 CIAMIS</a></p>
                    <p class="location"><a href="http://psmk.kemdikbud.go.id/" target="_blank"><i
                                class="fa fa-caret-right"></i>PSMK KEMDIKBUD</a></p>
                    <p class="location"><a href="http://files.ictcenterciamis.net/" target="_blank"><i
                                class="fa fa-caret-right"></i>ICT Center Ciamis</a></p>
                    <p class="location"><a href="http://alumni.smkn1cms.net/" target="_blank"><i
                                class="fa fa-caret-right"></i>Website Alumni</a></p>
                    <p class="location"><a href="http://tefa.smkn1ciamis.id/" target="_blank"><i
                                class="fa fa-caret-right"></i>Teaching Factory</a></p>
                </div>
                <!--//section-content-->
            </section>
        </center>
            <!--//links-->
            <div id="slider">
                <h1 class="section-heading text-highlight font">
                            </div>
                        </div>
                    </li>
                                    </ul>
            </div>
        </div>
        <!--//col-md-3-->
    </div>

   
    <!--//cols-wrapper-->
    <hr>
    <div class="">
        <center>
            <h1 class="section-heading text-highlight font"><span class="line">MITRA PRAKERIN SMK NEGERI 1 CIAMIS</span>
            </h1>
        </center>
    </div><br><br>
    <section class="awards">
        <div id="awards-carousel" class="awards-carousel carousel mitra">
            <div class="carousel-inner">
                <div class="item active">
                    <div id="slides">
                        <ul>
                                                        <a style="padding-right: 5%; padding-left: 5%;" target="_blank"
                                href="http://p4tkipa.kemdikbud.go.id/p4tkipa/"><img style="height: 80px; width: 70px"
                                    class="img-responsive"
                                    src="https://smkn1ciamis.id/assets/images/logo_mitra/p4tkipa.png"
                                    alt=""></a>
                                                        <a style="padding-right: 5%; padding-left: 5%;" target="_blank"
                                href="http://www.inti.co.id/index.php/id/"><img style="height: 80px; width: 70px"
                                    class="img-responsive"
                                    src="https://smkn1ciamis.id/assets/images/logo_mitra/inti.png"
                                    alt=""></a>
                                                        <a style="padding-right: 5%; padding-left: 5%;" target="_blank"
                                href="http://www.pa-ciamis.go.id/"><img style="height: 80px; width: 70px"
                                    class="img-responsive"
                                    src="https://smkn1ciamis.id/assets/images/logo_mitra/logopa1.png"
                                    alt=""></a>
                                                        <a style="padding-right: 5%; padding-left: 5%;" target="_blank"
                                href="https://mds.mataharimall.com/"><img style="height: 80px; width: 70px"
                                    class="img-responsive"
                                    src="https://smkn1ciamis.id/assets/images/logo_mitra/Matahari_1.png"
                                    alt=""></a>
                                                        <a style="padding-right: 5%; padding-left: 5%;" target="_blank"
                                href="https://www.indonesian-aerospace.com/"><img style="height: 80px; width: 70px"
                                    class="img-responsive"
                                    src="https://smkn1ciamis.id/assets/images/logo_mitra/download.png"
                                    alt=""></a>
                                                        <a style="padding-right: 5%; padding-left: 5%;" target="_blank"
                                href="htttp://"><img style="height: 80px; width: 70px"
                                    class="img-responsive"
                                    src="https://smkn1ciamis.id/assets/images/logo_mitra/cropped-logo-puskesmas-1.png"
                                    alt=""></a>
                                                        <a style="padding-right: 5%; padding-left: 5%;" target="_blank"
                                href="http://"><img style="height: 80px; width: 70px"
                                    class="img-responsive"
                                    src="https://smkn1ciamis.id/assets/images/logo_mitra/Logo-Kementerian-Kesehatan_.png"
                                    alt=""></a>
                                                        <a style="padding-right: 5%; padding-left: 5%;" target="_blank"
                                href="http://"><img style="height: 80px; width: 70px"
                                    class="img-responsive"
                                    src="https://smkn1ciamis.id/assets/images/logo_mitra/Bulog__.png"
                                    alt=""></a>
                                                    </ul>
                    </div>
                </div>
                <!--//item-->
                <div class="carousel-controls" id="buttons">
                    <a class="left carousel-control" href="#">
                    	<img id="next">
                    </a>
                    </a>
                    <a class="right carousel-control" href="#">
                    	<img id="prev">
                    </a>
                </div>
            </div>
            <!--//carousel-inner-->
        </div>
    </section>
    <br><br>

</div>
<!--//content-->
<script>
$('#myModal').modal('show');
</script>

<script>
$(document).ready(function() {
    //rotation speed and timer
    var speed = 2500;
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();

    $(window).resize(function() {
        var box = $('.boxx');
        var box_width = box.width();
        $('#slides').css({
            'width': box_width
        });
        $('#slides ul,.slide').css({
            'width': box_width
        });
        resetSlides();
        location.reload();
    });

    //if user clicked on prev button
    $('#buttons a').click(function(e) {
        //slide the item
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 400, function() {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        if (e.target.id == next) {
            container.stop().animate({
                'next': item_width * -2
            }, 400, function() {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
        //cancel the link behavior            
        return false;
    });
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container.parent().mouseenter(function() {
        clearInterval(run);
    }).mouseleave(function() {
        run = setInterval(rotate, speed);
    });

    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin
function rotate() {
    $('#next').click();
}
</script>
</body>
    <!-- ******FOOTER****** --> 
    <hr>
    <footer class="footer contact" id="kontak">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner" class="location">
                        <h3 class="location">Tentang Kami</h3>
                        <ul>
                            <li><a href="#" onclick="sejarah()" style="font-family: 'open sans', 'Roboto', sans-serif;"><i class="fa fa-caret-right"></i>Sejarah</a></li>
                            <li><a href="#" onclick="visimisi()"><i class="fa fa-caret-right"></i>Visi & Misi</a></li>
                            <li><a href="#" onclick="keunggulan()" style="font-family: 'open sans', 'Roboto', sans-serif;"><i class="fa fa-caret-right"></i>Keunggulan</a></li>
                            <li><a href="#" onclick="landasan()" style="font-family: 'open sans', 'Roboto', sans-serif;"><i class="fa fa-caret-right"></i>Landasan Hukum</a></li>
                            <li><a href="#" onclick="lokasi()" style="font-family: 'open sans', 'Roboto', sans-serif;"><i class="fa fa-caret-right"></i>Lokasi Sekolah</a></li>
                            <li><a href="#" style="font-family: 'open sans', 'Roboto', sans-serif;"><i class="fa fa-caret-right"></i>Hubungi Kami</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-md-6 col-sm-8 newsletter">
                    <div class="footer-col-inner">
                        <h3 class="location">SMKN 1 CIAMIS</h3>
                        <p style="font-family: 'open sans', 'Roboto', sans-serif;">Sekolah Menengah Kejuruan Bidang Keahlian Bisnis-Manajemen, Pariwisata dan Teknologi Informasi dan Komunikasi.</p>
                       <!--  <form class="subscribe-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <input class="btn btn-theme btn-subscribe" type="submit" value="Subscribe">
                        </form> -->
                        
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col--> 
                <div class="footer-col col-md-3 col-sm-12 contact">
                    <div class="footer-col-inner">
                        <h3>Kontak Kami</h3>
                        <div class="row">
                            <p class="adr clearfix col-md-12 col-sm-4">
                                <i class="fa fa-map-marker pull-left"></i>        
                                <span class="adr-group pull-left">       
                                    <span style="font-family: 'open sans', 'Roboto', sans-serif;">Jl.Jendral Soedirman No.269</span><br>
                                    <span style="font-family: 'open sans', 'Roboto', sans-serif;">Ciamis,Jawa Barat</span><br>
                                    <span style="font-family: 'open sans', 'Roboto', sans-serif;">46215</span><br>
                                    <span style="font-family: 'open sans', 'Roboto', sans-serif;">Indonesia</span>
                                </span>
                            </p>
                            <p class="location col-md-12 col-sm-4"><i class="fa fa-phone"></i>(0265) 771204</p>
                            <p class="location col-md-12 col-sm-4" style="font-family: 'open sans', 'Roboto', sans-serif;"><i class="fa fa-envelope"></i><a href="#">surat@smkn1cms.net</a></p>  
                        </div> 
                    </div><!--//footer-col-inner-->            
                </div><!--//foooter-col-->   
                </div>   
            </div>        
        </div><!--//footer-content-->
        <br><br>
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <center><small class="copyright col-md-6 col-sm-12 col-xs-12" style="font-family: 'open sans', 'Roboto', sans-serif;">Copyright @ 2022 SMKN 1 Ciamis | Website template by <a href="#">Aldita Septinasari</a></small></center>
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
        <!-- Javascript -->          
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/css/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/css/bootstrap.min.js"></script> 
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/css/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/css/back-to-top.js"></script>
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/css/jquery.placeholder.js"></script>
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/css/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/css/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/css/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/css/main.js"></script> 
    <!-- <script type="text/javascript" src="https://smkn1ciamis.id/assets/scroll.js"></script>  -->
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/js/aplication/slider.js"></script> 
    <script type="text/javascript" src="https://smkn1ciamis.id/assets/js/aplication/modal.js"></script>      

<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;"><i class="fa fa-angle-up"></i></div>



<!-- TAMPIL MODAL -->

<!-- LOKASI -->
<div class="modal fade" id="modallokasi" role="dialog">
    <div style="width: 60%;" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6091ba">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-tittle" style="font-family: Arial,Helvetica,sans-serif; color: white;">Lokasi SMKN 1 CIAMIS</h3>
                </div>
                <div style="height: 520px;" class="modal-body form">
                <form id="formvisimisi">
                        <div class="col-lg-12"><hr>
                            <div id="map_canvas" style="width:100%; height:400px;"></div> 
                        </div>
                        <br>
                 </form>
                </div>
                <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- END LOKASI -->

<script type="text/javascript">
    
  function keunggulan()
  {
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string
      $('#unggul').modal('show'); // show bootstrap modal
  }
</script>

<!-- TAMPIL MODAL -->


<!-- KEUNGGULAN -->
<div class="modal fade" id="unggul" role="dialog">
    <div style="width: 60%;" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6091ba">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-tittle" style="font-family: Arial,Helvetica,sans-serif; color: white;">Keunggulan</h3>
            </div>
                <div style="height: 460px;" class="modal-body form">
                <form id="unggul">
                    <div class="col-lg-12">
                        <p><strong>Keunggulan SMK Negeri 1 Ciamis</strong><br>
                            Menjadi Sekolah Model SMK Bertaraf Internasioanal pada tahun 2018
                        </p>
                    </div>
                    <div class="col-lg-12"><hr></div><br>
                 </form>
                </div>
                <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- END -->

<!-- LANDASAN HUKUM -->
<div class="modal fade" id="modallandasan" role="dialog">
    <div style="width: 60%;" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6091ba">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-tittle" style="font-family: Arial,Helvetica,sans-serif; color: white;">LANDASAN HUKUM</h3>
            </div>
                <div style="height: 460px;" class="modal-body form">
                <form id="formvisimisi">
                    <div class="col-lg-12">
                        <p><strong>Landasan Hukum SMK Negeri 1 Ciamis</strong><br>
                            Menjadi Sekolah Model SMK Bertaraf Internasioanal pada tahun 2018
                        </p>
                    </div>
                    <div class="col-lg-12"><hr>
                        <li>Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional</li>
                        <li>Peraturan Pemerintah Nomor 32 Tahun 2013 tentang Perubahan Atas Peraturan Pemerintah Nomor 19 Tahun 2005 tentang Standar Nasional Pendidikan </li>
                        <li>Peraturan Menteri Pendidikan dan Kebudayan Nomor 20 Tahun 2016 tentang Standar Kompetensi Lulusan Pendidikan Dasar dan Menengah</li>
                        <li>Peraturan Menteri Pendidikan dan Kebudayan Nomor 21 Tahun 2016 tentang Standar Isi Pendidikan Dasar dan Menengah</li>
                        <li>Peraturan Menteri Pendidikan dan Kebudayan Nomor 22 Tahun 2016 tentang Standar Proses Pendidikan Dasar dan Menengah</li>
                        <li>Peraturan Menteri Pendidikan dan Kebudayan Nomor 23 Tahun 2016 tentang Standar Penilaian Pendidikan Dasar dan Menengah</li>
                        <li>Permen No. 24 tahun 2016 tentang KI/KD Pendidikan Dasar dan Menengah Kurikulum 2013</li>
                        <li>Permendikbud No. 60 Tahun 2014 Tentang Kerangka Dasar dan Struktur Kurikulum Sekolah Menengah Kejuruan / Madrasah Aliyah Kejuruan</li>
                        <li>Permen No. 61 tahun 2014 tentang KTSP</li>
                        <li>Permen No. 62 tahun 2014 tentang Ektrakurikuler</li>
                        <li>Permen No. 63 tahun 2014 tentang Pendidikan Kepramukaan</li>
                        <li>Permen No. 64 tahun 2014 tentang Peminatan</li>
                        <li>Permen No. 79 tahun 2014 tentang Muatan Lokal Kurikulum 2013</li>
                        <li>Permen No. 103 tahun 2014 tentang Pembelajaran pada Pendidikan Dasar dan Pendidikan Menengah</li>
                        <li>Permen No. 53 tahun 2016 tentang Penilaian Hasil Belajar</li>
                        <li>Permen No. 111 tahun 2014 tentang Bimbingan dan Konseling</li>
                        <li>Permen No. 144 tahun 2014 tentang Kriteria Kelulusan</li>
                        <li>Permen No. 159 tahun 2014 tentang Evaluasi Kurikulum</li>
                        <li>SK Dirjen Disdakmen SMK No. 130 Tahun 2017 tentang Struktur Kurikulum</li>
                        <li>Permendikbud No. 20 Tahun 2016 tentang Standar Kompetensi Lulusan</li>
                        <li>Permendikbud No. 21 Tahun 2016 tentang Standar Isi</li>
                        <li>Permendikbud No. 22 Tahun 2016 tentang Standar Proses</li>
                        <li>Permendikbud No. 23 Tahun 2016 tentang Standar Penilaian Pendidikan</li>
                        <li>Permendikbud No. 24 Tahun 2016 tentang Kompetensi Inti dan Kompetensi Dasar Pelajaran pada Kurikulum 2013</li>
                        <li>Panduan Penyusunan KTSP dari BNSP</li>
                        <li>SKKNI 2015 - 458 - Mobile Computer</li>
                        <li>SKKNI 2016 - 282 - Programmer Komputer</li>
                        <li>SKKNI Lain yang berlaku</li>
                        <li>SK Kepala Dinas Pendidikan Kab. Ciamis tentang Ijin Pembukaan Kompetensi Keahlian Rekayasa Perangkat Lunak</li>
                    </div><br>
                 </form>
                </div>
                <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- END LANDASAN -->

<!-- VISI DAN MISI -->
<div class="modal fade" id="modalvisimisi" role="dialog">
     <div style="width: 60%;" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6091ba">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-tittle" style="font-family: Arial,Helvetica,sans-serif; color: white;">VISI DAN MISI</h3>
            </div>
                <div style="height: 460px;" class="modal-body form">
                <form id="formvisimisi">
                        <div class="col-lg-12">
                            <p class="location"><strong>VISI</strong><br>
                                <ol>Menjadi Sekolah Model SMK Bertaraf Internasioanal pada tahun 2018</ol>
                            </p>
                        </div>
                        <div class="col-lg-12"><hr></div><br>
                            <div class="col-lg-12">
                                    <p class="location"><strong>MISI</strong><br>
                                    <p class="location"><ol>1. Bersikap profesional dalam melakukan segala tindakan dan perbuatan berdasarkan keimanan dan ketaqwaan kepada Alloh SWT</ol>
                                    <ol>2. Melaksanakan Sistem Manajemen Mutu ISO 9001-2008</ol>
                                    <ol>3. Melaksanakan pembelajaran dengan Bahasa Indonesia dan Bahasa Asing</ol>
                                    <ol>4. Melaksanakan pembelajaran berbasis Teknologi Informasi dan Komunikasi</ol>
                                    <ol>5. Memenuhi fasilitas praktik dan bahan ajar sesuai dengan standar yang ditetapkan</ol>
                                    <ol>6. Melaksanakan program-program Adiwiyata (Green School)</ol> 
                                    <ol>7. Meningkatkan hubungan kemitraan dengan dunia usaha/industri/istitusi pendidikan nasional dan internasional serta dengan alumni SMK Negeri 1 Ciamis</ol>
                                    <ol>8. Meningkatkan Kualitas/Mutu dan Relevansi Layanan PTK IPA melalui pelaksanaan sistem manajemen mutu, pengelolaan ketatausahaan dan rumah tangga lembaga.<br><br>Nilai-Nilai : Profesional, Kebersamaan, Akuntabel, Empati, Produktif, Inovatif, Demokratis, Belajar Sepanjang Hayat dan Kredibel.</ol></p>
                        </div>
                 </form>
                </div>
                <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- END VISI DAN MISI -->

<!-- SEJARAH SMK -->
<div class="modal fade" id="sejarah" role="dialog">
        <div style="width: 60%;" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #6091ba">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-tittle" style="font-family: Arial,Helvetica,sans-serif; color: white;">SEJARAH</h3>
                </div>
                <div style="height: 460px;" class="modal-body form">

                <form id="sejarah">
                    <div class="col-lg-12">
                            <p>SMK Negeri 1 Ciamis semula bernama SMEA Negeri Ciamis yang berlokasi di Jl. Ir. H. Juanda No. 304/35SMKN 1 Ciamis Tempo DoeloeCiamis, terdiri dari 13 ruang yang berdiri di atas tanah seluas 0,279 Ha yang dahulunya digunakan untuk Sekolah Dasar Sikuraja</p>
                            <div style="float: center;"><img style="height: 360px; width: 700px;" src="https://smkn1ciamis.id/assets/images/smkn1ciamis.jpg"></div><br>
                            <p>Tanah tersebut diperoleh dari Bupati Daswati II Ciamis melalui Surat Penyerahan Nomor: 6453/B.VI/Pem-69 Tanggal: 29 Desember 1969, sedangkan bangunan diperoleh dari Pemda Daswati II Ciamis dan sebagian lagi dari Proyek Depdikbud sebanyak 3 (tiga) ruang.</p>
                            <p>Pada tanggal 20 Agustus 1960 berdiri SMEA persiapan dengan status swasta yang izinnya dari Pemerintah Daswati II Ciamis.Untuk memenuhi kehendak masyarakat dan minat para pelajar yang hendak melanjutkan pendidikannya ke Sekolah Kejuruan bagian Pendidikan Ekonomi, perlu dibuka SMEA Negeri Ciamis</p>
                            <p>
                            Berdasarkan Usulan Kepala Inspektorat Pendidikan Ekonomi No. 213-II-4604 tanggal 30 Juli 1964, maka di Ciamis resmi berdiri SMEA Negeri, dengan S.K. Menteri Pendidikan dan Kebudayaan RI No. 326/B.3/Kedj tanggal 10 Agustus 1964.
                            Sesuai tuntutan akan peningkatan kualitas pendidikan, pada tahun 1989 SMEA Negeri Ciamis mendapatkanTampak depan bantuan pembangunan melalui Dana Loan ADB Voced II dengan lokasi pembangunan di Jl. Jend. Sudirman 269 Kelurahan Sindangrasa Kecamatan Ciamis.
                            Pada tanggal 16 Juni 1992 SMEA Negeri Ciamis menempati gedung baru yang beralamat di Jl. Jenderal Sudirman 269 Tel./Fax. (0265) 771204 Ciamis 46215.
                            Untuk lokasi lama pemanfaatannya diserahkan kepada Kepala Kandep Dikbud Kabupaten Ciamis.</p>
                        </p>
                    </div>
                 </form>
                </div>
                <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- END SEJARAH -->

<!-- END TAMPIL MODAL -->
<script>
$('#myModal').modal('show');
</script>

<script>
$(document).ready(function () {
    //rotation speed and timer
    var speed =2500;
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();
    
    $( window ).resize(function() {
      var box = $('.boxx');
      var box_width = box.width();
      $('#slides').css({'width': box_width});
      $('#slides ul,.slide').css({'width': box_width});
      resetSlides();
      location.reload();
    });
    
    //if user clicked on prev button
    $('#buttons a').click(function (e) {
        //slide the item
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 400, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        if (e.target.id == next) {
            container.stop().animate({
                'next': item_width * -2
            }, 400, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
        //cancel the link behavior            
        return false;
    });
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });
    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin
function rotate() {
    $('#next').click();
}
   </script>
  </body>
</html>