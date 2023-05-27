@extends('layouts.app-master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Usuario</h4>
                                    <p class="card-category">Usuario Registrado</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Name</th>
                                                <th>Lastname</th>
                                                <th>DNI</th>
                                                <th>Birthdate</th>
                                                <th>Email</th>
                                                <th class="text-right"></th>
                                            </thead>
                                            <tbody>
                                                @foreach($profiles as $profile)
                                                    <tr>
                                                        <td>{{$profile->name}}</td>
                                                        <td>{{$profile->lastname}}</td>
                                                        <td>{{$profile->dni}}</td>
                                                        <td>{{$profile->birthdate}}</td>
                                                        <td>{{$profile->email}}</td>
                                                        <td></td>
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection