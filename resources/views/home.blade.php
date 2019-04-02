@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                     <table class="table" id="myTable">
                       <thead>
                         <tr>
                           <th>ID:</th>
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
    </div>
</div>
@endsection
