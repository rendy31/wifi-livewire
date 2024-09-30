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
                <div class=" p-2 flex-fill ">

                    <a wire:navigate href="{{ route('mahasiswa.create') }}" class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-outline-primary">Tambah</button>
                    </a>
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
                        <div class="card-title p-3">
                            <a wire:navigate href="{{route('mahasiswa.import')}}" class="btn btn-sm btn-primary">Import AKun Mahasiswa</a>
                            
                        </div>
                        {{-- <hr> --}}
                        <div class="card-body p-3">
                            <!-- Table with stripped rows -->
                            <table class="table table-hover ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Tgl Lahir</th>
                                        <th>Lokasi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($akunMahasiswas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nim }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->tglLahir)->locale('id')->translatedFormat('d F Y') }}</td>
                                            {{-- <td>{{ $item->tglLahir }}</td> --}}
                                            <td>{{ $item->locate->nama }}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a wire:navigate href="{{ route('mahasiswa.edit', $item->id) }}"
                                                        class="btn btn-warning btn-sm ">
                                                        <i class="bx bx-edit"></i> Edit
                                                    </a>
                                                    <button wire:confirm="Are you sure you want to delete ?"
                                                        wire:click="delete({{ $item->id }})"
                                                        class="btn btn-danger btn-sm">
                                                        <i class="bx bx-trash"></i> Hapus
                                                    </button>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            {{-- {{ $akunMahasiswas->links() }} --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

</div>
