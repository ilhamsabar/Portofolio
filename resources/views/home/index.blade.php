<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>ilham sabar</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{asset('home/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/vendor.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('home/js/modernizr.js')}}"></script>
    <script src="{{asset('home/js/pace.min.js')}}"></script>

    <!-- favicons
     ================================================== -->
    <link rel="icon" type="image/png" href="{{asset('home/favicon.png')}}">

</head>

<body id="top">

<!-- header
================================================== -->
<header>
    <div class="row">

        <div class="top-bar">
            <a class="menu-toggle" href="#"><span>Menu</span></a>

            <div class="logo">
                <a href="index1.html" style="color: white">IAMDEV</a>
            </div>

            <nav id="main-nav-wrap">
                <ul class="main-navigation">
                    <li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="">About</a></li>
                    <li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
                    <li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
                    <li><a class="smoothscroll"  href="#services" title="">Services</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>
                    <li><a href="styles.html" title="">Style Demo</a></li>
                </ul>
            </nav>
        </div> <!-- /top-bar -->

    </div> <!-- /row -->
</header> <!-- /header -->

<!-- intro section
================================================== -->
<section id="intro">

    <div class="intro-overlay"></div>

    <div class="intro-content">
        <div class="row">

            <div class="col-twelve">

                <h5>Hello, World.</h5>
                <h1>I'm Ilham Sabar.</h1>

                <p class="intro-position">
                    <span>Front-end Developer</span>
                    <span>Back-end Developer</span>
                    <span>Java Developer</span>
                </p>

                <a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

            </div>

        </div>
    </div> <!-- /intro-content -->

    <ul class="intro-social">
        <li><a href="https://web.facebook.com/M.ilham.sabar" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="http://www.ilhamsabar.xyz" target="_blank"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="https://www.instagram.com/ilham_sabar" target="_blank"><i class="fa fa-instagram"></i></a></li>
    </ul> <!-- /intro-social -->

</section> <!-- /intro -->


<!-- about section
================================================== -->
<section id="about">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>About</h5>
            <h1>Let me introduce myself.</h1>

            <div class="intro-info">

                <img src="{{asset('home/images/profile-pic.jpg')}}" alt="Profile Picture">

                <p class="lead">Perkenalkan nama saya ilham sabar biasa di panggil ilham, saya lahir pada 22 september 1993, saya berasal dari daerah terpencil di kabupaten mamuju utara lebih tepatnya di kecamatan baras. saya telah menekuni dunia programmer selama 3 tahun, 1 tahun belajar pemrograman java (Mobile App) dan 2 tahun Pemrograman web (Web App).</p>
            </div>

        </div>
    </div> <!-- /section-intro -->

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Profile</h3>
            <p>saya adalah seorang dengan tipikal pendiam dan tidak banyak bicara, kecuali di ajak bicara. mudah bergaul dan berkolaborasi dengan tim, suka mencoba hal hal baru, dan paling hobby dengan namanya traveling</p>

            <ul class="info-list">
                <li>
                    <strong>Fullname:</strong>
                    <span>M Ilham Sabar</span>
                </li>
                <li>
                    <strong>Birth Date:</strong>
                    <span>September 22, 1993</span>
                </li>
                <li>
                    <strong>Job:</strong>
                    <span>Freelancer, Backend Developer, Fullstack Developer</span>
                </li>
                <li>
                    <strong>Website:</strong>
                    <span>www.ilhamsabar.xyz</span>
                </li>
                <li>
                    <strong>Email:</strong>
                    <span>me@ilhamsabar.xyz</span>
                </li>

            </ul> <!-- /info-list -->

        </div>

        <div class="col-six tab-full">

            <h3>Skills</h3>
            <p>Dengan pengalaman kerja selama 2 tahun presentase skill saya kurang lebih seperti berikut.</p>

            <ul class="skill-bars">
                <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>HTML5</strong>
                </li>
                <li>
                    <div class="progress percent75"><span>75%</span></div>
                    <strong>CSS3</strong>
                </li>
                <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>JQuery</strong>
                </li>
                <li>
                    <div class="progress percent95"><span>95%</span></div>
                    <strong>PHP</strong>
                </li>
                <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>Mysql</strong>
                </li>
                <li>
                    <div class="progress percent60"><span>60%</span></div>
                    <strong>Java</strong>
                </li>

            </ul> <!-- /skill-bars -->

        </div>

    </div>

    <div class="row button-section">
        <div class="col-twelve">
            <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
            <a href="{{asset('home/files/Curiculum ilham sabar.pdf')}}" title="Download CV" class="button button-primary">Download CV</a>
        </div>
    </div>

</section> <!-- /process-->


<!-- resume Section
================================================== -->
<section id="resume" class="grey-section">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Resume</h5>
            <h1>More of my credentials.</h1>

            <p class="lead">Berikut adalah suka dan duka perjalanan karir saya hingga sekarang.</p>

        </div>
    </div> <!-- /section-intro-->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Work Experience</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Fullstack Developer</h3>
                        <p>Juny 2016 - July 2016</p>
                    </div>

                    <div class="timeline-content">
                        <h4>QRSS (Quick Response Supervising System) KEMENAG</h4>
                        <p>Membuat sebuah sistem pelaporan dan penilaian sekolah dibawah departemen kementerian agama. saya membuat sistem ini dengan menggunakan IONIC</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Diet Sehat</h3>
                        <p>November 2015 - Desember 2015</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Skripsi</h4>
                        <p>sebagai salah satu syarat kelulusan dalam jenjang pendidikan S1 saya di wajibkan untuk membuat sebuah aplikasi yang berguna bagi masyarakat, maka dari itu saya membuat aplikasi diet sehat dengan berbagai module pengambil keputusan dalam menentukan diet yang sehat. saat ini downloaders aplikasi diet sehat telah mencapai <b>300K</b> downloader.</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Backend Developer</h3>
                        <p>June 2016 - April 2018</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Abutours.com</h4>
                        <p>perusahaan yang bergerak di bidang travel haji dan umroh, saya di tugaskan dan dipercayakan sebagai salah satu backend developer. beberapa aplikasi yang telah saya kerjakan diantaranya adalah abustore.id yang merupakan ecomerce semacam bukalapak, kumudian saya dipercayakan untuk mengerjakan intrenal abutours.com di antaranya adalah modul CS, Kasir, Promosi, Manifest, HRD, Direktur, Finance, dan Logistik. moment yang sangat menyenangkan telah bergabung dengan tim dan menjadi keluarga dari abutours.com</p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Education</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>SMP</h3>
                        <p>July 2005 - 2008</p>
                    </div>

                    <div class="timeline-content">
                        <h4>SMP Negeri 4 Pasangkayu</h4>
                        <p>salah satu sekolah ternama di kampung saya, yang waktuh tempuh dari rumah ke sekolah bisa sampai 1 jam dengan menggunakan mobil truck, suka duka di lalui bersama .</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>SMA</h3>
                        <p>July 2008 - June 2011</p>
                    </div>

                    <div class="timeline-content">
                        <h4>SMA Negeri 3 Pasangkayu</h4>
                        <p>sekolah yang tepat di samping SMP saya, dan mengambilan jurusan IPA.</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Strata 1 (S1)</h3>
                        <p>May 2011 - MEI 2016</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Universitas Islam Negeri Alauddin Makassar</h4>
                        <p>Salah satu universitas negeri di makassar, dengan mengambil jurusan Teknik Informatika.</p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->

</section> <!-- /features -->


<!-- Portfolio Section
================================================== -->
<section id="portfolio">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Portfolio</h5>
            <h1>Check Out Some of My Works.</h1>

            <p class="lead">Berikut adalah portofolio aplikasi yang telah saya kerjakan.</p>

        </div>
    </div> <!-- /section-intro-->

    <div class="row portfolio-content">

        <div class="col-twelve">

            <!-- portfolio-wrapper -->
            <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="https://lh3.googleusercontent.com/Cb6R0kC9QHmnHYPl_LD9oANGiln422bs6rMu1E7TiQGxi8mycsaz0gp_ehYylvARVQ=w3360-h1952-rw" width="700" alt="Diet Sehat">
                        <a href="#modal-01" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Diet Sehat</h3>
                                    <span class="folio-types">
		     					       	  Apps Development
		     					       </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{asset('home/images/portfolio/ranshealth.png')}}" alt="Rans Health">
                        <a href="#modal-02" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Rans Health</h3>
                                    <span class="folio-types">
		     					       	  Web Design
		     					      </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{asset('home/images/portfolio/qrs.png')}}"alt="Clouds">
                        <a href="#modal-03" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">QRS2 (Quick Response Supervising System)</h3>
                                    <span class="folio-types">
		     					       	  Web Development
		     					      </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{asset('home/images/portfolio/abutours.png')}}" alt="Beetle">
                        <a href="#modal-04" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Abutours.com</h3>
                                    <span class="folio-types">
		     					       	  Web Development
		     					      </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                {{--<div class="bgrid folio-item">--}}
                    {{--<div class="item-wrap">--}}
                        {{--<img src="{{asset('home/images/portfolio/lighthouse.jpg')}}" alt="Lighthouse">--}}
                        {{--<a href="#modal-05" class="overlay">--}}
                            {{--<div class="folio-item-table">--}}
                                {{--<div class="folio-item-cell">--}}
                                    {{--<h3 class="folio-title">Lighthouse</h3>--}}
                                    {{--<span class="folio-types">--}}
		     					       	  {{--Web Development--}}
		     					      {{--</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div> <!-- /folio-item -->--}}

                {{--<div class="bgrid folio-item">--}}
                    {{--<div class="item-wrap">--}}
                        {{--<img src="{{asset('home/images/portfolio/salad.jpg')}}" alt="Salad">--}}
                        {{--<a href="#modal-06" class="overlay">--}}
                            {{--<div class="folio-item-table">--}}
                                {{--<div class="folio-item-cell">--}}
                                    {{--<h3 class="folio-title">Salad</h3>--}}
                                    {{--<span class="folio-types">--}}
		     					       	  {{--Branding--}}
		     					      {{--</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div> <!-- /folio-item -->--}}

                <!-- modal popups - begin
                ============================================================= -->
                <div id="modal-01" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <center><img src="https://lh3.googleusercontent.com/QN0RQSGMPJDOMF5G-DUBsVREWk3H65zWbhlYsvFlhi_5Gg_eGbwFznYsnZO1VInj06M=w3360-h1952-rw" width="350" alt="" /></center>
                    </div>

                    <div class="description-box">
                        <h4>Diet Sehat</h4>
                        <p>Diet sehat merupakan aplikasi sistem pakar dalam menentukan menu diet yang sehat berdasarkan umur, jenis kelamin, golongan darah dan penyakit, untuk dapat menentukan kategori dan saran makanan yang cocok untuk melakukan proses diet. Selain itu diet sehat juga memiliki fitur monitoring dimana user akan di bimbing dalam melakukan proses diet, dimana user dapat mengatur sendiri jadwal sarapan, makan siang dan makan malamnya, selain itu user juga dapat membuat menu makan sendiri selain dari 5 menu makanan yang di sarankan </p>

                        <div class="categories">Apps Development</div>
                    </div>

                    <div class="link-box">
                        <a href="https://play.google.com/store/apps/details?id=com.ilhamsabar.dietsehat" target="_blank">Details</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-01 -->

                <div id="modal-02" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{asset('home/images/portfolio/ranshealth.png')}}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Rans Health</h4>
                        <p>Rans Health merupakan salah satu starup yang bergerak di bidang kesehatan yang mempertemukan antara tenaga medis dan pasien.</p>

                        <div class="categories">Web Design</div>
                    </div>

                    <div class="link-box">
                        <a href="http://ranshealth.com/" target="_blank">Details</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-02 -->

                <div id="modal-03" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{asset('home/images/portfolio/qrs.png')}}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>QRS2</h4>
                        <p>Quick Response Supervising System merupakan sistem pelaporan dan penilaian sekolah dibawah naungan kementrian agama.</p>

                        <div class="categories">Web Design</div>
                    </div>

                    <div class="link-box">
                        <a href="http://www.behance.net">Details</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-03 -->

                <div id="modal-04" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{asset('home/images/portfolio/abutours.png')}}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Abutours.com</h4>
                        <p>Abutours.com merupakan salah satu perusahaan yang bergerak di bidang travel umroh dan haji. abutours.com juga mempunyai beberapa produk selain dari umroh, mulai dari penjulan tiket pesawat, Pulsa, Paket Data, Token Listrik, hingga BPJS kesehatan</p>

                        <div class="categories">Web Development</div>
                    </div>

                    <div class="link-box">
                        <a href="http://www.abutours.com">Details</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-04 -->

                <div id="modal-05" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{asset('home/images/portfolio/modals/m-lighthouse.jpg')}}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Lighthouse</h4>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                        <div class="categories">Web Development</div>
                    </div>

                    <div class="link-box">
                        <a href="http://www.behance.net">Details</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-05 -->

                <div id="modal-06" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{asset('home/images/portfolio/modals/m-salad.jpg')}}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Salad</h4>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                        <div class="categories">Branding</div>
                    </div>

                    <div class="link-box">
                        <a href="http://www.behance.net">Details</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-06 -->


                <!-- modal popups - end
             ============================================================= -->

            </div> <!-- /portfolio-wrapper -->

        </div>  <!-- /twelve -->

    </div> <!-- /portfolio-content -->

