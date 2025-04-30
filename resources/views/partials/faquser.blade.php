
<div class="faq">
    <div class="container">
        <div class="text-center">
            <div class="h2-faq-wrapper">
                <h2 class="fw-bold h2-faq" id="faq-title">Pertanyaan yang Sering Diajukan</h2>
                <span class="faq-underline"></span>
            </div>
        </div>

        <div class="row row-cols-lg-2 row-cols-1 g-4 pt-5" id="faq-list">
            </div>
    </div>
</div>

<script>
    const language = 'ID'; // Ganti dengan bahasa yang sesuai ('EN', 'SD')
    const faqTitleElement = document.getElementById('faq-title');
    const faqListElement = document.getElementById('faq-list');

    const faqs = [
        {
            id: 1,
            question_id: "Apa itu CMH dan bagaimana cara kerjanya?",
            answer_id: "CMH (Create Music Hub) adalah platform yang membantu Anda membuat musik dengan mudah menggunakan teknologi AI. Cara kerjanya adalah dengan memasukkan lirik atau memilih genre musik yang diinginkan, kemudian sistem akan menghasilkan musik sesuai dengan preferensi Anda.",
            question_en: "What is CMH and how does it work?",
            answer_en: "CMH (Create Music Hub) is a platform that helps you create music easily using AI technology. It works by inputting lyrics or choosing your desired music genre, then the system will generate music according to your preferences.",
            question_sd: "Naon CMH sareng kumaha cara kerjana?",
            answer_sd: "CMH (Create Music Hub) nyaéta platform anu ngabantos anjeun nyieun musik gampil ngagunakeun téknologi AI. Cara kerjana ku cara ngalebetkeun lirik atanapi milih genre musik anu dipikahoyong, then sistem bakal ngahasilkeun musik saluyu sareng préferénsi anjeun."
        },
        {
            id: 2,
            question_id: "Jenis musik apa saja yang bisa dibuat dengan CMH?",
            answer_id: "CMH dapat membuat berbagai jenis musik termasuk pop, jazz, Akustik, dan banyak genre lainnya. Anda memiliki fleksibilitas untuk memilih dan mengkustomisasi genre sesuai keinginan.",
            question_en: "What types of music can be created with CMH?",
            answer_en: "CMH can create various types of music including pop, jazz, Accoustic , and many other genres. You have the flexibility to choose and customize genres according to your preferences.",
            question_sd: "Jenis musik naon waé anu tiasa didamel ku CMH?",
            answer_sd: "CMH tiasa nyieun rupa-rupa jenis musik kaasup pop, jazz, Akustik , sareng seueur genre sanésna. Anjeun gaduh fleksibilitas pikeun milih sareng ngakustomisasi genre saluyu sareng kahayang."
        },
        {
            id: 3,
            question_id: "Apakah saya bisa memilih genre musik tertentu?",
            answer_id: "Ya, Anda dapat memilih genre musik spesifik yang Anda inginkan. CMH menyediakan berbagai pilihan genre dan sub-genre yang dapat disesuaikan dengan preferensi Anda.",
            question_en: "Can I choose a specific music genre?",
            answer_en: "Yes, you can choose the specific music genre you want. CMH provides various genre and sub-genre options that can be customized to your preferences.",
            question_sd: "Naha abdi tiasa milih genre musik anu tangtu?",
            answer_sd: "Leres, Anjeun tiasa milih genre musik spesifik anu dipikahoyong. CMH nyayogikeun rupa-rupa pilihan genre sareng sub-genre anu tiasa disuaikeun sareng préferénsi Anjeun."
        },
        {
            id: 4,
            question_id: "Apakah saya perlu keahlian musik untuk menggunakan CMH?",
            answer_id: "Tidak, CMH dirancang untuk dapat digunakan oleh siapa saja, baik yang memiliki latar belakang musik maupun tidak. Interface yang user-friendly memudahkan pengguna untuk membuat musik.",
            question_en: "Do I need musical expertise to use CMH?",
            answer_en: "No, CMH is designed to be used by anyone, whether they have a musical background or not. The user-friendly interface makes it easy for users to create music.",
            question_sd: "Naha abdi butuh kaahlian musik pikeun ngagunakeun CMH?",
            answer_sd: "Henteu, CMH dirancang pikeun tiasa dianggo ku saha waé, boh anu gaduh kasang tukang musik atanapi henteu. Interface anu gampil dianggo ngagampangkeun pangguna pikeun nyieun musik."
        },
        {
            id: 5,
            question_id: "Bagaimana cara mengubah lirik menjadi lagu?",
            answer_id: "Cukup masukkan lirik Anda ke dalam sistem, pilih genre dan mood yang diinginkan, kemudian CMH akan mengolah lirik tersebut menjadi lagu lengkap dengan melodi dan aransemen yang sesuai.",
            question_en: "How do I turn lyrics into a song?",
            answer_en: "Simply input your lyrics into the system, choose your desired genre and mood, then CMH will process those lyrics into a complete song with matching melody and arrangement.",
            question_sd: "Kumaha cara ngarobah lirik jadi lagu?",
            answer_sd: "Ukur lebetkeun lirik Anjeun kana sistem, pilih genre sareng mood anu dipikahoyong, teras CMH bakal ngolah lirik éta jadi lagu lengkep sareng melodi sareng aransemen anu cocog."
        },
        {
            id: 6,
            question_id: "Berapa lama waktu yang dibutuhkan untuk membuat musik?",
            answer_id: "Waktu pembuatan musik bervariasi tergantung kompleksitas dan panjang lagu yang diinginkan, biasanya berkisar antara 5-15 menit untuk satu lagu lengkap.",
            question_en: "How long does it take to create music?",
            answer_en: "Music creation time varies depending on the complexity and length of the desired song, typically ranging from 5-15 minutes for a complete song.",
            question_sd: "Sabaraha lami waktos anu dibutuhkeun pikeun nyieun musik?",
            answer_sd: "Waktos pembuatan musik bervariasi gumantung kana kompleksitas sareng panjang lagu anu dipikahoyong, biasana antara 5-15 menit pikeun hiji lagu lengkep."
        },
        {
            id: 7,
            question_id: "Apakah musik yang dihasilkan bisa digunakan secara komersial?",
            answer_id: "Ya, musik yang dihasilkan melalui CMH dapat digunakan secara komersial sesuai dengan ketentuan lisensi yang dipilih.",
            question_en: "Can the generated music be used commercially?",
            answer_en: "Yes, music generated through CMH can be used commercially according to the chosen license terms.",
            question_sd: "Naha musik anu dihasilkeun tiasa dianggo sacara komersial?",
            answer_sd: "Leres, musik anu dihasilkeun ngaliwatan CMH tiasa dianggo sacara komersial saluyu sareng katangtosan lisénsi anu dipilih."
        },
        {
            id: 8,
            question_id: "Bagaimana jika saya mengalami masalah saat membuat musik?",
            answer_id: "Kami menyediakan dukungan teknis dan panduan lengkap untuk membantu Anda mengatasi masalah. Anda juga dapat menghubungi tim support kami melalui halaman kontak.",
            question_en: "What if I experience problems while creating music?",
            answer_en: "We provide technical support and comprehensive guides to help you troubleshoot. You can also contact our support team through the contact page.",
            question_sd: "Kumaha upami abdi ngalaman masalah nalika nyieun musik?",
            answer_sd: "Kami nyayogikeun dukungan téknis sareng panduan lengkep pikeun ngabantos Anjeun ngungkulan masalah. Anjeun ogé tiasa ngahubungi tim support kami ngaliwatan halaman kontak."
        }
    ];

    function generateFaqItem(data) {
        let question = '';
        let answer = '';

        if (language === "EN") {
            question = data.question_en;
            answer = data.answer_en;
            faqTitleElement.textContent = "Frequently Asked Questions";
        } else if (language === "SD") {
            question = data.question_sd;
            answer = data.answer_sd;
            faqTitleElement.textContent = "Patarosan anu Sering Ditaroskeun";
        } else {
            question = data.question_id;
            answer = data.answer_id;
            faqTitleElement.textContent = "Pertanyaan yang Sering Diajukan";
        }

        const col = document.createElement('div');
        col.classList.add('col');
        col.innerHTML = `
            <div class="accordion shadow-sm">
                <div class="accordion-item">
                    <div class="accordion-header" id="heading-${data.id}" aria-expanded="false" aria-controls="collapse-${data.id}">
                        <span class="faq-question-text">${question}</span>
                        <span class="accordion-icon" id="icon-${data.id}">\u25B8</span>
                    </div>
                    <div id="collapse-${data.id}" class="accordion-body faq-answer">
                        <div class="faq-divider"></div>
                        <div class="faq-answer-text">${answer}</div>
                    </div>
                </div>
            </div>
        `;

        const header = col.querySelector('.accordion-header');
        const body = col.querySelector('.accordion-body');
        const icon = col.querySelector(`#icon-${data.id}`);

        // Set initial state: ensure all FAQ items are closed by default
        body.style.display = 'none';
        icon.textContent = '\u25B8'; // ►

        header.addEventListener('click', () => {
    const expanded = header.getAttribute('aria-expanded') === 'true';
    header.setAttribute('aria-expanded', !expanded);

    // Alih-alih mengubah display langsung, kita cukup menambahkan atau menghapus kelas show
    if (expanded) {
        body.style.display = 'none'; // Sembunyikan body
        icon.textContent = '\u25B8'; // ►
    } else {
        body.style.display = 'block'; // Tampilkan body
        icon.textContent = '\u25BE'; // ▼
    }
});





        return col;
    }

    faqs.forEach(faq => {
        faqListElement.appendChild(generateFaqItem(faq));
    });
</script>
