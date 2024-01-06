@extends('layouts.exam')
@section('content')
    <div class="w-full flex gap-5 max-md:block">
        @include('partials.testTakerProfile')
        <div class="w-3/5">
            @include('examEPT.partials.sectionOne.listeningCompPartA')
            @include('examEPT.partials.sectionOne.listeningCompPartB')
            @include('examEPT.partials.sectionOne.listeningCompPartC')
            @include('examEPT.partials.sectionTwo.structureExpression')
            @include('examEPT.partials.sectionTwo.writtenExpression')
            @include('examEPT.partials.sectionThree.readingComp')
            @include('examEPT.partials.finishPage')
        </div>
    </div>
@endsection
