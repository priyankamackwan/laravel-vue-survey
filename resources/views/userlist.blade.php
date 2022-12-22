@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Users Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($users as $user)
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        @endforeach
      </tr>
    </tbody>
  </table>
</div>

@endsection
