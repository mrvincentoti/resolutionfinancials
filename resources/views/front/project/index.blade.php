@extends('layouts.main')
@section('content')

<div class="mt-5">
    @include('front.partials.projects-table', ['data' => 'Projects'])
    
    @include('front.partials.projects-chart', ['data' => 'Projects'])
</div>

@endsection