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
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection
