@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Dashboard</h1>
        <p>Welcome to the dashboard</p>
        @foreach ($enrollments as $enrollment)
        <div class="card shadow p-2 mb-2">
          <h2>{{ $enrollment->trust->name }}</h2>
          <p>{{ $enrollment->trust->code }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
