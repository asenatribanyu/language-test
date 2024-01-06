<div class="w-2/5">
    <div
        class="mt-5 p-5 w-full max-md:w-full bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border border-gray-200">
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
    </div>
    @if ($warningCard != false)
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
    @endif
</div>
