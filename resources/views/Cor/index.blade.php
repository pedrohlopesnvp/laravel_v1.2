@extends('template_admin.index')

@section('contents')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-primary">Categorias de cores</h1>
    <!-- Coonsulta -->

    <div class="card">
        <div class="card-header">Lista de cores cadastradas</div>
        <div class="card-body">

            <div class="mb-2">
                <a href="/cor/novo" class="btn btn-success">Novo</a>
            </div>

            <table class="table table-bordered dataTable">
                <thead>
                    <td>ID</td>
                    <td>Cor</td>
                    <td>Opções</td>
                </thead>
                <tbody>
                    @foreach ($cores as $linha)
                        <tr>
                            <td>{{ $linha['id'] }}</td>
                            <td>{{ $linha['cor'] }}</td>
                            <td>
                                <a href="/cor/alterar/{{ $linha['id'] }}" class="btn btn-success">
                                    <li class="fa fa-edit"></li>
                                </a>
                                <a href="/cor/excluir/{{ $linha['id'] }}" class="btn btn-danger">
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
