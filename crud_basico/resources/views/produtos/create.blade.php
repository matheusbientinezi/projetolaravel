<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto Usando Laravel</title>
</head>
<body>
    <form action="{{ route('registra_produtos')}}" method="post">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="nome"> <br />
        <label for="">Custo</label> <br />
        <input type="text" name="custo"> <br />
        <label for="">Preco</label> <br />
        <input type="text" name="preco"> <br />
        <label for="">Quantidade</label> <br />
        <input type="text" name="quantidade"> <br />
        <button>Salvar</button>
    </form>
</body>
</html>