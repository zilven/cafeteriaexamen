@extends('layouts.default')
@section('content')
<h1>Lista de pedidos</h1>
<table class="table table-striped">
        <thead>
            <tr>
                <th>E-mail</th>
                <th>Orden</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>{{$users[$pedido->idUsuario]}}</td>
                    <td>
                        asdf
                    </td>
                    <td><button class="btn btn-primary" type="button" id="btnPreparar">Preparar</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection