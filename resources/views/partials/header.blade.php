<!-- header section strats -->
<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('vendor/images/logo.png')}}" alt="Logo" height="40" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="{{ url('product')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produk
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('musik-lirik') }}">BUAT MUSIK MELALUI LIRIK</a>
                            <a class="dropdown-item" href="{{ url('musik-instrumen') }}">BUAT MUSIK INSTRUMEN</a>
                            <a class="dropdown-item" href="{{ url('sound-effect') }}">BUAT EFEK SUARA</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="{{ url('product')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dukungan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="{{ url('contact')}}">HUBUNGI KAMI</a>
                            <a target="_blank" class="dropdown-item" href="{{ url('/katalog/Katalog Dapoer Catering SR.pdf') }}">INSTAGRAM</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('portfolio')}}">PORTOFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary" id="languageButton" onclick="toggleLanguage()">
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
