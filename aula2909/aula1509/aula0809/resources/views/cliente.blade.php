<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <!--
@foreach($cliente as $cli)
    <h1> {{$cli->idCliente}} </h1>
    <p> {{$cli->nome}} </p>
    <p> {{$cli->dtNasc}} </p>
    <p> {{$cli->estadoCivil}} </p>
    <p> {{$cli->endereco}} </p>
    <p> {{$cli->numero}} </p>
    <p> {{$cli->complemento}} </p>
    <p> {{$cli->cep}} </p>
    <p> {{$cli->cidade}} </p>
    <p> {{$cli->estado}} </p>
    <p> {{$cli->rg}} </p>
    <p> {{$cli->cpf}} </p>
    <p> {{$cli->email}} </p>
    <p> {{$cli->fone}} </p>
    <p> {{$cli->celular}} </p>
@endforeach
!-->

    <table class="table">
    <thead>
    <tr>
      <th scope="col">idCliente</th>
      <th scope="col">nome</th>
      <th scope="col">dtNasc</th>
      <th scope="col">estadoCivil</th>
      <th scope="col">endereco</th>
      <th scope="col">numero</th>
      <th scope="col">complemento</th>
      <th scope="col">cep</th>
      <th scope="col">cidade</th>
      <th scope="col">estado</th>
      <th scope="col">rg</th>
      <th scope="col">cpf</th>
      <th scope="col">email</th>
      <th scope="col">fone</th>
      <th scope="col">celular</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cliente as $cli)
    <tr>
    <td>{{$cli->idCliente}}</td>  
    <td>{{$cli->nome}}</td>
    <td>{{$cli->dtNasc}}</td>
    <td>{{$cli->estadoCivil}}</td>
    <td>{{$cli->endereco}}</td>
    <td>{{$cli->numero}}</td>
    <td>{{$cli->complemento}}</td>
    <td>{{$cli->cep}}</td>
    <td>{{$cli->cidade}}</td>
    <td>{{$cli->estado}}</td>
    <td>{{$cli->rg}}</td>
    <td>{{$cli->cpf}}</td>
    <td>{{$cli->email}}</td>
    <td>{{$cli->fone}}</td>
    <td>{{$cli->celular}}</td>
    @endforeach
</tr>    
</body>
</html>