<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <h1>Cafe R</h1>
        <p>Jl.Perintis <br> 1122334455</p>
        <p>------------------------------------------------------------------------------------------------------</p>
        <p>------------------------------------------------------------------------------------------------------</p>
    </div>

    <div class="container">
        <table>
            <tr>

                <th>Description</th>
                <th>Price</th>
            </tr>

            @foreach ($data['dump'] as $item)
                {{-- {{ dd($item) }} --}}
                <tr>
                    <td>{{ $item->menu->namamenu }}</td>
                    <td>{{ $item->menu->harga }}</td>
                </tr>
                <tr>
                    <td>{{ $item->jumlah }} x {{ $item->menu->harga }}</td>

                </tr>
            @endforeach
            <p>------------------------------------------------------------------------------------------------------
            </p>
            <tr>
                <th>Total</th>
                <th>{{ $data['transaksi']->totalharga }}</th>
            </tr>
            <tr>
                <td>Cash</td>
                <td>{{ $data['transaksi']->uangbayar }}</td>
            </tr>
            <tr>
                <td>Kembali</td>
                <td>{{ $data['transaksi']->totalharga - $data['transaksi']->uangbayar }}</td>
            </tr>
            <p>------------------------------------------------------------------------------------------------------
            </p>
            <h1 class="text-center">Thank You!</h1>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
