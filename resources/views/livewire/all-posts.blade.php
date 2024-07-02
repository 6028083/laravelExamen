<div>
    <div class="row row-cards">
        @forelse ($posts as $post)
        <div class="col-md-4 col-lg-3 col-sm-6">
            <div class="card">
                @if($post->featured_image_url)
                <img src="{{ $post->featured_image_url }}" alt="Afbeelding van bedrijf" class="card-img-top">
                @endif
                <div class="card-body p-2">
                    <h3 class="m-0 mb-1">{{ $post->post_title }}</h3>
                    <br>
                    <p class="m-0"><b>Deadline</b>: {{ $post->post_deadline }}</p>
                </div>
                <div class="d-flex">
                    <a href="{{ route('posts.edit-post', ['post_id' => $post->id]) }}" class="card-btn">Bijwerken</a>
                    <form action="{{ route('posts.delete-post', ['id' => $post->id]) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit bericht wilt verwijderen?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="card-btn">Verwijderen</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <span class="text-danger">Geen berichten gevonden</span>
        @endforelse
    </div>
</div>