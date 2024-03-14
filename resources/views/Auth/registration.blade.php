@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2"></div>
                <h2>Registration</h2>
                <form method="post" action="{{ route('registration.post') }}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-4">First Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" placeholder="Enter your First Name" />
                        </div>
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4">Middle Name</label>
                        <div class="col-md-8">
                            <input type="text" name="middle_name" class="form-control" placeholder="Enter your Middle Name" />
                        </div>
                        @if($errors->has('middle_name'))
                            <span class="text-danger">{{ $errors->first('middle_name') }}</span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4">Last Name</label>
                        <div class="col-md-8">
                            <input type="text" name="last_name" class="form-control" placeholder="Enter your Last Name" />
                        </div>
                        @if($errors->has('last_name'))
                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4">Birth Date</label>
                        <div class="col-md-8">
                            <input type="text" name="birth_date" class="form-control" placeholder="Enter Your Birth Date (yyyy-mm-dd)" />
                        </div>
                        @if($errors->has('birth_date'))
                            <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4">Full Address</label>
                        <div class="col-md-8">
                            <input type="text" name="full_address" class="form-control" placeholder="Enter Your Full Address" />
                        </div>
                        @if($errors->has('full_address'))
                            <span class="text-danger">{{ $errors->first('full_address') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4">User Type ID</label>
                        <div class="col-md-8">
                            <input type="number" name="user_type_id" class="form-control" placeholder="Enter User Type" />
                        </div>
                        @if($errors->has('user_type_id'))
                            <span class="text-danger">{{ $errors->first('user_type_id') }}</span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4">Branch Assigned</label>
                        <div class="col-md-8">
                            <input type="number" name="branch_assigned" class="form-control" placeholder="Enter Branch Assigned" />
                        </div>
                        @if($errors->has('branch_assigned'))
                            <span class="text-danger">{{ $errors->first('branch_assigned') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="text" name="email" class="form-control" placeholder="Enter your Email" />
                        </div>
                        @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4">Password</label>
                        <div class="col-md-8">
                            <input type="password" name="password" class="form-control" placeholder="Enter your Password" />
                        </div>
                        @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-8">
                            <input type="submit" name="submit" class="btn btn-success" value="Submit" />
                        </div>
                    </div>

                </form>
        </div>
    </div>

@endsection