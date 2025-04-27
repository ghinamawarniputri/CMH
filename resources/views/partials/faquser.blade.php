
<div class="faq">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center fw-bold h2-faq" id="faq-title">
                    Pertanyaan yang Sering Diajukan
                </h2>
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
            question_id: "Bagaimana cara membuat musik melalui lirik?",
            answer_id: "Anda dapat memasukkan lirik Anda pada halaman 'Buat Musik Melalui Lirik' dan mengikuti langkah-langkah yang disediakan.",
            question_en: "How do I create music through lyrics?",
            answer_en: "You can enter your lyrics on the 'Create Music Through Lyrics' page and follow the steps provided.",
            question_sd: "Kumaha cara nyieun musik ngaliwatan lirik?",
            answer_sd: "Anjeun tiasa ngalebetkeun lirik anjeun dina halaman 'Nyieun Musik Ngaliwatan Lirik' sareng nuturkeun léngkah-léngkah anu disayogikeun."
        },
        {
            id: 2,
            question_id: "Apakah saya bisa membuat musik instrumental?",
            answer_id: "Tentu, kunjungi halaman 'Buat Musik Instrumental' untuk opsi dan pengaturan yang tersedia.",
            question_en: "Can I create instrumental music?",
            answer_en: "Yes, please visit the 'Create Instrumental Music' page for available options and settings.",
            question_sd: "Naha abdi tiasa nyieun musik instrumental?",
            answer_sd: "Tangtos, mangga buka halaman 'Nyieun Musik Instrumental' kanggo pilihan sareng setélan anu sayogi."
        },
        {
            id: 3,
            question_id: "Di mana saya bisa membuat efek suara?",
            answer_id: "Anda bisa membuat efek suara kustom pada halaman 'Buat Efek Suara'.",
            question_en: "Where can I create sound effects?",
            answer_en: "You can create custom sound effects on the 'Create Sound Effects' page.",
            question_sd: "Di mana abdi tiasa nyieun épék sora?",
            answer_sd: "Anjeun tiasa nyieun épék sora kustom dina halaman 'Nyieun Épék Sora'."
        }
        // Tambahkan lebih banyak FAQ di sini
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
                        ${question}
                    </div>
                    <div id="collapse-${data.id}" class="accordion-body faq-answer">
                        ${answer}
                    </div>
                </div>
            </div>
        `;

        const header = col.querySelector('.accordion-header');
        const body = col.querySelector('.accordion-body');

        header.addEventListener('click', () => {
            const expanded = header.getAttribute('aria-expanded') === 'true' || false;
            header.setAttribute('aria-expanded', !expanded);
            body.style.display = expanded ? 'none' : 'block';
            header.classList.toggle('collapsed', expanded);
        });

        // Set initial state for the first item to be open (optional)
        if (data.id === 1) {
            header.setAttribute('aria-expanded', 'true');
            body.style.display = 'block';
            header.classList.remove('collapsed');
        } else {
            body.style.display = 'none';
            header.classList.add('collapsed');
        }

        return col;
    }

    faqs.forEach(faq => {
        faqListElement.appendChild(generateFaqItem(faq));
    });
</script>
