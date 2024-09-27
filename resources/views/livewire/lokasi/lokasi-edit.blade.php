<div>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Lokasi </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item">Config</li>
                    <li class="breadcrumb-item active">Wifi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('locate.index')}}" type="button" class="btn btn-sm btn-outline-secondary">Batal</a>
                        </div>
                        <div class="card-body">
                            <form wire:submit="save"> 
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" wire:model="nama">
                                <div>
                                    @error('nama') <span class="error">{{ $message }}</span> @enderror 
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
