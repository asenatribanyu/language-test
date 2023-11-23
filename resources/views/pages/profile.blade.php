@extends('layouts.userDashboard')
@section('content')
    <div
        class="mt-7 p-5 max-w-screen-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="border-b-2 border-gray-200">
            <h1 class="pb-2 text-2xl font-semibold dark:text-white">My Profile</h1>
        </div>
        <div class="mt-5">
            <div class="mb-5 flex justify-center">
                <img class="w-52 h-52 object-cover rounded-full bg-gray-50" src="{{ asset('storage/' . $profile->picture) }}"
                    alt="profile-picture">
            </div>
            <div class="flex justify-center">
                <div class="w-3/4">
                    <div class="mb-5">
                        <form action="">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="user_avatar">Change
                                Picture</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </form>
                    </div>
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                            Name</label>
                        <input type="text" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="{{ $profile->name }}" disabled>
                    </div>
                    <div class="mb-5">
                        <label for="npm"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPM</label>
                        <input type="text" id="npm"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="{{ $profile->profile->npm }}" disabled>
                    </div>
                    <div class="mb-5">
                        <label for="faculty"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Faculty</label>
                        <input type="text" id="faculty"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="{{ $profile->profile->faculty }}" disabled>
                    </div>
                    <div class="mb-5">
                        <label for="program_study"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program
                            Study</label>
                        <input type="text" id="program_study"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="{{ $profile->profile->program_study }}" disabled>
                    </div>
                    <div class="mb-5">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="{{ $profile->email }}" disabled>
                    </div>
                    <div class="mb-5">
                        <label for="created" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account
                            Created</label>
                        <input type="text" id="created"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="{{ $profile->email_verified_at->format('Y-m-d') }}" disabled>
                    </div>
                    <div class="mb-5 border-b-2 border-gray-200">
                        <div class="pb-5">
                            <label for="registrant"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Registrant</label>
                            <input type="text" id="registrant"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="{{ ucwords(strtolower($profile->profile->registrant)) }}" disabled>
                        </div>
                    </div>
                    <div>
                        <button type="button"
                            class="px-5 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
