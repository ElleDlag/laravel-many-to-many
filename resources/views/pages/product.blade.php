<table>
        <thead>
            <tr>
                <th>ARTICOLO</th>
                <th>CATEGORIA</th>
                <th>QUANTITÀ</th>
                <th>PREZZO</th>
                <th>MAGAZZINO</th>
                <th>IN ORDINE</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['category'] }}</td>
                    <td>{{ $product['quantity'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['inStock'] }}</td>
                    <td>{{ $product['inOrder'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


