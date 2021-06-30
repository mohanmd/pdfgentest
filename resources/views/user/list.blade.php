@extends('layouts.app')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $key => $report)
                <tr>
                    <th scope="row">{{ $key +1}}</th>
                    <td>{{ $report->name }}</td>
                    <td>{{ $report->email }}</td>
                    <td>{{ $report->contact }}</td>
                    <td>{{ $report->message }}</td>
                    <td>
                        <a href="{{ route('pdf') }}" class="btn btn-warning">Export</a>
                        <a href="{{ route('delete',['id'=>$report->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection