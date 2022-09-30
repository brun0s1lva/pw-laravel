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
        @foreach($produto as $p)
        <h1>
            {{$p->idProduto}}
        </h1>
        <p>
            {{$p->produto}}
        </p>
        <p>
            {{$p->valor}}
        </p>
        <p>
            {{$p->idCategoria}}
        </p>
        @endforeach
        -->

  
        <section>    
        <form action="{{url('/produto/inserir')}}" method="post">
            {{csrf_field()}}
            <div>
                <input type="hidden" name="txidProduto" placeholder="ID" />
            </div>

            <div>
                <input type="text" name="txidCategoria" placeholder="Idcategoria"  />
            </div>

            <div>
                <input type="text" name="txProduto" placeholder="Produto"  />
            </div>

            <div>
                <input type="text" name="txValor" placeholder="Valor"  />
            </div>
            
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </form>    
    </section>



        <table class="table">
  <thead>
    <tr>
      <th scope="col">idProduto</th>
      <th scope="col">idCategoria</th>
      <th scope="col">produto</th>
      <th scope="col">valor</th>
      <th scope="col">&nbsp;</th>
      
    </tr>
  </thead>
  <tbody>

  @foreach($produto as $p)
    <tr>
        <td>{{$p->idProduto}}</td>
        <td>{{$p->produto}}</td>
        <td>{{$p->valor}}</td>
        <td>{{$p->idCategoria}}</td>
        <td> <a href="/produto/{{$p->idProduto}}"> Excluir </a> </td>
    </tr>

    @endforeach
  </tbody>
</table>
    </body>
</html>