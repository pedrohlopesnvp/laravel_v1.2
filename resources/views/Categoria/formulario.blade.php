@extends('template_admin.index')

@section('contents')

    @php

        $titulo = "Inserir uma categoria";
        $endpoint = "/categoria/novo";
        $input_nome = "";
        $input_id = "";

        if (isset($categoria)) {
            $titulo = "Alteração da categoria";
            $endpoint = "/categoria/alterar";
            $input_nome = $categoria['nome'];
            $input_id = $categoria["id"];
        }

    @endphp

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-primary">{{{$titulo}}}</h1>
    <!-- Inserir -->

    <div class="card">
        <div class="card-header">Cadastro de categoria</div>
            <div class="card-body">
                <div class="mb-3">
                    <form action="{{$endpoint}}" method="post">
                        @CSRF

                        <input type="hidden" name="id" value="{{$input_id}}">

                        <div class="mb-2">
                            <label class="form-label">Nome da categoria</label>
                            <input type="text" class="form-control" name="nome" value="{{$input_nome}}" placeholder="Setores de compras...">
                        </div>
                        <div class="mb-2">
                            <select class="form-control" name="situacao">
                                <option value="1" selected>Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <input type="submit" class="btn btn-success" value="Salvar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
