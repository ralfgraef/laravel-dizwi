@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                     <table class="table">
                       <thead>
                         <tr>
                           <th>Spalte1</th>
                           <th>Spalte2</th>
                           <th>Spalte3</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td scope="row"></td>
                           <td></td>
                           <td></td>
                         </tr>
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
