<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous">
    </head>
    <body>
        <section>
            <form action="{{url('/contato/inserir')}}" method="post">
                {{csrf_field()}}
                <div>
                    <input type="text" name="txNome" placeholder="Nome"/>
                </div>

                <div>
                    <input type="text" name="txEmail" placeholder="E-mail"/>
                </div>

                <div>
                    <input type="text" name="txFone" placeholder="Telefone"/>
                </div>

                <div>
                    <input
                        type="text"
                        name="txAssunto"
                        placeholder="Assunto"
                        />
                </div>

                <div>
                    <textarea name="txMensagem" placeholder="Mensagem"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar"/>
                </div>
            </form>
        </section>

        <table class="table">
            <thead>
                <tr>

                    <th scope="col">IdContato</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Fone</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col">&nbsp;</th>
                


                </tr>
            </thead>
            <tbody>

                @foreach($contato as $c)
                <tr>
                    <td>{{$c->idContato}}</td>
                    <td>{{$c->nome}}</td>
                    <td>{{$c->email}}</td>
                    <td>{{$c->fone}}</td>
                    <td>{{$c->assunto}}</td>
                    <td>{{$c->mensagem}}</td>
                <td> <a href="/contato/{{$c->idContato}}"> Excluir </a> </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>