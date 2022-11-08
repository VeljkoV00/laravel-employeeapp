@extends('layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Departments</h1>

    </div>
    <div class="row">
        
        <div class="card mx-auto">
            <div class="card-header">

                @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
                <div class="row">
                    <div class="col">
                        <form action="" method="GET">
                          @csrf
                            <div class="form-row align-items-center">
                                <div class="col">

                                    <input type="search" name="search" id="inlineFormInput" placeholder="Search"
                                        class="form-control mb-2">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="{{ route('departments.create') }}" class=" float-right">Create a department</a>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <th scope="row">{{ $department->id }}</th>
                                <td>{{ $department->name }}</td>
                                <td><a href="{{ route('departments.edit', $department) }}" class="btn btn-success">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
@endsection
