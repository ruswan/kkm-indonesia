<section class="article-section">
    <div class="fi-main fi-width-7xl">

        <div class="article-container">
            <h2 class="article-header-title brand-text header-section">Artikel Terbaru</h2>
            <p class="article-header-description">Baca artikel, tips, dan panduan terbaru seputar
                dunia menyusui dari para ahli.</p>

            <div class="article-grid">

                @php
                    $articles = \App\Models\Article::latest()->take(3)->get();
                @endphp
                @foreach ($articles as $article)
                    <a href="{{ url('/article/' . $article->slug) }}" class="article-card-link">
                        <div class="article-card">
                            <img src="{{ $article->thumbnail ? route('public.thumbnail', ['article' => $article]) : 'https://placehold.co/600x400/FBEAE8/4A7C7A?text=No+Image' }}"
                                alt="Gambar artikel tentang {{ $article->title }}" class="article-card-image">
                            <div class="article-card-content">
                                <h3 class="article-card-title brand-text">{{ $article->title }}</h3>
                                <p class="article-card-excerpt">
                                    {{ Str::limit(strip_tags($article->content), 100, '...') }}</p>
                                <div class="article-card-meta">
                                    <span>Oleh {{ $article->author->name }}</span> |
                                    <span>{{ $article->published_at->format('d M Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
</section>
