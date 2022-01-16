<div class="text-center mb-4">
    <h2 class="title">Kirim Pesan Secara Rahasia</h2>
    <p class="sub-title">Berikan tanggapan/pesan tanpa diketahui oleh siapapun</p>
    <div class="container input-name">
        <form wire:submit.prevent="addName">
            <input wire:model.debounce.500ms="newName" class="form-control shadow-none @error('newName') is-invalid @enderror" name="newName" type="text" placeholder="Nama kamu" autocomplete="off">
            @error('newName')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <button type="submit" class="btn btn-dark shadow-none mt-3">Buat Link</button>
        </form>
    </div>
</div>
