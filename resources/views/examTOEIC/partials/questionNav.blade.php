<div
    class="w-full p-5 mt-5 bg-white border border-gray-200 rounded-lg shadow max-md:w-full dark:bg-gray-800 dark:border-gray-700">
    <div>
        <h2 class="text-base font-normal">Part I - Listening</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'i')
                    <button type="button" id="questionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-base font-normal">Part II - Listening</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'ii')
                    <button type="button" id="questionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-base font-normal">Part III - Listening</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'iii')
                    <button type="button" id="questionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-base font-normal">Part IV - Listening</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'iv')
                    <button type="button" id="questionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-base font-normal">Part V - Reading</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'v')
                    <button type="button" id="questionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-base font-normal">Part VI - Reading</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'vi')
                    <button type="button" id="questionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-base font-normal">Part VII - Reading</h2>
        <div class="flex flex-wrap gap-1 mt-2">
            @foreach ($enrolls->exam->toeicQuestion as $question)
                @if ($question->section == 'vii')
                    <button type="button" id="questionNav-{{ $question->id }}"
                        class="w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>
</div>
