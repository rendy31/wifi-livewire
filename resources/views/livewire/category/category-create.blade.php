<div>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Kategori Akun </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item">Akun</li>
                    <li class="breadcrumb-item active">Wifi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('category.index')}}" type="button" class="btn btn-sm btn-outline-secondary">Batal</a>
                        </div>
                        <div class="card-body">
                            <form wire:submit="save"> 
                                <label for="namaCategory" class="form-label">Nama Kategori</label>
                                <input type="text" id="namaCategory" class="form-control" wire:model="name" autofocus>
                                <div>
                                    @error('name') <span class="error">{{ $message }}</span> @enderror 
                                </div>
                                
                                <button class="btn btn-sm btn-outline-primary mt-3" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
</div>
