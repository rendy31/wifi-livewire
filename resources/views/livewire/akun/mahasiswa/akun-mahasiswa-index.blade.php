<div>
    <main id="main" class="main">

        <div class="pagetitle">
            <div class="d-flex">
                <div class="p-2 flex-fill">
                    <h1>Akun Wifi Mahasiswa</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item">Wifi</li>
                            <li class="breadcrumb-item active">Mahasiswa</li>
                        </ol>
                    </nav>
                </div>
                <div class="p-2 flex-fill">

                    <a wire:navigate href="{{ route('akun.mahasiswa.create') }}" class="d-flex justify-content-end" ><button type="button" class="btn btn-sm btn-outline-primary">Tambah</button></a>
                </div>
            </div>
        </div><!-- End Page Title -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table table-hover ">
                                <thead>
                                    <tr>
                                        <th> NIM</th>
                                        <th>Nama</th>
                                        <th>Lokasi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($akunMahasiswas as $item)
                                        <tr>
                                            <td>{{ $item->nim }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->lokasi }}</td>
                                            <td>
                                                <a href=""><button class="btn btn-sm btn-warning">
                                                    Edit
                                                </button></a>
                                                <a href=""><button class="btn btn-sm btn-danger">
                                                    Delete
                                                </button></a>
                                                
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            {{ $akunMahasiswas->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

</div>
