<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body> 
        <table border="1">
            <tr>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Preço</th>
            </tr>
                @foreach($products as $product)
                     <tr>
                        <td>{{$product['description']}}</td>
                        <td>{{$product['category']}}</td>
                        <td>${{$product['price']}}</td>
                    </tr>
                @endforeach
        </table>
</body>
</html>