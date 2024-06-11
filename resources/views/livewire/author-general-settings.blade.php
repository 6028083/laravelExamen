<div>

    <form method="POST" wire:submit.prevent='updateGeneralSettings()'>
        <div class="class-row">
            <div class="class-col-md-6">
                <div class="class-mb-3"><br>
                    <label for="" class="form-label">Blog Naam</label>
                    <input type="text" class="form-control" placeholder="Voer de blognaam in" wire:model='blog_name'>
                    <span class="text-danger">@error('blog_name'){{ $message }}@enderror</span>
                </div>
                <div class="class-mb-3"><br>
                    <label for="" class="form-label">Blog Email</label>
                    <input type="text" class="form-control" placeholder="Voer het blog-e-mailadres in" wire:model='blog_email'>
                    <span class="text-danger">@error('blog_email'){{ $message }}@enderror</span>
                </div>
                <div class="class-mb-3"><br>
                    <label for="" class="form-label">Blog Beschrijving</label>
                    <textarea class="form-control" id="" cols="3" rows="3" wire:model='blog_description'></textarea>
                    <span class="text-danger">@error('blog_description'){{ $message }}@enderror</span>
                </div>
                <button class="btn btn-primary mt-3">Wijzigingen opslaan</button>

            </div>
        </div>
    </form>

</div>