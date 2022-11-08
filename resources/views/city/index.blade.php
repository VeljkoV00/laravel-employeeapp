@extends('layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cities</h1>

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
                <a href="{{ route('cities.create') }}" class=" float-right">Create a city</a>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">State</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cities as $city)
                            <tr>
                                <th scope="row">{{ $city->id }}</th>
                                <td>{{ $city->name }}</td>
                                <td>{{ $city->state->name }}</td>
                                <td><a href="{{ route('cities.edit', $city) }}" class="btn btn-success">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
@endsection
