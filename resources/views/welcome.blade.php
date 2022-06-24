@extends('/portal/app')
@section('content')
<div class="hero-slide owl-carousel site-blocks-cover">
  {{-- <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
          <h1>Academics University</h1>
        </div>
      </div>
    </div>
  </div> --}}
  @foreach ($data as $item)
  <div class="intro-section" style="background-image: url('{{ url('storage/slide/'.$item->gambar) }}');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
          <h1>{{ $item->judul}}</h1>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

{{-- <div class="hero-slide owl-carousel site-blocks-cover">
  @foreach ($data as $item)
  <div class="intro-section" style="background-image: url('{{ asset('storage/slide/'.$item->gambar) }}');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
            <h1>You Can Learn Anything</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div> --}}
<div></div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-4 mb-5">
        <h2 class="section-title-underline mb-5">
          <span>Why Accounting ?</span>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

        <div class="feature-1 border">
          <div class="icon-wrapper bg-primary">
            <span class="flaticon-mortarboard text-white"></span>
          </div>
          <div class="feature-1-content">
            <h2>Prospek Kerja</h2>
            <p>Akutansi sangat penting bagi perusahan - perusahan yang bergerak bidang apapun untuk membantu dalam manajemen keuangan perusahaan</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="feature-1 border">
          <div class="icon-wrapper bg-primary">
            <span class="flaticon-school-material text-white"></span>
          </div>
          <div class="feature-1-content">
            <h2>Jenjang Karir</h2>
            <p>Bidang Akutansi memiliki peran penting di semua perusahaan dan jenjang karirpun sangat diperuntukan untuk Accounting</p>
          </div>
        </div> 
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="feature-1 border">
          <div class="icon-wrapper bg-primary">
            <span class="flaticon-library text-white"></span>
          </div>
          <div class="feature-1-content">
            <h2>Business Profesional</h2>
            <p>Menjalankan bisnis secara Profesional dalam hal Accounting, sehingga perusahaan bisa bertumbuh dengan pesat</p>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-6 mb-5">
        <h2 class="section-title-underline mb-3">
          <span>Galeri Jurusan</span>
        </h2>
        <p>Galeri Kegiatan Jurusan Akutansi</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
          <div class="owl-slide-3 owl-carousel">
              @foreach ($galeri as $galeris)
                <div class="course-1-item">
                  <figure class="thumnail">
                    <a href="#"><img src="{{ asset('storage/images/'.$galeris->gambar) }}" alt="Image" width="300px" height="190px"></a>
                    {{-- <div class="price">$99.00</div> --}}
                    <div class="category"><h3>{{ $galeris->judul }}</h3></div>  
                  </figure>
                </div>
              @endforeach
          </div>
      </div>
    </div>
  </div>
</div>
<div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h2 class="section-title-underline style-2">
          <span>Tentang Jurusan Akutansi</span>
        </h2>
      </div>
      <div class="col-lg-8">
        <p class="lead text-white">Jurusan Akutansi & Perbankan SMK Negeri 1 Kota Bima adalah Jurusan yang memiliki nilai prospek yang sangat tinggi dalam dunia industri 4.0 sekarang, sehingga siswa dan siswi di bekali dengan ilmu Akutansi maupun dunia perbankan sehingga siswa dan siswi memahami secara keseluruhan bahwa prospek yang didapatkan sangatkan perlukan di massa yang akan datang.</p>
      </div>
    </div>
  </div>
</div>

<!-- // 05 - Block -->
{{-- <div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-4">
        <h2 class="section-title-underline">
          <span>Testimonials</span>
        </h2>
      </div>
    </div>


    <div class="owl-slide owl-carousel">

      <div class="ftco-testimonial-1">
        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
          <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
          <div>
            <h3>Allison Holmes</h3>
            <span>Designer</span>
          </div>
        </div>
        <div>
          <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
        </div>
      </div>

      <div class="ftco-testimonial-1">
        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
          <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
          <div>
            <h3>Allison Holmes</h3>
            <span>Designer</span>
          </div>
        </div>
        <div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
        </div>
      </div>

      <div class="ftco-testimonial-1">
        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
          <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3">
          <div>
            <h3>Allison Holmes</h3>
            <span>Designer</span>
          </div>
        </div>
        <div>
          <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
        </div>
      </div>

      <div class="ftco-testimonial-1">
        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
          <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
          <div>
            <h3>Allison Holmes</h3>
            <span>Designer</span>
          </div>
        </div>
        <div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
        </div>
      </div>

      <div class="ftco-testimonial-1">
        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
          <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
          <div>
            <h3>Allison Holmes</h3>
            <span>Designer</span>
          </div>
        </div>
        <div>
          <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
        </div>
      </div>

      <div class="ftco-testimonial-1">
        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
          <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3">
          <div>
            <h3>Allison Holmes</h3>
            <span>Designer</span>
          </div>
        </div>
        <div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
        </div>
      </div>

    </div>
    
  </div>
</div> --}}


{{-- <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="icon flaticon-mortarboard"></span>
        <h3>Our Philosphy</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="icon flaticon-school-material"></span>
        <h3>Academics Principle</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
          Dolore, amet reprehenderit.</p>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="icon flaticon-library"></span>
        <h3>Key of Success</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
          Dolore, amet reprehenderit.</p>
      </div>
    </div>
  </div>
</div> --}}

<div class="news-updates">
  <div class="container">
     
    <div class="row">
      <div class="col-12">
         <div class="section-heading">
          <h2 class="text-black">News &amp; Updates</h2>
          {{-- <a href="#">Read All News</a> --}}
        </div>
        <div class="owl-slide-3 owl-carousel">
          @foreach ($informasi as $item)
            <div class="course-1-item">
              <figure class="thumnail">
                <a href="#"><img src="{{ asset('storage/infromasi/'.$item->gambar) }}" alt="Image" width="300px" height="190px"></a>
                {{-- <div class="price">$99.00</div> --}}
                <div class="category"><h3>{{ $item->judul }}</h3></div>
                  <div class="container">
                    <p>{!! Str::limit($item->informasi, 200)!!}</p>
                    <a href="{{ route('informasi.detail',$item->id) }}">Read More News</a> 
                  </div>
              </figure>
            </div>
          @endforeach
      </div>
    </div>
  </div>
</div>

<div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <h2>Subscribe to us!</h2>
        <p>Yuk Bantu dan Dukung Jurusan Akutansi untuk Menjadi kedepan lebih baik</p>
      </div>
      <div class="col-lg-5">
        <form action="" class="d-flex">
          <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
          <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection 