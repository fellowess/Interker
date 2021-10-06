@extends('admin.admin_master')

@section('admin')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Create Service</h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.service')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Logo Name</label>
                        <input type="text" name="logo_hu" class="form-control" id="exampleFormControlInput1" placeholder="Font Awesome Logo Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Hungarian Title</label>
                        <input type="text" name="title_hu" class="form-control" id="exampleFormControlInput1" placeholder="Hungarian Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">English Title</label>
                        <input type="text" name="title_en" class="form-control" id="exampleFormControlInput1" placeholder="English Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">French Title</label>
                        <input type="text" name="title_fr" class="form-control" id="exampleFormControlInput1" placeholder="French Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Italian Title</label>
                        <input type="text" name="title_it" class="form-control" id="exampleFormControlInput1" placeholder="Italian Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Hungarian Short Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="short_desc_hu"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">English Short Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="short_desc_en"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">French Short Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="short_desc_fr"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Italian Short Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="short_desc_it"></textarea>
                    </div>

                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
