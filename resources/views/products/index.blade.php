<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Product index page  </h1>
    <div>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
            <tr>
           
              <td>{{$product->name}}</td>
              <td>{{$product->qty}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->description}}</td>
              <td>
                <a href=" {{route('product.edit', ['product'=>$product] )}} ">Edit</a>
              </td>
              <td>
                <form  method="POST" action="{{ route('product.delete', ['product' => $product->id]) }}">
                    @csrf 
                    @method('Delete')
                    <input type="submit" value="Delete" />
                </form>
              </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>