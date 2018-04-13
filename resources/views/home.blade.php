@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as  {{ Auth::user()->name }}

                <table class="table table-hover">
                    <tbody>
                      <tr>
                        <td>Full Name</td>
                        <td>Email</td>
                      </tr>
                      <tr>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ Auth::user()->email }}</td>
                      </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
