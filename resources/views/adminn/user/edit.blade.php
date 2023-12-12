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
                        <h2>Edit User</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_user') }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <input type="hidden" value="{{$data->id}}" name="id">
                            <div class="form-group">
                                <label for="exampleFormControlInput2">Nama </label>
                                <input type="text" name="name" class="form-control" id="nama" placeholder=""
                                    value="{{ $data->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="username">Username </label>
                                <input type="text" name="username" class="form-control" id="username"
                                    value="{{ $data->username }}" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password </label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="" value="{{ $data->password }}">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <div>
                                    <select name="role" id="role" >
                                        <option value="kasir">kasir</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>



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

</div>
