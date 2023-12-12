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
                        <h2>Tambah transaksi</h2>
                        <div class="d-flex">
                            <button id="tambahTransaksi" class="btn btn-primary btn-sm mx-4">Tambah Transaksi</button>
                            <button id="hapusTransaksi" class="btn btn-danger btn-sm disabled">Hapus Transaksi</button>
                        </div>
                    </div>
                    <form action="{{ route('ProsesTransaksi') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="d-flex justify-content-around">
                            <div class="form-group">
                                <label for="uangbayar">Uang bayar</label>
                                <input type="number" name="uangbayar" oninput="inputUang(this)"
                                    class="form-control uangbayar" id="uangbayar" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="totalharga">Total harga</label>
                                <input type="number" name="totalharga" class="form-control totalharga" id="totalharga"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="uangkembali">Uang Kembali</label>
                                <input type="number" readonly name="uangkembali" class="form-control uangkembali"
                                    id="uangkembali" placeholder="">
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="my-card" id="card1">
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Nama menu</label>
                                    <div>
                                        <select name="namamenu[]" id="namamenu1" onchange="ubahMenu(this)"
                                            class="form-control namamenu">
                                            <option selected value="">Silahkan pilih menu</option>
                                            @foreach ($menu as $m)
                                                <option value="{{ $m->id }}">{{ $m->namamenu }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div>
                                    <label for="harga">Harga</label>
                                    <input type="number" readonly name="harga[]" class="form-control harga"
                                        id="harga1" placeholder="" value="">

                                </div>


                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="number" name="jumlah[]" oninput="inputJumlah(this)"
                                        class="form-control jumlah" id="jumlah1">
                                </div>


                            </div>



                        </div>
                        <div id="transaksis"></div>

                        <div class="form-footer mt-6">
                            <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                            <a href=""><button type="submit" class="btn btn-light btn-pill">Cancel</button></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        var i = 2,
            init = 1;

        var total = {};

        // $(`#namamenu${init}`).change(function() {
        //     var idGambar = $(this).val();
        //     console.log(`id gambar : ${idGambar}`);
        //     console.log(`init gambar : ${init}`);
        // });

        function ubahMenu(valuedId) {
            var id = valuedId.id;
            var namamenu = document.querySelector(`#namamenu${id.slice(-1)}`);
            var harga = document.querySelector(`#harga${id.slice(-1)}`);
            var jumlah = document.querySelector(`#jumlah${id.slice(-1)}`);
            // var totalharga = document.querySelector(`#totalharga${id.slice(-1)}`);
            var uangbayar = document.querySelector(`#uangbayar${id.slice(-1)}`);
            // var uangkembali = document.querySelector(`#uangkembali${id.slice(-1)}`);

            $.ajax({
                type: "GET",
                url: `/get-image/${namamenu.value}`,
                success: function(response) {
                    console.log(response);
                    harga.value = response.harga;

                },
                error: function(xhr, status, error) {
                    console.log(`error : ${error}`);
                }
            });

        }

        function inputJumlah(valueId) {
            var id = valueId.id;
            var jumlah = parseInt(valueId.value);

            var harga = document.querySelector(`#harga${id.slice(-1)}`);
            var totalharga = document.querySelector(`#totalharga`);
            var uangbayar = document.querySelector(`#uangbayar`);

            totalharga.value = jumlah * harga.value;

            total[id] = totalharga.value;

            var totalSemua = Object.values(total).reduce((acc, curr) => acc + parseFloat(curr), 0);
            totalharga.value = totalSemua;
            console.log(totalSemua);
            return;
        }

        function inputUang(valuedId) {
            var id = valuedId.id;

            var totalharga = document.getElementById(`totalharga`);
            var uangkembali = document.getElementById(`uangkembali`);

            uangkembali.value = valuedId.value - totalharga.value;
            return;
        }

        $(document).ready(function() {

            $('#tambahTransaksi').click(function() {
                var cards = $(`.card-body`).clone();

                var cardTransaksi = cards.find('.my-card').attr('id', `card${i}`);

                var namamenu = cards.find('.namamenu').attr('id', `namamenu${i}`);
                var harga = cards.find('.harga').attr('id', `harga${i}`);
                var jumlah = cards.find('.jumlah').attr('id', `jumlah${i}`);
                // var totalharga = cards.find('.totalharga').attr('id', `totalharga${i}`);
                // var uangbayar = cards.find('.uangbayar').attr('id', `uangbayar${i}`);
                // var uangkembali = cards.find('.uangkembali').attr('id', `uangkembali${i}`);

                namamenu.val('');
                harga.val('');
                jumlah.val('');
                // totalharga.val('');
                // uangbayar.val('');
                // uangkembali.val('');

                // var harga = $(`.harga${i}`);
                // var jumlah = $(`.jumlah${i}`);
                // var totalharga = $(`.totalharga${i}`);
                // var uangbayar = $(`.uangbayar${i}`);
                // var uangkembali = $(`.uangkembali${i}`);



                var transaksis = $('#transaksis').append(cards);
                i++;
                init++;
                if (init > 1) {
                    $('#hapusBahan').prop('disabled', false);
                }
                // console.log(namamenu.html());
                console.log(init);
                console.log(transaksis.html());
                return
            })

            $('#hapusTransaksi').click(function() {
                if (init == 1) {
                    $(this).prop('disabled', true);
                    return;
                }
                $(`#card${init}`).closest('div').remove();
                i--;
                init--;
                console.log(init);
                return
            });


        })
    </script>
@endpush
<script>
    // var nama = document.getElementById('namamenu');
    // var image = document.getElementById('gambarmenu');
    // var harga = document.getElementById('harga');
    // var jumlah = document.getElementById('jumlah');
    // var total = document.getElementById('totalharga');
    // var bayar = document.getElementById('uangbayar');
    // var kembali = document.getElementById('uangkembali');

    // nama.addEventListener('change', function() {
    //     var idValue = nama.value;
    //     fetch('/get-image/' + idValue)
    //         .then(response => response.json())
    //         .then(data => {
    //             image.src = '{{ asset('images/menu') }}/' + data.gambar;
    //         })
    //         .catch(error => console.log('Error:', error));
    //     fetch('/get-harga/' + idValue)
    //         .then(response => response.json())
    //         .then(data => {
    //             harga.value = data.harga;
    //         })
    //         .catch(error => console.log('Error:', error));
    // });


    // jumlah.addEventListener('input', function() {
    //     total.value = harga.value * jumlah.value;
    //     console.log(total);
    // });

    // bayar.addEventListener('input', function() {
    //     kembali.value = bayar.value - total.value;
    //     console.log(kembali);
    // });
</script>
