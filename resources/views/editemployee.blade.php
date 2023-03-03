@extends('layout')

@section('titlename')
Edit Employee
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mt-4 p-3 mx-auto">
            <h2 align="center"><i class="bi bi-person-fill"></i>&nbsp;Edit Employee Form</h2>
            <hr style="background-color: black; height: 5px; width: 50%; margin: auto;">
            <div class="card mt-4">
                <div class="card-header"></div>
                <div class="card-body">

                    <!-- primary flash data message -->
                    @if(Session("success"))
                    <div class="alert alert-info mt-4">
                        <span class="text-dark"><strong>Hey!</strong>{{ Session('success') }} </span>
                    </div>    
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger mt-4">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach    
                        </ul>
                    </div>
                    @endif
                    
                    <form method="post">
                        @csrf
                        <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">First Name :</label>
                          <div class="col-sm-9">
                            <input type="text" name="firstname" value="{{$ed->firstname}}" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Last Name :</label>
                            <div class="col-sm-9">
                              <input type="text" name="lastname" value="{{$ed->lastname}}" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Email :</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" value="{{$ed->email}}" class="form-control">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Password :</label>
                        <div class="col-sm-9">
                            <input type="text" name="password" value="{{$ed->password}}" class="form-control">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Mobile :</label>
                        <div class="col-sm-9">
                            <input type="text" name="mobile" value="{{$ed->mobile}}" class="form-control">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Address :</label>
                        <div class="col-sm-9">
                            <textarea name="address" class="form-control">{{$ed->address}}</textarea>
                        </div>
                        </div>
        
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Update Employee</label>
                        <div class="col-sm-9">
                        <button type="submit" name="editemployee" class="btn btn-primary">Update Employee</button>
                        </div>
                    </div>
        
                    </form><!-- End General Form Elements -->
        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection