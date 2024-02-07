<div
    class="p-5 mt-5 bg-white border border-gray-200 rounded-lg shadow max-md:w-full max-md:h-full dark:bg-gray-800 dark:border-gray-700">
    <div class="border-b-2 border-gray-200 dark:border-gray-700">
        <h1 class="pb-2 text-2xl font-semibold dark:text-white">Finish Page</h1>
    </div>
    <div class="mt-5">
        <h2 class="text-xl font-normal">Part I - Listening</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'i')
                    <button type="button" id="finishQuestionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-xl font-normal">Part II - Listening</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'ii')
                    <button type="button" id="finishQuestionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-xl font-normal">Part III - Listening</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'iii')
                    <button type="button" id="finishQuestionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-xl font-normal">Part IV - Listening</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'iv')
                    <button type="button" id="finishQuestionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-xl font-normal">Part V - Reading</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'v')
                    <button type="button" id="finishQuestionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-xl font-normal">Part VI - Reading</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'vi')
                    <button type="button" id="finishQuestionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-xl font-normal">Part VII - Reading</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'vii')
                    <button type="button" id="finishQuestionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Footer Navigation --}}
    <div class="flex items-center justify-end pt-3 mt-5 border-t-2 border-gray-200 dark:border-gray-700">
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Finish</button>
    </div>
</div>
