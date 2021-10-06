@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <h4>Services</h4>
                <a href="{{route('add.service')}}"><button class="btn btn-info">Add Service</button></a>
                <br><br>
                <div class="col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('success')}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card-header"> All Contact Data </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Title HU</th>
                                <th scope="col">Title EN</th>
                                <th scope="col">Title FR</th>
                                <th scope="col">Title IT</th>
                                <th scope="col">Short Description HU</th>
                                <th scope="col">Short Description EN</th>
                                <th scope="col">Short Description FR</th>
                                <th scope="col">Short Description IT</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @foreach($services as $service)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$service->logo_hu}}</td>
                                    <td>{{$service->title_hu}}</td>
                                    <td>{{$service->title_en}}</td>
                                    <td>{{$service->title_fr}}</td>
                                    <td>{{$service->title_it}}</td>
                                    <td>{{$service->short_desc_hu}}</td>
                                    <td>{{$service->short_desc_en}}</td>
                                    <td>{{$service->short_desc_fr}}</td>
                                    <td>{{$service->short_desc_it}}</td>
                                    <td>
                                        <a href="{{url('contact/edit/'.$service->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{url('contact/delete/'.$service->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
