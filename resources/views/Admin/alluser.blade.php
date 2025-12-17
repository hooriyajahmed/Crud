@extends('Admin.sidebar')

@section('admin')
<div class="container">

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <h2 class="text-center mb-4">All Users</h2>

            <table class="table table-bordered text-center text-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alluser as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->role == 'admin')
                                  <button class="btn btn-success btn-sm">{{($user->role)}}</button>
                                @else
                                  <button class="btn btn-warning btn-sm">{{($user->role)}}</button>
                                @endif
                           </td>
                            <td>
                                @if($user->role == 'user')
                                <a href="{{ route('edituser',$user->id) }}" class="btn btn-sm     btn-primary">Edit</a>
                                <a href="{{ route('deleteuser',$user->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            @else
                                <a href="{{ route('edituser',$user->id) }}" class="btn btn-sm btn-primary disabled">Edit</a>
                                <a href="{{ route('deleteuser',$user->id) }}" class="btn btn-sm btn-danger disabled">Delete</a>
                           @endif
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>
@endsection
