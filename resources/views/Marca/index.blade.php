@extends('template_admin.index')

@section('contents')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-primary">Marcas de produtos</h1>
    <!-- Coonsulta -->

    <div class="card">
        <div class="card-header">Lista de marcas cadastradas</div>
        <div class="card-body">

            <div class="mb-2">
                <a href="/marca/novo" class="btn btn-success">Novo</a>
            </div>

            <table class="table table-bordered dataTable">
                <thead>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Nome Fantasia</td>
                    <td>Opções</td>
                </thead>
                <tbody>
                    @foreach ($marcas as $linha)
                        <tr>
                            <td>{{ $linha['id'] }}</td>
                            <td>{{ $linha['nome'] }}</td>
                            <td>{{ $linha['nome_fantasia'] }}</td>
                            <td>
                                <a href="/marca/alterar/{{ $linha['id'] }}" class="btn btn-success">
                                    <li class="fa fa-edit"></li>
                                </a>
                                <a href="/marca/excluir/{{ $linha['id'] }}" class="btn btn-danger">
                                    <li class="fa fa-trash"></li>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

