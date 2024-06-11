<div>

    @if(Session::get('succes'))
    <div class="alert alert-succes">

        {{ Session::get('succes')}}
    </div>
    @endif




    <form class="card card-md" method="post" wire:submit.prevent='ForgotHandler()' autocomplete="off" novalidate="">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Wachtwoord vergeten</h2>
            <p class="text-muted mb-4">Voer uw e-mailadres in en uw wachtwoord wordt opnieuw ingesteld en naar u gemaild.</p>
            <div class="mb-3">
                <label class="form-label">E-mailadres</label>
                <input type="email" class="form-control" placeholder="Voer e-mailadres in" wire:model='email'>
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            </div>
            <div class="form-footer">
                <button class="btn btn-primary w-100" type='submit'>
                    <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                        <path d="M3 7l9 6l9 -6"></path>
                    </svg>
                    Stuur me de reset-link
                </button>
            </div>
        </div>
    </form>
</div>