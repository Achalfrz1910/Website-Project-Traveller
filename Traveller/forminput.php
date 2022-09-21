<!doctype html>
<html lang="en">

    <head>

        <!-- Basic -->
        <title>Traveller</title>
        <!-- Define Charset -->
        <meta charset="utf-8">
        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
        <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
        
        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        
        <!-- Lightbox CSS -->
        <link rel="stylesheet" type="text/css" href="css/lightbox.css">

        <!-- Sulfur CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel ="stylesheet" type = "text/css" href="form.css">

        <!-- Responsive CSS Style -->
        <link rel="stylesheet" type="text/css" href="css/responsive.css">


        <script src="js/modernizrr.js"></script>


    </head>

    <body>
    
        <header class="clearfix">
        
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                    
                                <div class="col-md-6">
                                    
                                    <ul class="contact-details">
                                        <li><a href="#"><i class="fa fa-phone"></i>123456789</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i>achfahrezy@gmail.com</a>
                                        </li> 
                                    </ul>
                                </div>
                                
                                <div class="col-md-6">
                                    <ul class="social-list">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                    </ul>
                                </div>
                            </div>
                                
                                
                        </div>
                    </div>                        

                </div>
        
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="index.html">Traveller</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="active" href="/Traveller/index.html">Home</a>
                            </li>
                            <li>
                                <a href="/Traveller/destinasi.html">Destinasi Wisata</a>
                            </li>
                            <li>
                                <a href="/Traveller/Pemesanan.html">Pemesanan Tiket</a>
                            </li>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->
            
        </header>
  <body>
    <div class="container">
      <form>
        <h1>Traveller.com</h1>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" autofocus autocomplete="off" />
        <label for="nik">NIK:</label>
        <input type="text" id="nik" autofocus autocomplete="off" />
        <label for="telepon">Telepon:</label>
        <input type="text" id="telepon" autofocus autocomplete="off" />
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" autofocus autocomplete="off" />
        <label for="destinasi">Destinasi:</label>
        <input type="text" id="destinasi" list="pilihanDestinasi" autocomplete="off" />
        <datalist id="pilihanDestinasi">
          <option value="Pulau Merah">Pulau Merah</option>
          <option value="Kawah Gunung Ijen">Kawah Gunung Ijen</option>
          <option value="Teluk Hijau">Teluk Hijau</option>
        </datalist>
        <label for="status">Status:</label>
        <input type="text" id="status" list="pilihanStatus" autocomplete="off" />
        <datalist id="pilihanStatus">
          <option value="Dewasa">Dewasa</option>
          <option value="Anak-anak">Anak-anak</option>
        </datalist>
        <label for="jumlah">Jumlah Tiket:</label>
        <input type="number" id="jumlah" />
        <label for="subtotal">Subtotal:</label>
        <input type="number" id="subtotal" disabled />
        <label for="diskon">Diskon:</label>
        <input type="number" id="diskon" disabled />
        <label for="total">Total:</label>
        <input type="number" id="total" disabled />

        <div class="tombol">
          <input type="submit" value="Pesan" id="pesan" />
          <input type="button" value="Hapus" id="hapus" />
        </div>
      </form>

      <!-- Jika berhasil pesan akan menampilkan berkas output nya -->
      <div class="output">
        <h2>Traveller.com</h2>
        <p>Nama: <span id="namaOutput"></span></p>
        <p>NIK: <span id="nikOutput"></span></p>
        <p>Telepon: <span id="teleponOutput"></span></p>
        <p>Alamat: <span id="alamatOutput"></span></p>
        <p>Destinasi: <span id="destinasiOutput"></span></p>
        <p>Status: <span id="statusOutput"></span></p>
        <p>Jumlah Tiket: <span id="jumlahOutput"></span></p>
        <p>Subtotal: <span id="subtotalOutput"></span></p>
        <p>Diskon: <span id="diskonOutput"></span></p>
        <p>Total: <span id="totalOutput"></span></p>
        <p><sup>*</sup>Harga 1 tiket: <span id="hargaTiket"></span></p>
      </div>
    </div>

    <div class="informasi">
      <span>Catatan:</span>
      <span><sup>*</sup>Status hanya terdapat 2: Dewasa dan Anak-anak <span>(Perhatikan huruf kecil dan besar nya)</span></span>
      <span><sup>*</sup>Jika membeli Jumlah Tiket lebih dari 5 bisa mendapat diskon 15% <span>(Tidak lebih dari 5 maka tidak dapat diskon)</span></span>
    </div>
    <script src="form.js"></script>
  </body>
</html>