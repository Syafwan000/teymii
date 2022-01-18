<div>
    @if($messages->count())
        @foreach($messages as $message)
        <div class="container messages mt-4">
            <label class="label-message">Seseorang</label>
            <p class="message-time mb-2">{{ $message->created_at->diffForHumans() }}</p>
            <article class="m-0">{{ $message->message }}</article>
        </div>
        @endforeach
    @else
        <p class="desc text-center mt-5"><i class="fas fa-sad-tear"></i>&nbsp;&nbsp;Tidak Ada Pesan</p>
    @endif
    <div class="container d-flex justify-content-center mt-4">
        {{ $messages->onEachSide(0)->links() }}
    </div>
</div>
