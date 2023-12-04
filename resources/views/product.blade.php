<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>
    <h2>List Produk</h2>
    <hr>
   <thead>
    <tr>
        <th>id</th>
        <th>product</th>
        <th>price</th>
        <th>stock</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($produks as $product)
    <tr>
        <td>{{ $loop->iteration }}</td>
    </tr>
    @endforeach
   </tbody>
</body>
</html>