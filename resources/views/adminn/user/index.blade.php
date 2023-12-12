<div class="content-wrapper">
    <div class="content">

        <!-- Products Inventory -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Data User</h2>
                <a href="/TambahDataUser"><button type="submit" class="btn btn-light btn-pill">Tambah
                        Data</button></a>
            </div>
            <div class="card-body">
                <table id="productsTable" class="table table-product" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $no => $w)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $w->nama }}</td>
                                <td>{{ $w->username }}</td>
                                {{-- <td>{{ $w->password }}</td> --}}
                                <td>{{ $w->role }}</td>


                                <th>
                                    <a href="{{ Route('edit_user', $w->id) }}">
                                        <i class="mdi mdi-open-in-new"></i>
                                    </a>
                                    <form action="{{ route('delete_user', $w->id) }}" method="post">
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
