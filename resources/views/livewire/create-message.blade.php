<div class="text-center mb-4">
    <h2 class="title">Sampaikan Pesan Secara Rahasia</h2>
    <p class="sub-title">Berikan tanggapan/pesan tanpa diketahui</p>
    <div class="container input-name">
        <form wire:submit.prevent="addName">
            <label class="label-form mb-1" for="name">Nama Kamu</label>
            <input wire:model.debounce.500ms="name" class="form-control shadow-none @error('name') is-invalid @enderror @if(strlen($name) >= 3 && strlen($name) <= 55) is-valid @endif" name="name" id="name" type="text" placeholder="Nama Kamu" autocomplete="off">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <label class="label-form d-block mt-3 mb-1" for="desc">Deskripsi (Opsional) <sub><i>*boleh dikosongkan</i></sub></label>
            <textarea wire:model.debounce.500ms="desc" class="form-control shadow-none @error('desc') is-invalid @enderror" name="desc" id="desc" placeholder="Deskripsi" rows="3"></textarea>
            @error('desc')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <button type="submit" class="btn btn-dark shadow-none mt-3"><i class="fas fa-link"></i>&nbsp;&nbsp;Buat Link</button>
        </form>
    </div>
</div>
