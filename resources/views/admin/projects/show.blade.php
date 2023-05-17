@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if (session('message'))
            <h5 class="text-warning">{{ session('message') }}</h5>
        @endif
        <div class="d-flex align-items-center">
            <a href="{{ route('admin.projects.index')}}" class="btn btn-primary btn-sm me-2">Back</a>
            <h2 class="fs-4 text-secondary my-4">Project Details</h2>
        </div>
        <h4>Project name: {{ $project->project_name }}</h4>
        <div>Project start date: {{ $project->start_date }}</div>
        <div>Project end date: {{ $project->end_date }}</div>
        <div>Project revenues: {{ $project->revenues }}€</div>
        <div>Project client: {{ $project->client }}</div>
        <div>Project summary: {{ $project->project_summary }}</div>
        <div>Project status: {{ $project->is_completed == 0 ? 'Not Completed' : 'Completed' }}</div>
        <div>Project slug: {{ $project->slug }}</div>
    </div>
@endsection
