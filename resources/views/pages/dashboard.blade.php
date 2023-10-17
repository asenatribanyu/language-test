<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ 'css/global.css' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dashboard | Language Institute - Widyatama University</title>
</head>
<body>
    <div class="mx-auto border border-black/30 rounded-xl max-w-screen-xl mt-24 ">
        <div class="font-semibold p-3 text-2xl w-full rounded-xl border-b border-black/30">Test List</div>
        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 " data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                <span>English Profiency Test (EPT)</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
              <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">English Proficiency Test (EPT) atau lebih dikenal dengan TOEFL merupakan tes yang terstandarisasi untuk mengukur kemampuan Bahasa Inggris dari seseorang yang bahasa ibunya bukanlah Bahasa Inggris dan orang tersebut bertujuan untuk bekerja atau kuliah di negara yang menggunakan Bahasa Inggris sebagai bahasa resmi yang digunakan. TOEFL memiliki dua jenis tes, yaitu PBT (paper-based test) dan iBT (internet-based test). Untuk rincian sesi test adalah sebagai berikut:</p>
                <section class="p-3 mb-2 text-gray-500 dark:text-gray-400">
                    <li>Listening section  : 50 pertanyaan</li>
                    <li>Writing section    : 40 pertanyaan</li>
                    <li>Reading section    : 50 pertanyaan</li>
                    <li>Skor atau nilai untuk ujian PBT berkisar antara 310 – 677 sedangkan untuk yang iBT berkisar antara 217 – 677.</li>
                </section>
                <p class="mb-2 text-gray-500 dark:text-gray-400">Silakan klik tombol di bawah ini untuk dapat mengakses pengetesan EPT secara daring.</p>
                <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-500 focus:outline-none bg-white rounded-lg border border-gray-700 hover:bg-gray-400 hover:text-gray-50 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Panduan</button>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">START EPT</button>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">BUY EPT</button>
              </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 "data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                <span>Test of English for International Communication (TOEIC)</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
              <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Test of English for International Communication (TOEIC) merupakan tes bahasa Inggris untuk komunikasi internasional. Tes ini dirancang khusus untuk mengukur kemampuan bahasa Inggris sehari-hari orang-orang yang bekerja di lingkungan internasional.</p>
                <p class="text-gray-500 py-1.5 dark:text-gray-400">TOEIC terbagi menjadi dua jenis, yaitu TOEIC Listening and Reading Test.</p>
                <p class="text-gray-500 pt-2 dark:text-gray-400">TOEIC Listening and Reading Test terbagi menjadi dua sesi. Sesi pertama, listening (mendengarkan) terdiri dari 100 soal pilihan ganda. Sesi kedua, reading (membaca) terdiri dari 100 soal pilihan ganda. Untuk rincian sesi test adalah sebagai berikut : </p>
              </div>
              <section class="pl-9 mb-2 text-gray-500 dark:text-gray-400 ">
                <li>Photograph:20 pertanyaan</li>
                <li>Question Responce: 30 pertanyaan</li>
                <li>Conversation: 30 pertanyaan</li>
                <li>Short Talk: 20 pertanyaan</li>
                <li>Incomplete Sentences: 40 pertanyaan</li>
                <li>Text Completion: 20 pertanyaan</li>
                <li>Reading: 40 pertanyaan</li>
                <li>Skor atau nilai untuk ujian TOEIC online berkisar antara 10 – 995.</li>
              </section>
              <p class="mb-2 text-gray-500 pl-6 dark:text-gray-400">Silakan klik tombol di bawah ini untuk dapat mengakses pengetesan EPT secara daring.</p>
              <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-500 focus:outline-none bg-white rounded-lg border border-gray-700 hover:bg-gray-400 hover:text-gray-50 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Panduan</button>
              <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">START EPT</button>
              <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">BUY EPT</button>
            </div>
            <div id="accordion-arrow-icon-body-1" aria-labelledby="accordion-arrow-icon-heading-1">
              <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-red-600 dark:text-gray-400">KETIKA TES BERLANGSUNG PESERTA DILARANG UNTUK KELUAR/PERGI DARI "DISPLAY HALAMAN TES" HAL INI AKAN TERDETEKSI OLEH SISTEM DAN PESERTA AKAN DIKELUARKAN SECARA OTOMATIS, NILAI AKAN TERAKUMULASI SESUAI YANG SUDAH PESERTA KERJAKAN.</p>
              </div>
              <video class="w-80 pl-5" controls>
                <source src="/docs/videos/flowbite.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
</body>
</html>