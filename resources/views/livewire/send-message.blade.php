<div class="container text-center send-message">
    <form wire:submit.prevent="addMessage">
        <label class="label-form d-block mt-4 mb-1" for="message">Berikan Pesan</label>
        <textarea wire:model.debounce.500ms="message" class="form-control shadow-none @error('message') is-invalid @enderror" name="message" id="message" placeholder="Berikan pesan kepada {{ $user->name }}" rows="3"></textarea>
        @error('message')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        <button type="submit" class="btn btn-dark shadow-none my-3"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Kirim</button>
    </form>
</div>