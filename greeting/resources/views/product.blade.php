<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product Detail</h1>

<form action="/display-discount" method="post">
    @csrf
    <textarea cols="15" rows="10" name="description"></textarea>
    List Price : <input type="text" name="price" placeholder="Product Price">
    Discount Percent : <input type="text" name="discount" placeholder="Discount Percent">
    <input type="submit" value="Count">
</form>
</body>
</html>
