<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/clientes" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nomeCliente">Nome do Cliente</label>
                                <input type="text" name="nomeCliente"
                                        id="nomeCliente" placeholder="Nome do cliente"
                                        class="form-control {{$errors->has('nomeCliente') ? 'is-invalid' : ''}}">

                                @if ($errors->has('nomeCliente'))
                                <div class="invalid-feedback">
                                    {{$errors->first('nomeCliente')}}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="idadeCliente">Idade do Cliente</label>
                                <input type="text" name="idadeCliente"
                                        id="idadeCliente" placeholder="Idade do cliente"
                                        class="form-control {{$errors->has('idadeCliente') ? 'is-invalid' : ''}}">

                                @if ($errors->has('idadeCliente'))
                                <div class="invalid-feedback">
                                    {{$errors->first('idadeCliente')}}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="enderecoCliente">Endereco do Cliente</label>
                                <input type="text" name="enderecoCliente"
                                        id="enderecoCliente" placeholder="Endereço do cliente"
                                        class="form-control {{$errors->has('enderecoCliente') ? 'is-invalid' : ''}}">
                                @if ($errors->has('enderecoCliente'))
                                <div class="invalid-feedback">
                                    {{$errors->first('enderecoCliente')}}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="emailCliente">Email do Cliente</label>
                                <input type="text" name="emailCliente"
                                        id="emailCliente" placeholder="Email do cliente"
                                        class="form-control {{$errors->has('emailCliente') ? 'is-invalid' : ''}}">
                                @if ($errors->has('emailCliente'))
                                <div class="invalid-feedback">
                                    {{$errors->first('emailCliente')}}
                                </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
