<!DOCTYPE html>
<html>
<head>
    <title>Список товарів</title>
</head>
<body>
<h1>Список товарів</h1>

<form action="{{ route('products.index') }}" method="GET">
    <div>
        <label for="manufacturer">Фільтр за виробником:</label>
        <input type="text" name="manufacturer" id="manufacturer" value="{{ old('manufacturer') }}">
    </div>
    <button type="submit">Фільтрувати</button>
</form>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Назва</th>
        <th>Виробник</th>
        <th>Ціна</th>
        <th>Дата виробництва</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->manufacturer->brand }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->production_date }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<h2>Список виробників</h2>
<ul>
    @foreach($manufacturers as $manufacturer)
        <li>{{ $manufacturer->brand }}</li>
    @endforeach
</ul>

</body>
</html>
