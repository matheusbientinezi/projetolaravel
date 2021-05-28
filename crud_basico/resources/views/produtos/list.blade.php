<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Um Produto Com Laravel</title>
</head>
<body>
    @csrf
    @foreach ($produtos as $lista)
    <label for="">Id</label> <br />
    <input type="text" name="id" value="{{ $lista->id}}" disabled> <br />
    <label for="">Nome</label> <br />
    <input type="text" name="nome" value="{{ $lista->nome}}" disabled> <br />
    <label for="">Custo</label> <br />
    <input type="text" name="custo" value="{{ $lista->custo}}" disabled> <br />
    <label for="">Preco</label> <br />
    <input type="text" name="preco" value="{{ $lista->preco}}" disabled> <br />
    <label for="">Quantidade</label> <br />
    <input type="text" name="quantidade" value="{{ $lista->quantidade}}" disabled> <br />
    <hr>
    @endforeach
</body>
</html>