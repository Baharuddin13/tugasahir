<div class="content-wrapper">
    <div class="content">
        <!-- Products Inventory -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Data Menu</h2>
                <a href="/tambahdata"><button type="submit" class="btn btn-light btn-pill">Tambah
                        Data</button></a>

            </div>
            <div class="card-body">
                <table id="productsTable" class="table table-product" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama menu</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menu as $w)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $w->namamenu }}</td>
                                <td>{{ $w->deskripsi }}</td>
                                <td>{{ $w->harga }}</td>
                                <td>
                                    <img src="{{ asset('images/menu/' . $w->gambar) }}" alt="">
                                </td>


                                <th>
                                    <a href="{{ Route('edit_menu', $w->id) }}">
                                        <i class="mdi mdi-open-in-new"></i>
                                    </a>
                                    <form action="{{ route('delete_menu', $w->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class=""><i class="mdi mdi-close text-danger"></i>
                                        </button>
                                    </form>

                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
