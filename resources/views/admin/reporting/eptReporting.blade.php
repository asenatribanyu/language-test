@extends('layouts.adminDashboard')
@section('content')
    <div class="p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between border-b-2 border-gray-200 dark:border-gray-700">
            <h1 class="pb-1 text-2xl font-semibold text-gray-900 dark:text-white">EPT Reporting</h1>
            <button type="button" data-modal-target="add-modal" data-modal-toggle="add-modal"
                class="px-3 py-1 -mt-1 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">.xlsx</button>
        </div>
        <section class="mt-5">
            <table id="myTable" class="w-full text-sm text-left text-gray-500 display dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                No
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Name
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                First Section Score
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Second Section Score
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Third Section Score
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Total Score
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Exam Date
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eptScores as $eptScore)
                        <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td scope="row" class="px-6 py-4">
                                {{ $eptScore->user->name }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                {{ $eptScore->score_first_section }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                {{ $eptScore->score_second_section }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                {{ $eptScore->score_third_section }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                {{ $eptScore->score_total }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($eptScore->created_at)->translatedFormat('j F Y') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
@endsection
@push('script')
    <script src="{{ asset('js/adminGlobal.js') }}"></script>
@endpush
