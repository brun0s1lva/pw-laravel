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
    @foreach($pedido as $ped)
    <h1> {{$ped->idPedido}} </h1>
    <p>{{$ped->numeroPedido}}</p>
    @endforeach
    -->

    <table class="table">
  <thead>
    <tr>
      <th scope="col">idPedido</th>
      <th scope="col">numeroPedido</th>

    </tr>
  </thead>
  <tbody>

  @foreach($pedido as $ped)
    <tr>
    <td>{{$ped->idPedido}}</td>
    <td>{{$ped->numeroPedido}}</td>
    </tr>
    @endforeach  
  </tbody>
</table>
</body>
</html>