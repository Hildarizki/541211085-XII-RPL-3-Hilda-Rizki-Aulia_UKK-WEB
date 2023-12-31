@extends('layout.main')

@section('container')

    {{-- {{-- <!DOCTYPE html> --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive  Flower Website Design Tutorials</title>
     <!--Font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <!--custom css file link-->
     <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

    
  

     <!--Home section starts-->
     <section class="home" id="home">
        <div class="content">
            <h3>Fresh Flowers</h3>
            <span>Natural & beautiful flowers</span>
            <p>Selamat datang di Hanza Florist, tempat magis yang mengundang anda merayakan setiap momen istimewa dengan keindahan bunga. Mari bersama-sama hiasi kehidupan dengan pesona bunga yang tak terlupakan.</p>
            <a href="#products" class="btn"> Shop Now</a>
        </div>
     </section>


    <!--Home section ends-->


  <!--About section starts-->
<section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>
    <div class="row">
        <div class="video-container">
            <video src="/images/about-vid.mp4 " loop autoplay muted></video>
            <h3>best flowers sellers</h3>
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>Website Hanza Florist adalah destinasi online yang memikat, menawarkan pengalaman berbelanja bunga yang elegan dan layanan pengiriman tepat waktu, menjadikan setiap momen lebih berwarna.</p>
            <p>Dengan galeri rangkaian bunga yang memikat dan antarmuka yang ramah pengguna, Hanza Florist mengajak pelanggan untuk menjelajahi keindahan alam dalam setiap klik.</p>
            <a href="#" class="btn">Learn More</a>

        </div>
    </div>
</section>

  <!--About section ends-->


<!--icons section starts-->

<section class="icons-container">
    <div class="icons">
        <img src="/images/icon-1.png" alt="">
        <div class="info">
            <h3>Free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="/images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>Moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="/images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gits</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="/images/icon-4.png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypal</span>
        </div>
    </div>
</section>

<!--icons section ends-->

<!--Products section stars-->

<section class="products" id="products">
    <h1 class="heading">latest <span>products</span></h1>
    <div class="box-container">
        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="/images/img-1.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>                    
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$17.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="/images/img-2.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$13.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="/images/img-3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$14.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="/images/img-4.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$12.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="/images/img-5.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$14.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="/images/img-6.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$18.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-18%</span>
            <div class="image">
                <img src="/images/img-7.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$15.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="/images/img-8.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$17.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="/images/img-9.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$11.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-11%</span>
            <div class="image">
                <img src="/images/img-10.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$11.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-9%</span>
            <div class="image">
                <img src="/images/img-11.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$13.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="/images/img-12.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$18.99 <span>$15.99</span></div>
            </div>
        </div>
    </div>
</section>
<!--Products section ends-->


<!--review section starts-->
<section class="review" id="review">
    <h1 class="heading">customer's <span>review</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>"Saya sangat terkesan dengan keindahan dan kemudahan penggunaan website Hanza Florist; layanan pengiriman yang tepat waktu dan kualitas bunga yang luar biasa membuat setiap pembelian di sini menjadi pengalaman berbelanja online yang memuaskan."</p>
            <div class="user">
                <img src="/images/pic-1.png" alt="">
                <div class="user-info">
                    <h3>charles Deco</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>"Pengalaman berbelanja di Hanza Florist sungguh luar biasa; navigasi yang intuitif, pilihan bunga yang beragam, dan sentuhan personalisasi pada setiap rangkaian bunga menjadikan situs ini pilihan utama saya untuk merayakan momen istimewa."</p>
            <div class="user">
                <img src="/images/pic-2.png" alt="">
                <div class="user-info">
                    <h3>sharon michel</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>"Website Hanza Florist memberikan pengalaman belanja bunga yang tak terlupakan; kualitas produk yang luar biasa, desain yang indah, dan pelayanan pelanggan yang ramah membuat setiap kunjungan online saya menjadi momen istimewa."</p>
            <div class="user">
                <img src="/images/pic-3.png" alt="">
                <div class="user-info">
                    <h3>Abdullahi Ali</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>"Hanza Florist tidak hanya menawarkan bunga yang cantik, tetapi juga menyuguhkan pengalaman berbelanja yang menyenangkan; saya sangat terkesan dengan kemudahan pesanannya, pilihan rangkaian yang menawan, dan ketepatan waktu pengirimannya."</p>
            <div class="user">
                <img src="/images/pic-4.jpg" alt="">
                <div class="user-info">
                    <h3>Sofia wick</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
    </div>
</section>

<!--review section ends-->



</body>
</html> 

    <h2 class="fw-bold">Kotak Saran Umum</h2>
    <form method="post" action="{{route('contacts.store')}}">
      {{csrf_field()}}
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputnama" placeholder="Nama" name="nama">
        <label for="inputname">Nama</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email"> 
        <label for="inputemail" class="form-label">Email</label> 
      </div>
      <div class="form-floating mb-3">
      <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="height: 100px;" name="kotaksaran"></textarea>
      <label for="floatingTextarea2">Saran / Kritik</label>
    </div>
    <a href="#">
      <button type="submit" class="btn btn-primary" onclick="showAlert()">Kirim</button>
    </a>
    <body>
        <script>
            function showAlert(){
                alert('Isi dulu yaaa!!');
            }
        </script>
    </body>
    
    </form>
@endsection 
       

{{-- untuk memasukkan home florist serta form saran --}}