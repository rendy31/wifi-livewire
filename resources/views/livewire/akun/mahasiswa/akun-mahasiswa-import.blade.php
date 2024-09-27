<div>
    <main id="main" class="main">

        <div class="pagetitle">
            <div class="d-flex">
                <div class="p-2 flex-fill">
                    <h1>Import Akun Wifi Mahasiswa</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item">Wifi</li>
                            <li class="breadcrumb-item active">Import Akun Mahasiswa</li>
                        </ol>
                    </nav>
                </div>
                <div class=" p-2 flex-fill ">

                    {{-- <a wire:navigate href="{{ route('mahasiswa.create') }}" class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-outline-primary">Tambah</button>
                    </a> --}}
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
                        
                        <div class="card-body p-3">
                            <div class="container">
                                <form wire:submit.prevent="import">
                                @csrf
                                <div class="row">
                                {{-- <label for="formFileSm" class="form-label">Import AKun Mahasiswa</label> --}}
                                        <div class="col-5">
                                            <input class="form-control form-control-sm" wire:model="file" type="file">
                                            @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col ">
                                            <button type="submit" class="btn btn-primary btn-sm">Import</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="alert alert-success mt-3" role="alert">
                                <h4 class="alert-heading">Format Import</h4>
                                <p>
                                    <ol>
                                        <li>Data yang diimport untuk akun wifi mahasiswa</li>
                                        <li>format file wajib .xlsx</li>
                                        <li>Urutan kolom data sbb : NIM - Nama - Tanggal Lahir - Password - Lokasi_ID</li>
                                        <li>Tanggal Lahir ditulis dengan format YYYY-MM-DD, contoh : 2006-07-10, dan format kolom Tanggal Lahir pastikan TEXT</li>
                                        <li>Lokasi ID diisi dengan angka yang merupakan ID dari Lokasi Akun Wifi Mahasiswa tersebut, bisa dilihat di menu LOKASI</li>
                                        <li>Langsung buat datanya saja, tidak bisa pakai header</li>
                                    </ol>
                                </p>
                                <hr>
                                <p class="mb-0">
                                    <a href="" class="btn btn-primary btn-sm">Download Template</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

</div>
