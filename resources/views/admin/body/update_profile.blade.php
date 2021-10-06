@extends('admin.admin_master')

@section('admin')
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update User Profile</h2>
        </div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session('error')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{route('update.user.profile')}}" class="form-pill">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput3">User Name</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlPassword3">User E-Mail</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>

                <button type="submit" class="btn btn-primary btn-default">Update</button>
            </form>
        </div>
    </div>
@endsection
