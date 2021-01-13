<?php
/**
 * Created by JS'Cordeiro Programas.
 * User: Sergio
 * Date: 09/01/2021
 * Time: 13:59
 */ ?>

@extends('layouts.appAdmin')

@section('title',' - Contpermission de Permissiões')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header titulo-table">
                        <h2 class="col-md-6">Contpermission de Permissões</h2>
                        <a class="btn btn-primary" href="{{ route('permissions.create') }}">
                            <i class="fa fa-plus"> Nova Regra</i>
                        </a>
                    </div>

                    <div class="card-body">
                        @include('layouts._mensagems')

                        <div class="py-12">
                            <div class="container">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="text-left">Nº</th>
                                            <th class="text-left">Nome</th>
                                            <th class="text-left">Permissões</th>
                                            <th width="150px" class="text-center"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1 ?>
                                        @foreach($permissions as $permission)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $permission->name }}</td>
                                                <td>

                                                </td>
                                                <td class="action">
                                                    <a class="btn btn-success btn-sm"
                                                       href="{{ route('permissions.show', $permission->id) }}" title="visualizar"><i
                                                                class="fa fa-eye"></i></a>
                                                    @can('permission-edit')
                                                        <a class="btn btn-info btn-sm"
                                                           href="{{ route('permissions.edit', $permission->id) }}" title="Editar"><i
                                                                    class="fa fa-edit"></i></a>
                                                    @endcan
                                                    @can('permission-delete')
                                                        <form id="form-delete{{$permission->id}}"
                                                              action="{{ route('permissions.destroy', $permission->id) }}"
                                                              method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                    onclick="event.preventDefault();
                                                                            if(confirm('Deseja excluir {{ $permission->name }} \n {{$permission->nome}}?')){
                                                                            document.getElementById('form-delete{{$permission->id}}').submit();
                                                                            }"
                                                                    class="btn btn-sm btn-danger"
                                                                    title="Remover {{ $permission->name }}"><i
                                                                        class="fa fa-trash"></i></button>
                                                        </form>
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                    {{ $permissions->onEachSide(3)->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection