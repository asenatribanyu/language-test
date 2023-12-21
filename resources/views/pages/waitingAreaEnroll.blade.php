@extends('layouts.userDashboard')
@section('content')
    <div class="w-full flex gap-5 max-md:block">
        <div
            class="mt-5 p-5 w-2/5 h-[505px] max-md:h-[510px] max-md:w-full bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border border-gray-200">
            <div class="border-b-2 border-gray-200">
                <h1 class="pb-2 text-2xl font-semibold dark:text-white">Test Taker Profile</h1>
            </div>
            <div class="mt-5 flex justify-center">
                <img class="w-24 h-24 object-cover rounded-full bg-gray-50" src="{{ asset('storage/' . $profile->picture) }}"
                    alt="profile-picture">
            </div>
            <div class="font-semibold">
                <div class="flex mt-5">
                    <div class="w-1/3">Registrant</div>
                    <div class="w-1/3">:</div>
                    <div class="w-1/2 -ms-32 max-md:-ms-20 font-normal border-b border-gray-200">
                        {{ ucwords(strtolower($profile->profile->registrant)) }}</div>
                </div>
                <div class="flex mt-5">
                    <div class="w-1/3">Name</div>
                    <div class="w-1/3">:</div>
                    <div class="w-1/2 -ms-32 max-md:-ms-20 font-normal border-b border-gray-200">{{ $profile->name }}
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="w-1/3">NPM</div>
                    <div class="w-1/3">:</div>
                    <div class="w-1/3 -ms-32 max-md:-ms-20 font-normal border-b border-gray-200">
                        {{ $profile->profile->npm }}</div>
                </div>
                <div class="flex mt-5">
                    <div class="w-1/3">Faculty</div>
                    <div class="w-1/3">:</div>
                    <div class="w-1/3 -ms-32 max-md:-ms-20 font-normal border-b border-gray-200">
                        {{ $profile->profile->faculty }}</div>
                </div>
                <div class="flex mt-5">
                    <div class="w-1/3">Program Study</div>
                    <div class="w-1/3">:</div>
                    <div class="w-1/3 -ms-32 max-md:-ms-20 font-normal border-b border-gray-200">
                        {{ $profile->profile->program_study }}</div>
                </div>
            </div>
            <div class="flex items-center p-4 mt-5 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Warning!</span> Make sure your profile above is correct.
                </div>
            </div>
        </div>
        <div
            class="mt-7 p-5 w-3/5 h-1/2 max-md:w-full max-md:h-full bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border border-gray-200">
            <div class="border-b-2 border-gray-200">
                <h1 class="pb-2 text-2xl font-semibold dark:text-white">EPT/TOEIC Waiting Area</h1>
            </div>
            <div class="mb-5 mt-5">
                <label for="testDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Test
                    Date</label>
                <input type="text" id="testDate"
                    class="bg-gray-50 cursor-not-allowed border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="21/12/2023 10:00 WIB" disabled>
            </div>
            <div class="mb-5">
                <label for="numberQuestion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of
                    Question</label>
                <input type="text" id="numberQuestion"
                    class="bg-gray-50 cursor-not-allowed border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="140" disabled>
            </div>
            <div class="mb-5">
                <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                <input type="text" id="duration"
                    class="bg-gray-50 cursor-not-allowed border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="120 Minutes" disabled>
            </div>
            <div id="accordion-open" data-accordion="open">
                <h2 id="accordion-open-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-1" aria-expanded="false"
                        aria-controls="accordion-open-body-1">
                        <span class="flex text-blue-600 dark:text-blue-500 items-center"><svg class="w-5 h-5 me-2 shrink-0"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg> Exam Rules</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                    <div class="p-5 border border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Selama EPT/TOEIC berlangsung, peserta dilarang
                            untuk:
                        </p>
                        <section class="mt-2 mb-2 text-gray-500 dark:text-gray-400">
                            <li>Dilarang keluar dari halaman/aplikasi/tampilan tes (karena terdapat sistem kick by system).
                            </li>
                            <li>Dilarang keluar atau mematikan kamera pada aplikasi meeting.</li>
                            <li>Tes tidak dapat dilakukan menggunakan mobile device.</li>
                            <li>Tes tidak dapat dilakukan menggunakan browser selain Safe Exam Browser (SEB).</li>
                            <li>Tes tidak dapat dilakukan menggunakan konfiguasi selain yang telah kami buat.</li>
                            <li>Tombol start dapat ditekan ketika admin telah membuka/memulai tes.</li>
                            <li>Pastikan foto profile anda pada “Test Taker Profile Section” sudah benar.</li>
                            <li>Dilarang untuk tengok kanan dan kiri ketika tes telah dimulai.</li>
                            <li>Dilarang untuk berbicara ketika tes telah dimulai.</li>
                        </section>
                        <p class="text-gray-500 dark:text-gray-400">Jika hal-hal tersebut terdeteksi oleh sistem atau
                            terlihat oleh
                            petugas pelaksana tes, maka peserta dapat dikeluarkan tanpa pemberitahuan sebelumnya.</p>
                        <div class="flex gap-5 max-md:block">
                            <video class="mt-5 rounded-lg" width="450" controls>
                                <source class="" src="/docs/videos/flowbite.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <video class="mt-5 rounded-lg" width="450" controls>
                                <source class="" src="/docs/videos/flowbite.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-5 items-center border-gray-200 rounded-b dark:border-gray-600">
                <a href="{{ URL::previous() }}" type="button"
                    class=" text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Back</a>
                <a href="#" target="_blank"
                    class="ms-3 text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Conference
                    Link</a>
                <button type="button"
                    class="ms-3 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Start</button>
            </div>
        </div>
    </div>
@endsection
