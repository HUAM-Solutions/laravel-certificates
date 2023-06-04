@extends('layouts.app-master')
@section('content')
    <div class="content ">
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
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td>{{auth()->user()->name}}</td>
                                                        <td>{{auth()->user()->lastname}}</td>
                                                        <td>{{auth()->user()->dni}}</td>
                                                        <td>{{auth()->user()->birthdate}}</td>
                                                        <td>{{auth()->user()->email}}</td>
                                                        <td class="td-actions">
                                                            <button class="btn btn-info" type="button">
                                                                {{-- <a href="#" class="nav-link text-dark" >
                                                                    <i class="fa-sharp fa-regular fa-pen-to-square"></i>
                                                                </a> --}}
                                                                <i class="fa-sharp fa-regular fa-pen-to-square"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                
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