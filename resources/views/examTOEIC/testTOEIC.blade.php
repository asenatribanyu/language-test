@extends('layouts.exam')
@section('content')
    <div class="flex w-full gap-5 max-md:block">
        @include('partials.testTakerProfile')
        <div class="w-3/5">
            @include('examTOEIC.partials.listening.partI')
            @include('examTOEIC.partials.listening.partII')
            @include('examTOEIC.partials.listening.partIII')
            @include('examTOEIC.partials.listening.partIV')
            @include('examTOEIC.partials.reading.partV')
            @include('examTOEIC.partials.reading.partVI')
            @include('examTOEIC.partials.reading.partVII')
            @include('examTOEIC.partials.finishPage')
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('js/examGlobal.js') }}"></script>
@endpush
