<x-filament-widgets::widget>
    <!-- Bagian Direktori Konselor -->
    <section>
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center brand-text mb-4 header-section">Direktori Konselor</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Temukan konselor terbaik untuk mendukung
                perjalanan menyusui Anda.</p>

            {{ $this->table }}

        </div>
    </section>
</x-filament-widgets::widget>