</section> <!-- /portfolio -->


<!-- CTA Section
================================================== -->
{{--<section id="cta" class="grey-section">--}}

    {{--<div class="row cta-content">--}}

        {{--<div class="col-twelve section-ads">--}}

            {{--<h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Styleshout Recommends Dreamhost.</a></h2>--}}

            {{--<p class="lead">--}}
                {{--Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.--}}
                {{--Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>.--}}
                {{--<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->--}}
            {{--</p>--}}

            {{--<div class="action">--}}
                {{--<a class="button button-primary large" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>--}}
            {{--</div>--}}

        {{--</div>--}}

    {{--</div> <!-- /cta-content -->--}}

{{--</section> <!-- /cta -->--}}


<!-- services Section
================================================== -->
<section id="services">

    <div class="overlay"></div>

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Services</h5>
            <h1>What Can I Do For You?</h1>

            <p class="lead">Berikut adalah beberapa hal yang dapat saya kerjakan untuk anda.</p>

        </div>
    </div> <!-- /section-intro -->

    <div class="row services-content">

        <div id="owl-slider" class="owl-carousel services-list">

            <div class="service">

                <span class="icon"><i class="icon-earth"></i></span>

                <div class="service-content">

                    <h3>Webdesign</h3>

                    {{--<p class="desc">Mengejakan desain web untuk kebutuhan profile company atau hal yang terkait dengan design web.--}}
                    {{--</p>--}}

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="icon-window"></i></span>

                <div class="service-content">

                    <h3>Web Development</h3>

                    {{--<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.--}}
                    {{--</p>--}}

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="icon-paint-brush"></i></span>

                <div class="service-content">

                    <h3>Branding</h3>

                    {{--<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.--}}
                    {{--</p>--}}

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="icon-toggles"></i></span>

                <div class="service-content">

                    <h3>UI/UX Design</h3>

                    {{--<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.--}}
                    {{--</p>--}}

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="icon-image"></i></span>

                <div class="service-content">

                    <h3>Graphics Design</h3>

                    {{--<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.--}}
                    {{--</p>--}}

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="icon-chat"></i></span>

                <div class="service-content">

                    <h3>Consultancy</h3>

                    {{--<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.--}}
                    {{--</p>--}}

                </div>

            </div> <!-- /service -->

        </div> <!-- /services-list -->

    </div> <!-- /services-content -->

