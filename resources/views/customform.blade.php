@extends('layout.custom')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
          <img src="/img/img3.png" alt="this is my image" width="100px" height="110px">
            <div class="title m-b-md">
                Hi, I am Sumu.
                <form method="post" action="form-submit">
                  @csrf
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" >
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
