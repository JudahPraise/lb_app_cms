@extends('welcome')

@section('main')
    <div class="container-fluid d-flex justify-content-center mt-5 mb-5">
        <div class="row w-75" style="height: 76.3vh;">
            <div class="col-md-6 d-none d-sm-block p-md-5">
                <h2><a href="{{ route('welcome') }}"><i class="far fa-arrow-alt-circle-left mr-3"></i></a>REGISTER</h2>
                <img src="{{ asset('images/build.png') }}" alt="" srcset="" style="width: 90%; height: 90%">
            </div>
            <div class="col-md-6 p-md-5 d-flex align-items-center">
                <form>
                    <div class="container p-0 d-lg-none d-md-block mb-3">
                        <h2>REGISTER</h2>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" style="font-size: 15pt;">
                        </div> 
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">Middle Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" style="font-size: 15pt;">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" style="font-size: 15pt;">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Date of Birth</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" style="font-size: 15pt;">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Gender</label>
                            <select class="form-control" id="exampleFormControlSelect1" style="font-size: 15pt;">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Contact Number</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" style="font-size: 15pt;">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" style="font-size: 15pt;">
                    </div>

                    <button type="submit" class="btn btn-dark float-right">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection