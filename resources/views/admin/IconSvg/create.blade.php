@extends('admin.index')
@section('judul')
    BK Create Icon
@endsection

@section('content')

    <div class="col-md-12 mt-2">
        <div class="content-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <h3 class="card-header card-tittle ml-2">Create Icon Menu</h3>
                            <div class="card-body">
                                <form class="form-group col-sm-12" id="form" action="{{ route('icon.store') }}"
                                    method="POST">
                                    @csrf
                                    <label for="icon">Nama Icon Cek </label>
                                    <input class="form-control" type="text" name="icon" id="icon">
                                    <button type="submit" class="btn btn-success mt-3">Simpan</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card">
                            <h3 class="card-header card-tittle ml-2">List Icon Menu</h3>
                            <div class="card-body">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Subheading</div>
                                        </div>
                                        <a class="ml-2 btn btn-sm btn-primary" href="">edit</a>
                                        <a class="ml-2 btn btn-sm btn-danger" href="">hapus</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{-- end-contentwrapp-id --}}
    </div>
@endsection
