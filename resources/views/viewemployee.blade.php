@extends('layout')

@section('titlename')
Manage Employee
@endsection

@section('content')

<main id="main" class="main">

    <section class="section">
    <div class="row">
        <div class="col-lg-12 mt-4">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Manage Employees</h5>

            <!-- flash message -->

            @if(Session('upd'))
            <div class="alert alert-primary">
                <strong class="text-dark">Hey!</strong>{{session('upd')}}
            </div>  
            @endif


            @if(Session('del'))
            <div class="alert alert-danger">
                <strong class="text-dark">Hey!</strong>{{session('del')}}
            </div>  
            @endif
            
            <!-- Default Table -->
            <div class="w-100" style="overflow:auto">
            <table class="table" id="tab">
                <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($data as $row)
                <tr align="center">
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->firstname}}</td>
                    <td>{{$row->lastname}}</td>
                    <td>{{$row->gender}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->password}}</td>
                    <td>{{$row->mobile}}</td>
                    <td>{{$row->address}}</td>
                    <td>
                        <a href='{{URL("/viewemployee/".$row->id)}}' onclick="return confirm('Are You Sure To Delete Employee ?')"><i class="bi bi-trash3-fill text-danger"></i></a> |

                        <a href='{{URL("/editemployee/".$row->id)}}' onclick="return confirm('Are You Sure To Edit Employee  ?')"><i class="bi bi-pencil-fill text-primary"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
            </div>
            <!-- End Default Table Example -->
            </div>
        </div>

        

            </div>
        </div>

        </div>
    </div>
    </section>

    </main><!-- End #main -->

    <script>
    $(document).ready(function () {
    $('#tab').DataTable();
    });
    </script>

    @endsection

