<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create A Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('product.store')}}">
        @csrf 
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter name" />
        </div>
        <div>
            <label for="qty">Quantity</label>
            <input type="number" name="qty" placeholder="Enter Quantity" />
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Enter Price" />
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Enter Description" />
        </div>
        <div>
            <input type="submit" value="Save Product" />
        </div>
    </form>
</body>
</html>