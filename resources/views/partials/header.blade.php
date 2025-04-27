<!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/CMH-LOGO.jpg')}}" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">BERANDA</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PRODUK
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('produk-lirik') }}">BUAT MUSIK MELALUI LIRIK</a>
                            <a class="dropdown-item" href="{{ url('produk-instrumen') }}">BUAT MUSIK INSTRUMEN</a>
                            <a class="dropdown-item" href="{{ url('produk-efek') }}">BUAT EFEK SUARA</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="supportDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            DUKUNGAN
                        </a>
                        <div class="dropdown-menu" aria-labelledby="supportDropdown">
                            <a class="dropdown-item" href="{{ url('contact')}}">HUBUNGI KAMI</a>
                            <a class="dropdown-item" href="https://www.instagram.com/yukmaridotcom/" target="_blank">INSTAGRAM</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('portfolio')}}">PORTOFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn" id="languageButton" onclick="toggleLanguage()">
                            ID
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->
<script>
    const languages = ['ID', 'EN', 'SD'];
    let currentLanguageIndex = 0;

    function toggleLanguage() {
        currentLanguageIndex = (currentLanguageIndex + 1) % languages.length;
        const languageButton = document.getElementById('languageButton');
        if (languageButton) {
            languageButton.textContent = languages[currentLanguageIndex];
        }
        // Hapus atau komentari baris ini untuk mencegah pengalihan halaman
        // window.location.href = "{{ url('/change-language') }}/" + languages[currentLanguageIndex];
    }
</script>
