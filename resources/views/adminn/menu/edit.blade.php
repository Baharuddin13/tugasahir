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
                        <h2>Edit Menu</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_menu') }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $data->id }}" id="">
                                <input type="hidden" name="gambarLama" value="{{ $data->gambar }}" id="">
                                <label for="exampleFormControlInput2">Nama menu</label>
                                <input type="text" name="namamenu" class="form-control" value="{{ $data->namamenu }}"  id="exampleFormControlInput2"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput2">Deskripsi</label>
                                <input type="text" name="deskripsi" value="{{ $data->deskripsi }}"  class="form-control"
                                    id="exampleFormControlInput2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput2">harga</label>
                                <input type="number" name="harga" value="{{ $data->harga }}"  class="form-control"
                                    id="exampleFormControlInput2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Gambar menu</label>
                                <input type="file" name="gambar" class="form-control-file"
                                    id="exampleFormControlFile1">
                                    <div class="col-md-3">
                                        <img class="img-thumbnail"
                                            src="{{ asset('images/menu/' . $data->gambar) }}" alt="">
                                    </div>
                            </div>
                           
                            
                            
                            <div class="form-footer mt-6">
                                <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                                <a href=""><button type="submit"
                                        class="btn btn-light btn-pill">Cancel</button></a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
