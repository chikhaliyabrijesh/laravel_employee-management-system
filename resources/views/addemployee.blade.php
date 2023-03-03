@extends('layout')

@section('titlename')
Add Employee
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mt-4 p-3 mx-auto">
            <h2 align="center"><i class="bi bi-person-fill"></i>&nbsp;Add Employee Form</h2>
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
                        <div class="form-group">
                            <label>First Name : </label>
                        <input type="text" name="firstname" class="form-control" placeholder="First Name"> 
                        </div>

                        <div class="form-group mt-3">
                            <label>Last Name : </label>
                        <input type="text" name="lastname" placeholder="Last Name" class="form-control">                            
                        </div>

                        <div class="form-group mt-3">
                            <label>Gender : </label>
                        Male&nbsp;<input type="radio" name="gender" value="Male">
                            Female&nbsp;<input type="radio" name="gender" value="Female">   
                        </div>

                        <div class="form-group mt-3">
                            <label>Email : : </label>
                        <input type="text" name="email" placeholder="Email" class="form-control">   
                        </div>

                        <div class="form-group mt-3">
                            <label>Password : </label>
                        <input type="text" name="password" placeholder="Password" class="form-control">   
                        </div>

                        <div class="form-group mt-3">
                            <label>Confirm Password : </label>
                            <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">   
                        </div>

                        <div class="form-group mt-3">
                            <label>Mobile : </label>
                        <input type="text" name="mobile" placeholder="Mobile" class="form-control">
                            
                        </div>

                        <div class="form-group mt-3">
                            <label>Address : </label>
                        <textarea name="address" placeholder="Address" class="form-control"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" name="addemployee" class="btn btn-lg btn-primary mt-3 w-100">Add Employee</button>
                            </div>

                            <div class="col-md-6">
                                <button type="reset" name="reset" class="btn btn-lg btn-danger mt-3 w-100">Reset</button>
                            </div>
                        </div>
                    </form>


                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection