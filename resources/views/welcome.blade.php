@extends('layout')
@section('header')
  <div class="border-bottom border-d8">
    <div class="max-width-4 mx-auto px2 clearfix">
      <div class="md-col-6 sm-col sm-col-6 xs-hide">
        <img src="/image/label.jpg" class="fit va-top" /> <a href="#" class="color-8e h6 ">Ebook 9 cara Cerdas Menggunakan Domain [x]</a> 
      </div>
      <div class="sm-col sm-col-6 md-col-6 right-align">
        <ul class="list-reset my1">
          <li class="inline-block mr1"><a href="tel:02745305505"  class="color-8e h5">
            <i class="align-middle material-icons font-18">call</i> 0274-5305505</a>
          </li>
          <li class="inline-block mr1"><a href="#"  class="color-8e h5">
            <i class="align-middle material-icons font-18">chat_bubble</i> 
            Live Chat</a>
          </li>
          <li class="inline-block mr1"><a href="#"  class="color-8e h5"><i class="align-middle material-icons font-18">account_circle</i> Member Area</a> </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="border-bottom border-d8">
    <div class="flex items-center justify-between max-width-4 mx-auto px2 py1">
      <div class="sm-col md-col-3">
        <a href="#" class="color-8e h6">
          <img class="fit" src="/image/niagahoster.jpg">
        </a> 
      </div>
      <div class="sm-col md-col-9 right-align xs-hide sm-hide">
        <ul class="list-reset my1">
          <li class="inline-block mr1"><a href="#" class="color-8e">Hosting</a> </li>
          <li class="inline-block mr1"><a href="#" class="color-8e">Domain</a> </li>
          <li class="inline-block mr1"><a href="#" class="color-8e">Server</a> </li>
          <li class="inline-block mr1"><a href="#" class="color-8e">Website</a> </li>
          <li class="inline-block mr1"><a href="#" class="color-8e">Afiliasi</a> </li>
          <li class="inline-block mr1"><a href="#" class="color-8e">Promo</a> </li>
          <li class="inline-block mr1"><a href="#" class="color-8e">Pembayaran</a> </li>
          <li class="inline-block mr1"><a href="#" class="color-8e">Review</a> </li>
          <li class="inline-block mr1"><a href="#" class="color-8e">Kontak</a> </li>
          <li class="inline-block mr1"><a href="#" class="color-8e">Blog</a> </li>
        </ul>
      </div>
      <div class="lg-hide md-hide right-align">
        <button onclick="menu()" class="right-align"><i class="align-middle material-icons font-18">menu</i>
        </button>
        <div id="menuCnt" class="absolute bg-white border border-d8 border-f7 p1 right-0 rounded menu col-7" style="display: none;">
          <div>
            <button onclick="menu()" class="right-align"><i class="align-middle material-icons font-18">close</i>
            </button>
          </div>
          <ul class="list-reset mt1">
          <li class="left-align my1"><a href="#" class="color-8e">Hosting</a> </li>
          <li class="left-align my1"><a href="#" class="color-8e">Domain</a> </li>
          <li class="left-align my1"><a href="#" class="color-8e">Server</a> </li>
          <li class="left-align my1"><a href="#" class="color-8e">Website</a> </li>
          <li class="left-align my1"><a href="#" class="color-8e">Afiliasi</a> </li>
          <li class="left-align my1"><a href="#" class="color-8e">Promo</a> </li>
          <li class="left-align my1"><a href="#" class="color-8e">Pembayaran</a> </li>
          <li class="left-align my1"><a href="#" class="color-8e">Review</a> </li>
          <li class="left-align my1"><a href="#" class="color-8e">Kontak</a> </li>
          <li class="left-align my1"><a href="#" class="color-8e">Blog</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('content')
  <div class="border-bottom border-d8 mb3">
    <div class="max-width-4 mx-auto px2 clearfix sm-flex items-center flex-wrap py1 ">
      <div class="sm-col xs-col-12 sm-col-6 md-col-6 ">      
        <h1 class="bold">PHP Hosting</h1>
        <h2 class="font-light">Cepat, handal, penuh dengan modul PHP yang anda butuhkan</h2>
        <p><i class="align-top material-icons font-23 color-00b">check_circle</i> Solusi PHP untuk performa query yang lebih cepat</p>
        <p><i class="align-top material-icons font-23 color-00b">check_circle</i>Konsumsi memori lebih rendah</p>
        <p><i class="align-top material-icons font-23 color-00b">check_circle</i>Support PHP 5.3, PHP 5.4, PHP 5.6, PHP 7</p>
        <p><i class="align-top material-icons font-23 color-00b">check_circle</i>Fitur enkripsi IonCube dan Zend Guard Loaders</p>
      </div>
      <div class="sm-col xs-col-12 sm-col-6 md-col-6 right-align">
        <img src="/image/svg/illustration_banner_PHP hosting-01.svg" class="fit" />
      </div>
    </div>
  </div>
  <div class="clearfix items-center items-start max-width-4 mx-auto px4 py1 sm-flex">
    <div class="self-center">
      <img src="/image/iconzendguard.jpg" class="fit" />
      <p class="center sm-hide md-hide lg-hide">PHP Zend Guard Loader</p>
    </div>
    <div class="mx4">
      <img src="/image/icon_composer.jpg" class="fit" />
      <p class="center sm-hide md-hide lg-hide">PHP Composer</p>
    </div>
    <div class="self-center">
      <img src="/image/iconPHPHosting_ioncube.jpg" class="fit" />
      <p class="center sm-hide  md-hide lg-hide">PHP IonCube Loader</p>
    </div>
  </div>
  <div class="clearfix justify-between mx-auto sm-flex xs-hide md-hide lg-hide">
      <p >PHP Zend Guard Loader</p>
      <p >PHP Composer</p>
      <p >PHP IonCube Loader</p>
  </div>
  <div class="clearfix justify-between mx-auto sm-flex xs-hide sm-hide">
    <p class="mxn1">PHP Zend Guard Loader</p>
    <p class="ml4 pl3">PHP Composer</p>
    <p class="ml4">PHP IonCube Loader</p>
  </div>
  <h2 class="center mt4 my1">Paket Hosting Singapura yang Tepat</h2>
  <h3 class="font-light center mt0">Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
@endsection
@section('powerfullcontent')
  <h2 class="font-light center mt4">Powerfull dengan Limit PHP yang Lebih Besar</h2>
  <div class="max-width-4 mx-auto clearfix mb4 ">
    <div class="sm-col sm-col-6 px2">
      <ul class="list-reset">
        <li class="border-d8 border-top border-right border-left flex">
          <div><p class="ml2"><i class="align-top material-icons font-23 color-00b">check_circle</i></p></div>
          <div class="flex-auto"><p class="center">max excecution time 300s</p></div>
        </li>
        <li class="border-d8 border-top border-right border-left flex bg-f7">
          <div><p class="ml2"><i class="align-top material-icons font-23 color-00b">check_circle</i></p></div>
          <div class="flex-auto"><p class="center">max excecution time 300s</p></div>
        </li>
        <li class="border-d8 border flex">
          <div><p class="ml2"><i class="align-top material-icons font-23 color-00b">check_circle</i></p></div>
          <div class="flex-auto"><p class="center">php memory limit 1024 MB</p></div>
        </li>
      </ul>
    </div>
    <div class="sm-col sm-col-6 px2">
      <ul class="list-reset">
        <li class="border-d8 border-top border-right border-left flex">
          <div><p class="ml2"><i class="align-top material-icons font-23 color-00b">check_circle</i></p></div>
          <div class="flex-auto"><p class="center">post max size 128 MB</p></div>
        </li>
        <li class="border-d8 border-top border-right border-left flex bg-f7">
          <div><p class="ml2"><i class="align-top material-icons font-23 color-00b">check_circle</i></p></div>
          <div class="flex-auto"><p class="center">upload max filesize 128 MB</p></div>
        </li>
        <li class="border-d8 border flex">
          <div><p class="ml2"><i class="align-top material-icons font-23 color-00b">check_circle</i></p></div>
          <div class="flex-auto"><p class="center">max input vars 2500</p></div>
        </li>
      </ul>
    </div>
  </div>
  <h2 class="font-light center mt0">Semua Paket Hosting Sudah Termasuk</h2>
  <div class="flex flex-wrap items-center justity-between max-width-4 mb4 mx-auto">
    <div class="center md-col-4 mxn2 p2 sm-col-12">
      <img src="/image/svg/iconPHPSemuaVersi.svg" class="fit center" width="64" height="auto">
      <p class="bold h3 m0">PHP Semua Versi</p>
      <p class="m0">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
    </div>
    <div class="center md-col-4 mxn2 p2 sm-col-12">
      <img src="/image/svg/iconPHPHosting_MySQL.svg" class="fit center" width="64" height="auto">
      <p class="bold h3 m0">MySQL Versi 5.6</p>
      <p class="m0">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur </p>
    </div>
    <div class="center md-col-4 mxn2 p2 sm-col-12">
      <img src="/image/svg/iconPHPHosting_CPanel.svg" class="fit center" width="64" height="auto">
      <p class="bold h3 m0">Panel Hosting Cpanel</p>
      <p class="m0">Kelola website dengan panel canggih yang familiar dihati Anda.</p>
    </div>
    <div class="center md-col-4 mxn2 p2 sm-col-12">
      <img src="/image/svg/icon_garansiuptime.svg" class="fit center" width="64" height="auto">
      <p class="bold h3 m0">Garansi Uptime 99,9%</p>
      <p class="m0">Data center yang mendukung kelangsungan website Anda 24/7.</p>
    </div>
    <div class="center md-col-4 mxn2 p2 sm-col-12">
      <img src="/image/svg/iconInnoDB.svg" class="fit center" width="64" height="auto">
      <p class="bold h3 m0">Database InnoDB Unlimited</p>
      <p class="m0">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
    </div>
    <div class="center md-col-4 mxn2 p2 sm-col-12">
      <img src="/image/svg/iconSQLremote.svg" class="fit center" width="64" height="auto">
      <p class="bold h3 m0">Wildcard Remote MySQL</p>
      <p class="m0">Mendukung s/d 25 max_user_connections dan 100 max_user_connections</p>
    </div>
  </div>
  <h2 class="font-light center mt0">Mendukung Penuh Framework Laravel</h2>
  <div class="content-end flex-wrap items-end max-width-4 mx-auto px2 sm-flex">
    <div class="sm-col xs-col-12 sm-col-6 md-col-6 pb4">
      <p>Tak perlu menggunakan dedicated server ataupun VPSyang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</p>
      <ul class="list-reset">
        <li><i class="align-top material-icons font-23 color-00b">check_circle</i> 
          Install Laravel <span class="bold">1 klik</span> dengan Softaculous Installer.</li>
        <li><i class="align-top material-icons font-23 color-00b">check_circle</i> Mendukung ekstensi <span class="bold">PHP MCrypt, phar, mbstring, json,</span> dan <span class="bold">fileinfo.</span></li>
        <li><i class="align-top material-icons font-23 color-00b">check_circle</i> Tersedia <span class="bold">composer</span> dan <span class="bold">SSH</span> untuk menginstall packages pilihan Anda.</li>
      </ul>
      <p class="h6">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
      <div class="my2 pt3">
        <a class="bg-blue p2 color-white border-rad-40 bold " href="#">Pilih Hosting Anda</a>
      </div>
    </div>
    <div class="sm-col xs-col-12 sm-col-6 md-col-6 right-align">
      <img src="/image/svg/illustrationhosting.svg" class="fit">
    </div>
  </div>
  <div class="border-top border-d8 mb3">&nbsp;</div>
  <h2 class="font-light center mt0">Modul Lengkap untuk Menjalankan Aplikasi Anda.</h2>
  <div class="max-width-4 mx-auto p2">
    <div class="flex content-center px3 my2 flex-wrap">
      <div class="sm-col-6 md-col-3">
        <ul class="list-reset">
          <li>IcePHP</li>
          <li>apc</li>
          <li>apcu</li>
          <li>apm</li>
          <li>ares</li>
          <li>bcmath</li>
          <li>bcompiler</li>
          <li>big_int</li>
          <li>bitset</li>
          <li>bloomy</li>
          <li>bz2_filter</li>
          <li>clamav</li>
          <li>IcePHP</li>
          <li>coin_acceptor</li>
          <li>crack</li>
          <li>dba</li>
        </ul>
      </div>
      <div class="sm-col-6 md-col-3">
        <ul class="list-reset ml1">
          <li>http</li>
          <li>hufman</li>
          <li>idn</li>
          <li>igbinary</li>
          <li>imagick</li>
          <li>imap</li>
          <li>inclued</li>
          <li>inotify</li>
          <li>interbase</li>
          <li>intl</li>
          <li>ioncube_loader</li>
          <li>ioncube_loader_4</li>
          <li>jsmin</li>
          <li>json</li>
          <li>ldap</li>
        </ul>
      </div>
      <div class="sm-col-6 md-col-3">
        <ul class="list-reset">
          <li>nd_pdo_mysql</li>
          <li>oauth</li>
          <li>ocl8</li>
          <li>odbc</li>
          <li>apache</li>
          <li>pdf</li>
          <li>pdo</li>
          <li>pdo_dlib</li>
          <li>pdo_firebird</li>
          <li>pdo_mysql</li>
          <li>pdo_odbc</li>
          <li>pdo_pgsql</li>
          <li>pdo_sqlite</li>
          <li>pgsql</li>
          <li>phalcon</li>
        </ul>
      </div>
      <div class="sm-col-6 md-col-3">
        <ul class="list-reset ml2">
          <li>stats</li>
          <li>stem</li>
          <li>stomp</li>
          <li>suhosin</li>
          <li>sybase_ct</li>
          <li>sysvmsg</li>
          <li>sysvsem</li>
          <li>sysvshm</li>
          <li>tidy</li>
          <li>timezonedb</li>
          <li>trader</li>
          <li>tanslit</li>
          <li>uploadprogress</li>
          <li>url_template</li>
          <li>uuid</li>
        </ul>
      </div>
    </div>
    <div class="center mb4">
      <a class="btn-white p2 border color-4c border-rad-40 bold" href="#">Selengkapnya</a>
    </div>
  </div>
  <div class="max-width-4 mx-auto px2"> 
    <div class="content-end flex flex-wrap items-end">
      <div class="sm-col xs-col-12 sm-col-6 md-col-6 pb3">
        <h2 class="font-light">Linux Hosting yang Stabil dengan Teknologi LVE</h2>
        <p class="pr3">SuperMicro <span class="bold">Intel Xeon 24-Cores</span> server dengan RAM <span class="bold">128 GB</span> dan teknologi <span class="bold">LVE CloudLinux</span> untuk stabilitas server Anda. 
          Dilengkapi dengan <span class="bold">SSD</span> untuk kecepatan <span class="bold">MySQL</span> dan caching. Apache load balancer berbasis LiteSpeed Technologies,
          <span class="bold">CakeFS</span> security, <span class="bold">RAID-10</span> protection dan auto backup untuk keamanan website PHP Anda. 
        </p>
        <div class="my2 pt3">
          <a class="bg-blue p2 color-white border-rad-40 bold " href="#">Selengkapnya</a>
        </div>
      </div>
      <div class="flex sm-col xs-col-12 sm-col-6 md-col-6 right-align">
        <img src="/image/imagesupport.png" class="fit">
      </div>
    </div>
  </div>
  <div class="bg-f7">
    <div class="max-width-4 mx-auto p2  flex items-center justify-between"> 
      <p>Bagikan jika anda menyukai halaman ini</p>
      <p>Sosmed counter bagde </p>
    </div>
  </div>
  <div class="bg-blue py4">
    <div class="max-width-4 mx-auto clearfix px2"> 
      <div class="sm-col sm-col-8">
        <p class="color-white h2" h1="" color-white"="">Perlu <span class="bold">BANTUAN?</span> Hubungi Kami: 
          <a href="tel:+622745305505" class="bold color-white">0274-5305505</a>
        </p>
      </div>
      <div class="center sm-col sm-col-4">
        <button class="bg-blue bold border-rad-40 border-white color-white my2 px3 py1">
          <i class="align-middle font-23 material-icons">chat_bubble</i> Live Chat
        </button>
      </div>
    </div>
  </div>
@endsection
@section('footer')
  <div class="bg-black">
    <div class="max-width-4 mx-auto color-white p2">
      <div class="clearfix">
        <div class="sm-col sm-col-3">
          <h5 class="color-8e">HUBUNGI KAMI</h5>
          <ul class="list-reset">
            <li class="h5 color-8e"><a href="tel:+622745305505" class="color-8e">0274-5305505</a></li>
            <li class="h5 color-8e">Senin - Minggu</li>
            <li class="h5 color-8e">24 Jam Nonstop</li>
          </ul>
          <ul class="list-reset">
            <li class="h5 color-8e">Jl. Selokan Mataram Monjali</li>
            <li class="h5 color-8e">Karangjati MT I/304</li>
            <li class="h5 color-8e">Sinduadi, Mlati, Sleman</li>
            <li class="h5 color-8e">Yogyakarta 55284</li>
          </ul>
        </div>
        <div class="sm-col sm-col-3">
          <h5 class="color-8e">LAYANAN</h5>
          <ul class="list-reset">
            <li class="h5 color-8e">Domain</li>
            <li class="h5 color-8e">Shared Hosting</li>
            <li class="h5 color-8e">Cloud VPS Hosting</li>
            <li class="h5 color-8e">Managed VPS Hosting</li>
            <li class="h5 color-8e">Web Builder</li>
            <li class="h5 color-8e">Keamanan SSL/HTTPS</li>
            <li class="h5 color-8e">Jasa Pembuatan Website</li>
            <li class="h5 color-8e">Program Affiliasi</li>
          </ul>
        </div>
        <div class="sm-col sm-col-3">
          <h5 class="color-8e">SERVICE HOSTING</h5>
          <ul class="list-reset">
            <li class="h5 color-8e">Hosting Murah</li>
            <li class="h5 color-8e">Hosting Indonesia</li>
            <li class="h5 color-8e">Hosting Singapura SG</li>
            <li class="h5 color-8e">Hosting PHP</li>
            <li class="h5 color-8e">Hosting Wordpress</li>
            <li class="h5 color-8e">Hosting Laravel</li>
          </ul>
        </div>
        <div class="sm-col sm-col-3">
          <h5 class="color-8e">TUTORIAL</h5>
          <ul class="list-reset">
            <li class="h5 color-8e"><a href="#" class="color-8e">Knowledge Base</a></li>
            <li class="h5 color-8e"><a href="#" class="color-8e">Blog</a></li>
            <li class="h5 color-8e"><a href="#" class="color-8e">Cara Pembayaran</a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix">
        <div class="sm-col sm-col-3">
          <h5 class="color-8e">TENTANG KAMI</h5>
          <ul class="list-reset">
            <li class="h5 color-8e"><a href="#" class="color-8e">Tim Niagahoster</a></li>
            <li class="h5 color-8e"><a href="#" class="color-8e">Karir</a></li>
            <li class="h5 color-8e"><a href="#" class="color-8e">Events</a></li>
            <li class="h5 color-8e"><a href="#" class="color-8e">Penawaran &amp; Promo Special</a></li>
            <li class="h5 color-8e"><a href="#" class="color-8e">Kontak Kami</a></li>
          </ul>
        </div>
        <div class="sm-col sm-col-3">
          <h5 class="color-8e">KENAPA PILIH NIAGAHOSTER?</h5>
          <ul class="list-reset">
            <li class="h5 color-8e">Support Terbaik</li>
            <li class="h5 color-8e">Garansi Harga Termurah</li>
            <li class="h5 color-8e">Domain Gratis Selamanya</li>
            <li class="h5 color-8e">Data Center Hosting Terbaik</li>
            <li class="h5 color-8e">Review Pelanggan</li>
          </ul>
        </div>
        <div class="sm-col sm-col-3">
          <h5 class="color-8e">NEWSLETTER</h5>
          <div>
            <form action="post" enctype="multipart/form-data" class="sm-hide">
              <div class="bg-white border-rad-40 flex justify-between pb1 pl2 pr1 pt1">
                <input type="email" name="email" placeholder="Email" class="border-none flex-auto ml1 max-w-145">
                <button type="submit" class="bg-blue border-none border-rad-40 color-white inline p2">Berlangganan</button>
              </div>
            </form>
            <form action="post" enctype="multipart/form-data" class="xs-hide md-hide lg-hide">
              <div class="bg-white border-rad-40 flex justify-between pb1 pl2 pr1 pt1">
                <input type="email" name="email" placeholder="Email" class="border-none flex-auto ml1 max-w-145">
              </div>
              <button type="submit" class="bg-blue border-none border-rad-40 color-white inline p1 mt1">Berlangganan</button>
            </form>
          </div>
          <p class="h6 color-8e">Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</p>
        </div>
        <div class="sm-col sm-col-3">
          <h5 class="color-8e">&nbsp;</h5>
          <div class="flex justify-around">
            <a href="#" class=""><img src="/image/fb.jpg" class="fit" width="auto" height="69px" /></a>
            <a href="#" class=""><img src="/image/fb.jpg" class="fit" width="auto" height="69px" /></a>
            <a href="#" class=""><img src="/image/fb.jpg" class="fit" width="auto" height="69px" /></a>
          </div>
        </div>
      </div>
        <div>
            <h5 class="color-8e">PEMBAYARAN</h5>
            <div><img class="fit" src="/image/payment.jpg"></div>
            <p class="color-8e h5">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</p>
        </div>
        <div class="clearfix">
            <div class="sm-col md-col-8">
                <p class="h6 color-8e">Copyright ©2019 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC DCI-Indonesia. Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
            </div>
            <div class="sm-col md-col-4 pt1 xs-hide sm-hide right-align  color-8e ">
                <a href="#" class=" color-8e h6 text-decoration-none">Syarat dan Ketentuan</a> 
                | 
                <a href="#" class=" color-8e h6 text-decoration-none">Kebijakan Privasi</a>
            </div>
            <div class="sm-col md-col-4  pt1 md-hide lg-hide  color-8e ">
              <a href="#" class=" color-8e h6 text-decoration-none">Syarat dan Ketentuan</a> 
              | 
              <a href="#" class=" color-8e h6 text-decoration-none">Kebijakan Privasi</a>
          </div>
        </div>
    </div>
  </div>
@endsection