</section> <!-- /services -->


<!-- stats Section
================================================== -->
<section id="stats" class="count-up">

    <div class="row">
        <div class="col-twelve">

            <div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

                <div class="bgrid stat">

                    <div class="icon-part">
                        <i class="icon-pencil-ruler"></i>
                    </div>

                    <h3 class="stat-count">
                        1500
                    </h3>

                    <h5 class="stat-title">
                        Projects Completed
                    </h5>

                </div> <!-- /stat -->

                <div class="bgrid stat">

                    <div class="icon-part">
                        <i class="icon-users"></i>
                    </div>

                    <h3 class="stat-count">
                        900
                    </h3>

                    <h5 class="stat-title">
                        Happy Clients
                    </h5>

                </div> <!-- /stat -->

                <div class="bgrid stat">

                    <div class="icon-part">
                        <i class="icon-badge"></i>
                    </div>

                    <h3 class="stat-count">
                        200
                    </h3>

                    <h5 class="stat-title">
                        Awards Received
                    </h5>

                </div> <!-- /stat -->

                <div class="bgrid stat">

                    <div class="icon-part">
                        <i class="icon-light-bulb"></i>
                    </div>

                    <h3 class="stat-count">
                        120
                    </h3>

                    <h5 class="stat-title">
                        Crazy Ideas
                    </h5>

                </div> <!-- /stat -->

                <div class="bgrid stat">

                    <div class="icon-part">
                        <i class="icon-cup"></i>
                    </div>

                    <h3 class="stat-count">
                        1500
                    </h3>

                    <h5 class="stat-title">
                        Coffee Cups
                    </h5>

                </div> <!-- /stat -->

                <div class="bgrid stat">

                    <div class="icon-part">
                        <i class="icon-clock"></i>
                    </div>

                    <h3 class="stat-count">
                        7200
                    </h3>

                    <h5 class="stat-title">
                        Hours
                    </h5>

                </div> <!-- /stat -->

            </div> <!-- /stats-list -->

        </div> <!-- /twelve -->
    </div> <!-- /row -->

