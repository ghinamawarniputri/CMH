<div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 mb-12">
            {{ app()->getLocale() === 'id' ? 'Bagaimana Cara Kerjanya' : 'How It Works' }}
        </h2>

        @php
            $steps = [
                [
                    'text' => app()->getLocale() === 'id'
                        ? 'Masukkan lirik Anda ke dalam kolom input.'
                        : 'Enter your lyrics into the input field.',
                    'image' => asset('images/howItWorks1.png'),
                ],
                [
                    'text' => app()->getLocale() === 'id'
                        ? 'Pilih genre musik dan tempo yang Anda inginkan.'
                        : 'Choose your desired music genre and tempo.',
                    'image' => asset('images/howItWorks2.png'),
                ],
                [
                    'text' => app()->getLocale() === 'id'
                        ? 'Biarkan AI kami menganalisis lirik Anda dan menghasilkan melodi.'
                        : 'Let our AI analyse your lyrics and generate a melody.',
                    'image' => asset('images/howItWorks3.png'),
                ],
                [
                    'text' => app()->getLocale() === 'id'
                        ? 'Unduh lagu Anda dan bagikan dengan semua orang!'
                        : 'Download your song and share it with everyone!',
                    'image' => asset('images/howItWorks4.png'),
                ],
            ];
        @endphp

        <div class="space-y-16">
            @foreach($steps as $index => $step)
                <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                    <div class="flex-shrink-0">
                        <img src="{{ $step['image'] }}" alt="Step {{ $index + 1 }}" class="w-64 h-auto rounded-xl shadow-lg">
                    </div>
                    <div>
                        <div class="text-sm text-blue-600 uppercase tracking-wide font-semibold mb-2">
                            {{ (app()->getLocale() === 'id' ? 'Langkah' : 'Step') . ' ' . ($index + 1) }}
                        </div>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            {{ $step['text'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
