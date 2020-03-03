<div class="d-flex flex-column">
    @foreach ($posts as $post)
        @livewire('card', ['post' => $post])
    @endforeach
</div>
