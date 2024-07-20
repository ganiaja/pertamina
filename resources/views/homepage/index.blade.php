@include('homepage.layout.header')
        <div class="container">
            <div class="row justify-content-between" id="about">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <img src="https://cdn1-production-images-kly.akamaized.net/zboC3rqpYn5PbiWWn3NPvSteqtM=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4143364/original/059306900_1662019531-Pertamina.jpeg" alt="Image" class="img-fluid rounded
					">
                </div>
                <div class="col-lg-4 ps-lg-2">
                    <div class="mb-5">
                        <h1 class="text-black h4">One Energy, One Pertamina</h1>
                    </div>
                    <div class="d-flex mb-3 service-alt">
                        <div>
               
                        </div>
                        <div>
                            <h3>Pertamina memiliki peran strategis dalam menyediakan energi yang sangat dibutuhkan bangsa ini untuk menggerakkan seluruh sendi-sendi kehidupan di Indonesia. Atas tanggung jawabnya tersebut, Pertamina telah membangun jaringan bisnis yang terintegrasi, mulai dari hulu hingga hilir. Maka pada tanggal 12 Juni 2020, resmi terbentuk 6 (enam) subholding di bawah Pertamina, yaitu Upstream Subholding, Gas Subholding, Refinery and Petrochemical Subholding, NRE Subholding, Commercial and Trading Subholding, dan Integrated Marine Logistics Subholding.</h3>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="section sec-features" id="service">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature d-flex">
                        <span class="bi-bag-check-fill"></span>
                        <div>
                           <a href="https://pertamina.com/id/dokumen/laporan-tahunan"> <h3>Laporan Tahunan</h3> </a>
                            <p>Persereoan menyajikan informasi mengenai kinerja operasional dan financial serta wujud dari komitmen perusahaan terhadap pelaksanaan prinsip-prinsip keberlanjutan yang di susun dalam bentuk laporan tahunan dan laporan keberlanjutan</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature d-flex">
                        <span class="bi-wallet-fill"></span>
                        <div>
                           <a href="https://pertamina.com/id/profil-ppid-pt-pertamina-persero"><h3>Layanan Publik</h3></a> 
                            <p>Dalam memenuhi kebutuhan informasi bagi masyarakat,Pertamina memberikan akses yang luas untuk dapat mencari informasi seputar kegiatan energi di Indonesia</p>
                        

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature d-flex">
                    <span class="bi-pie-chart-fill"></span>
                        <div>
                           <a href="https://recruitment.pertamina.com/"><h3>Rekrutment</h3></a> 
                            <p>Pertamina membuka kesempatan yang seluas-luasnya bagi anak bangsa yang ingin berkarir di perusahaan dan berkontribusi secara besar-besaran terhadap kemajuan perekonomian bangsa</p>
                    
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-news" id="blog">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7">
                    <h2 class="heading text-primary">BERITA</h2>
                </div>
            </div>

            <div class="row">
                @foreach ($berita as $index => $data)
                <div class="col-lg-4">
                    <div class="card post-entry">
                        <a href="admin"><img src="{{ Storage::url($data->foto) }}" class="card-img-top" alt="Image"></a>
                        <div class="card-body">
                            <div><span class="text-uppercase font-weight-bold date">{{ $data->created_at }}</span></div>
                            <h5 class="card-title"><a href="berita">{{ $data->judul }}</a></h5>
                            <p class="mt-5 mb-0"><a href="#">Read more</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@include('homepage.layout.footer')