@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4"> My Projects</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Project Name</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Revenues</th>
                    <th scope="col">Client</th>
                    <th scope="col">Project Summary</th>
                    <th scope="col">Status</th>
                    <th scope="col">Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->project_name }}</th>
                        <td>{{ $project->start_date }}</td>
                        <td>{{ $project->end_date }}</td>
                        <td>{{ $project->revenues }}€</td>
                        <td>{{ $project->client }}</td>
                        <td>{{ $project->project_summary }}</td>
                        <td>{{ $project->is_completed == 0 ? 'Not Completed' : 'Completed' }}</td>
                        <td>{{ $project->slug }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
