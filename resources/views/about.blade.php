<x-layout :title="$title">

    <main>
        <div class="my-5 py-4 px-4 mx-auto max-w-screen-xl lg:px-6 shadow-lg bg-white border border-gray-200">
            <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-12 mt-5">
                <div class="md:w-1/3 flex-shrink-0 mb-8 md:mb-0">
                    <img src="{{ asset('img/katakita.png') }}" alt="Logo Katakita"
                        class="size-full mx-auto object-contain">
                </div>

                <div class="md:w-2/3 text-center md:text-left">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-6">Tentang KataKita</h2>

                    <div class="prose prose-lg mx-auto md:mx-0 text-gray-700 leading-relaxed text-justify">
                        <p class="mb-4">Selamat datang di KataKita, sebuah platform di mana ide-ide bertemu, cerita terungkap, dan pengetahuan dibagikan. Kami percaya bahwa setiap orang memiliki kisah untuk diceritakan, pengalaman untuk dibagikan, dan wawasan untuk menginspirasi,
                            KataKita hadir sebagai ruang digital di mana para penulis dapat dengan bebas berekspresi,
                            dan para pembaca dapat menemukan beragam tulisan yang menginspirasi, mendidik, serta
                            menghibur.</p>

                        <p class="mb-4">Kami percaya bahwa pengetahuan dan cerita seharusnya dapat diakses oleh semua orang, dan
                            setiap individu memiliki potensi untuk menjadi kontributor. Itulah mengapa KataKita dibangun
                            di atas fondasi open-source, memungkinkan transparansi, fleksibilitas, dan partisipasi
                            komunitas dalam pengembangannya.
                            Kami sangat senang Anda ada di sini! Kami mengundang Anda untuk menjelajahi setiap artikel, meninggalkan komentar, dan berbagi pemikiran Anda. Jika Anda juga seorang penulis yang memiliki hasrat untuk berbagi, kami sangat terbuka untuk kolaborasi.</p>

                        <p class="mb-4">
                            Terima kasih telah menjadi bagian dari perjalanan Katakita. Mari kita terus membaca, belajar, dan tumbuh bersama!
                        </p>
                    </div>
                </div>
            </div>

            <div class="prose prose-lg mx-auto text-gray-700 leading-relaxed text-justify p-14">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mt-8 mb-4">Misi Kami</h3>
                <ul class="list-disc list-inside space-y-2 mb-6">
                    <li><strong class="text-teal-600">Memberdayakan Penulis:</strong> Menyediakan alat dan ruang yang
                        intuitif bagi siapa saja untuk mulai menulis, menerbitkan, dan menjangkau audiens global tanpa
                        batasan.</li>
                    <li><strong class="text-teal-600">Menghadirkan Konten Berkualitas:</strong> Menjadi sumber beragam
                        tulisan yang relevan, mendalam, dan menarik dari berbagai sudut pandang.</li>
                    <li><strong class="text-teal-600">Membangun Komunitas:</strong> Menciptakan ekosistem yang
                        kolaboratif
                        di mana penulis dan pembaca dapat berinteraksi, belajar, dan tumbuh bersama.</li>
                    <li><strong class="text-teal-600">Mengedepankan Keterbukaan:</strong> Beroperasi sebagai proyek
                        <strong class="text-teal-600">open-source</strong> untuk mendorong inovasi, transparansi, dan
                        kontribusi
                        dari komunitas pengembang dan pengguna.</li>
                </ul>

                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mt-8 mb-4">Apa yang Anda Temukan di KataKita?
                </h3>
                <p class="mb-4">Di KataKita, Anda akan menemukan:</p>
                <ul class="list-disc list-inside space-y-2 mb-6">
                    <li><strong class="text-teal-600">Untuk Pembaca:</strong> Perpustakaan artikel yang terus
                        berkembang,
                        mencakup berbagai topik mulai dari teknologi, gaya hidup, seni, opini, hingga kisah personal.
                        Setiap
                        tulisan adalah cerminan pemikiran unik dari para kontributor kami.</li>
                    <li><strong class="text-teal-600">Untuk Penulis:</strong> Sebuah platform yang mudah digunakan untuk
                        membuat blog pribadi, berbagi ide, membangun audiens, dan menjadi bagian dari komunitas penulis
                        yang
                        dinamis. Anda memiliki kendali penuh atas konten Anda.</li>
                </ul>

                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mt-8 mb-4">Bergabunglah dengan Perjalanan
                    KataKita
                </h3>
                <p class="mb-6">Kami mengundang Anda untuk menjadi bagian dari komunitas kami. Baik Anda seorang
                    pembaca
                    yang mencari inspirasi baru, atau seorang penulis yang siap berbagi suara Anda, KataKita adalah
                    tempatnya.</p>

                {{-- Call to Action Button --}}
                <div class="text-center mt-6">
                    <a href="/register"
                        class="inline-block bg-teal-600 hover:bg-teal-700 text-white font-bold py-3 px-8 rounded-full text-lg shadow-lg transform transition duration-300 hover:scale-105">
                        Mulai Tulis Kisah Anda Sendiri Hari Ini!
                    </a>
                    <p class="mt-3 text-sm text-gray-600">Atau <a href="/"
                            class="text-teal-600 hover:underline">jelajahi artikel terbaru kami</a>.</p>
                </div>
            </div>
        </div>
    </main>

</x-layout>
