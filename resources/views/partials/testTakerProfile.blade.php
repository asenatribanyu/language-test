<div class="w-2/5 max-md:w-full">
    <div
        class="mt-5 p-5 w-full max-md:w-full bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border border-gray-200">
        <div class="border-b-2 border-gray-200">
            <h1 class="pb-2 text-2xl font-semibold dark:text-white">Test Taker Profile</h1>
        </div>
        <div class="flex justify-center gap-2 mt-5 w-full">
            <div class="flex justify-center items-center w-1/3">
                <img class="w-24 h-24 max-md:w-20 max-md:h-20 object-cover rounded-full"
                    src="{{ asset('storage/' . $profile->picture) }}" alt="profile-picture">
            </div>
            <div class="flex flex-wrap items-center w-full">
                <div class="flex flex-wrap gap-y-1">
                    <span
                        class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ ucwords(strtolower($profile->profile->registrant)) }}</span>
                    <span
                        class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">{{ $profile->profile->faculty }}</span>
                    <span
                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $profile->profile->program_study }}</span>
                </div>
                <div class="w-ful">
                    <div class="flex gap-2 font-semibold">
                        Name:
                        <div class="font-normal border-b border-gray-200">
                            {{ $profile->name }}
                        </div>
                    </div>
                    <div class="flex gap-2 font-semibold">
                        NPM:
                        <div class="font-normal border-b border-gray-200">
                            {{ $profile->profile->npm }}
                        </div>
                    </div>
                </div>
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
