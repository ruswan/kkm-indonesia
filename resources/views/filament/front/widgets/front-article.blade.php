<x-filament-widgets::widget>
    <!-- Bagian Artikel Terbaru -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center brand-text mb-4">Artikel Terbaru</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Baca artikel, tips, dan panduan terbaru seputar
                dunia menyusui dari para ahli.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @php
                    $articles = \App\Models\Article::latest()->take(3)->get();
                @endphp
                @foreach ($articles as $article)
                    <a href="{{ url('/article/' . $article->slug) }}" class="no-underline">
                        <div class="rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ $article->thumbnail ? route('private.thumbnail', ['article' => $article]) : 'https://placehold.co/600x400/FBEAE8/4A7C7A?text=No+Image' }}"
                                alt="Gambar artikel tentang {{ $article->title }}" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-xl brand-text mt-2 mb-3">{{ $article->title }}</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    {{ Str::limit(strip_tags($article->content), 100, '...') }}</p>
                                <div class="text-xs text-gray-500">
                                    <span>Oleh {{ $article->author->name }}</span> |
                                    <span>{{ $article->published_at->format('d M Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>
        </div>
    </section>
</x-filament-widgets::widget>
