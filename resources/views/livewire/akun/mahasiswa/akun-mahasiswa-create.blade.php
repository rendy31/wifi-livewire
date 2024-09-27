<div>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Akun Wifi Mahasiswa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item">Wifi</li>
                    <li class="breadcrumb-item active">Mahasiswa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Batal</button>
                        </div>
                        <div class="card-body">
                            <form wire:submit="save"> 
                                <label class="form-label">NIM</label>
                                <input type="text" class="form-control" wire:model="nim">
                                <div>
                                    @error('nim') <span class="error">{{ $message }}</span> @enderror 
                                </div>
                                
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" wire:model="nama">
                                <div>
                                    @error('nama') <span class="error">{{ $message }}</span> @enderror 
                                </div>
                                
                                <label class="form-label">Tgl Lahir</label>
                                <input type="date" class="form-control" wire:model="tglLahir">
                                <div>
                                    @error('tglLahir') <span class="error">{{ $message }}</span> @enderror 
                                </div>

                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" wire:model="password">
                                <div>
                                    @error('password') <span class="error">{{ $message }}</span> @enderror 
                                </div>

                                <label class="form-label">Lokasi</label>
                                <select wire:model="locate_id" class="form-select">
                                    <option selected>:. Pilih Lokasi Wifi .:</option>
                                    @foreach ($locates as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                             
                             
                                <button class="btn btn-sm btn-outline-primary mt-3" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
</div>
