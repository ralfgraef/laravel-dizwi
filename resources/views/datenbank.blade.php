@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
           <h2>Datenbank</h2>

           <br>
           <table class="table" id="myTable">
            <thead>
              <tr>
                <th>Id:</th>
                <th>Name:</th>
                <th>Email:</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                   <td>{{ $user->id }}</td>
                   <td>{{ $user->name }}</td>
                   <td>{{ $user->email }}</td>
               </tr>
              @endforeach
              
              <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection