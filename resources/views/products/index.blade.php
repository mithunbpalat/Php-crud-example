<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Index </h1>
    <div>
        <table border="1">
            <tr>
                <th>Id </th>
                <th>Name </th>
                <th>Quantity </th>
                <th>Price</th>
                <th>Description</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach($products as $product)
            <tr >
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><a href="/product/edit/{{$product->id}}">Edit</a></td>
                <td><a href="/product/{{$product->id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>