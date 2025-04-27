@extends('layouts.app')

@section('content')
<section class="contact_section layout_padding contact-us">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Kontak Kami
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <h4>Alamat</h4>
                    <p class="p-alamat">Komp. Bandung Indah Raya, Blok G1A No.77, RT. 06/RW. 08, Mekarjaya, Kec. Rancasari, Kota Bandung, Jawa Barat 40292</p>
                </div>
                <div class="contact-info mt-4">
                    <h4>Telepon</h4>
                    <p>+62 822-9560-3115</p>
                </div>
                <div class="contact-info mt-4">
                    <h4>Email</h4>
                    <p>yukmari2211@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <form method="POST" action="/contact/send" novalidate>
                    @csrf
                    <div>
                        <label for="nama">Nama Anda</label>
                        <input type="text" id="nama" placeholder="Nama Anda" name="user_name" class="form-control" required autocomplete="off" />
                    </div>
                    <div>
                        <label for="email">Email Anda</label>
                        <input type="email" id="email" placeholder="Email Anda" name="email_name" class="form-control" required autocomplete="off" />
                    </div>
                    <div>
                        <label for="pesan">Pesan Anda</label>
                        <textarea class="form-control" id="pesan" name="message" rows="5" placeholder="Pesan Anda" required autocomplete="off"></textarea>
                    </div>
                    <div class="recaptcha-container">
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="cta-support">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection