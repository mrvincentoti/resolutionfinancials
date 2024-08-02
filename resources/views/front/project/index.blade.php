@extends('layouts.main')
@section('content')

<div class="mt-5">
    @include('front.partials.projects-table', ['projects' => $projects, 'sectors' => $sectors, 'phases' => $phases, 'lgas' => $lgas])
    
    @include('front.partials.projects-chart', ['data' => 'Projects'])
</div>

@endsection