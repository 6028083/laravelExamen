@livewire('author-footer')

@livewireScripts

<script>
    document.addEventListener('livewire:load', function() {
        Livewire.on('refreshPage', function() {
            location.reload(true); // Reload the page
        });
    });
</script>