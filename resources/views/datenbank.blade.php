@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
           <h2>Datenbank</h2>

           <br>
           <table class="table" id="myTable">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Bewertung</th>
                <th>DLZA</th>
              </tr>
            </thead>
            
          </table>
        </div>
    </div>
</div>
@endsection