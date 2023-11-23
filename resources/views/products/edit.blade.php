<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit A Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="/product/update/{{$product->id}}">
        @csrf 
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter name"  value="{{$product->name}}" />
        </div>
        <div>
            <label for="qty">Quantity</label>
            <input type="number" name="qty" placeholder="Enter Quantity" value="{{$product->qty}}" />
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Enter Price"  value="{{$product->price}}"/>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Enter Description" value="{{$product->description}}" />
        </div>
        <div>
            <input type="submit" value="Save Product" />
        </div>
    </form>
</body>
</html>