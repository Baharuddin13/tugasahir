<div class="content-wrapper">
    <div class="content">
        <!-- Products Inventory -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Data Transaksi</h2>
                <a href="/tambahdatatransaksi"><button type="submit" class="btn btn-light btn-pill">Tambah
                        Data</button></a>

            </div>
            <div class="card-body">
                <table id="productsTable" class="table table-product" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            {{-- <th>Nama menu</th>
                            <th>Gambar</th> --}}
                            {{-- <th>Harga</th> --}}
                            {{-- <th>Jumlah</th> --}}
                            <th>Total Uang</th>
                            <th>Total Kembali</th>
                            <th>Total Harga</th>
                            <th>Tanggal Transaksi</th>
                            <th>Action</th>
                            <th>Struk</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($transaksi as $w)
                            <tr>
                                <td>{{ $no++ }}</td>
                                {{-- <td>{{ $w->menu->namamenu }}</td>
                                <td>
                                    <img src="{{ asset('images/menu/' . $w->menu->gambar) }}" alt="">
                                </td> --}}
                                {{-- <td>{{ $w->menu->harga }}</td> --}}
                                {{-- <td>{{ $w->jumlah }}</td> --}}
                                <td>{{ $w->uangbayar }}</td>
                                <td>{{ $w->kembali }}</td>
                                <td>{{ $w->totalharga }}</td>
                                <td>{{ $w->created_at }}</td>

                                <th>
                                    <a href="{{ Route('edit_transaksi', $w->id) }}">
                                        <i class="mdi mdi-open-in-new"></i>
                                    </a>
                                    <form action="{{ route('delete_transaksi', $w->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class=""><i class="mdi mdi-close text-danger"></i>
                                        </button>
                                    </form>

                                </th>
                                <th>
                                    <a href="{{ route('cetak', $w->id) }}" target="_blank"
                                        class="btn btn-danger">Cetak</a>
                                </th>
                            </tr>
                    </tbody>
                    @endforeach


                </table>

            </div>
        </div>
    </div>

</div>
