<div class="content-wrapper">
    <div class="content">

        <div class="row">
            <div class="col-xl-12">
                <!-- Basic Examples -->
                <div class="card card-default">
                    @if ($errors->any())
                        @foreach ($errors->all() as $e)
                            <div class="alert alert-danger">
                                {{ $e }}
                            </div>
                        @endforeach
                    @endif
                    <div class="card-header">
                        <h2>Edit Transaksi</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_transaksi') }}" method="post" enctype="multipart/form-transaksi">
                            @csrf
                            @method('PUT')
                            <input type="hidden" value="{{ $transaksi->id }}" name="id">

                            <div class="form-group">
                                <label for="exampleFormControlInput2">Nama menu</label>
                                <div>
                                    <select name="namamenu" id="namamenu" value="{{ $transaksi->menu->namamenu }}">
                                        <option selected>Silahkan pilih menu
                                        </option>
                                        @foreach ($menu as $m)
                                            <option {{ $transaksi->menuid == $m->id ? 'selected' : '' }}
                                                value="{{ $m->id }}"> {{ $m->namamenu }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlFile1" name="gambar">Gambar menu</label>
                                <div>
                                    <img src="" alt="" style="width: 100px" id="gambarmenu"
                                        name="gambar">


                                </div>
                            </div>
                            <div>
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" class="form-control" id="harga" placeholder=""
                                    value="{{ $transaksi->menu->harga }}">

                            </div>


                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control-file" id="jumlah"
                                    value="{{ $transaksi->jumlah }}">
                            </div>
                            <div class="form-group">
                                <label for="totalharga">Total harga</label>
                                <input type="number" name="totalharga" class="form-control" id="totalharga"
                                    placeholder="" value="">




                            </div>
                            <div class="form-group">
                                <label for="uangbayar">Uang bayar</label>
                                <input type="number" name="uangbayar" class="form-control" id="uangbayar"
                                    placeholder="" value="{{ $transaksi->uangbayar }}">
                            </div>
                            <div class="form-group">
                                <label for="uangkembali">Uang Kembali</label>
                                <input type="number" name="uangkembali" class="form-control" id="uangkembali"
                                    placeholder="" value="{{ $transaksi->uangkmbali }}">
                            </div>
                            <div class="form-footer mt-6">
                                <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                                <a href="{{ Route('transaksi') }}">
                                    <button type="submit" class="btn btn-light btn-pill">Cancel</button></a>
                            </div>
                        </form>

                        </form>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var kembali = document.getElementById('uangkembali');
                                var bayar = document.getElementById('uangbayar');
                                var total = document.getElementById('totalharga');
                                var jumlah = document.getElementById('jumlah');
                                var harga = document.getElementById('harga');
                                var namamenu = document.getElementById('namamenu');
                                var image = document.getElementById('gambarmenu');


                                total.value = harga.value * jumlah.value;
                                kembali.value = bayar.value - total.value;

                                jumlah.addEventListener('input', function() {
                                    total.value = harga.value * jumlah.value;
                                    console.log(total);
                                });

                                bayar.addEventListener('input', function() {
                                    kembali.value = bayar.value - total.value;
                                    console.log(kembali);
                                });

                                function updateImage() {
                                    var idValue = namamenu.value;
                                    console.log(idValue);

                                    fetch('/get-image/' + idValue)
                                        .then(response => response.json())
                                        .then(data => {
                                            image.src = '{{ asset('images/menu') }}/' + data.gambar;
                                            console.log(image);
                                        })
                                        .catch(error => console.log('Error:', error));
                                }

                                updateImage();

                                namamenu.addEventListener('change', function() {
                                    updateImage();
                                });

                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