</section> <!-- /stats -->


<!-- contact
================================================== -->
<section id="contact">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Contact</h5>
            <h1>I'd Love To Hear From You.</h1>

            <p class="lead">Tinggalkan pesan anda atau hubungi saya.</p>

        </div>
    </div> <!-- /section-intro  -->

    <div class="row contact-form">

        <div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
                <fieldset>

                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
                    </div>
                    <div class="form-field">
                        <button class="submitform">Submit</button>
                        <div id="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">
            </div>
            <!-- contact-success -->
            <div id="message-success">
                <i class="fa fa-check"></i>Your message was sent, thank you!<br>
            </div>

        </div> <!-- /col-twelve -->

    </div> <!-- /contact-form -->

    <div class="row contact-info">

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-pin"></i>
            </div>

            <h5>Where to find me</h5>

            <p>
                kec Palalakkang<br>
                Galesong Selatan, Sulawesi Selatan<br>
                Indonesia
            </p>

        </div>

        <div class="col-four tab-full collapse">

            <div class="icon">
                <i class="icon-mail"></i>
            </div>

            <h5>Email Me At</h5>

            <p>me@ilhamsabar.xyz<br>
                ilhamsabar@gmail.com
            </p>

        </div>

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-phone"></i>
            </div>

            <h5>Call Me At</h5>

            <p>Phone: (+62) 853 975 87200<br>
                Mobile: (+62) 853 975 87200<br>
            </p>

        </div>

    </div> <!-- /contact-info -->

</section> <!-- /contact -->


<!-- footer
================================================== -->

<footer>
    <div class="row">

        <div class="col-six tab-full pull-right social">

            <ul class="footer-social">
                <li><a href="https://web.facebook.com/M.ilham.sabar"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://www.ilhamsabar.xyz/"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="https://www.instagram.com/ilham_sabar"><i class="fa fa-instagram"></i></a></li>
            </ul>

        </div>

        <div class="col-six tab-full">
            <div class="copyright">
                <span>© Copyright ilham sabar 2018.</span>
                <span>Design by <a href="#">ME</a></span>
            </div>
        </div>

        <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
        </div>

    </div> <!-- /row -->
</footer>

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
<script src="{{asset('home/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('home/js/plugins.js')}}"></script>
<script src="{{asset('home/js/main.js')}}"></script>

</body>

</html>