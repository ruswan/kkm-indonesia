<x-filament-panels::page>
    <div class="space-y-6">
        <!-- Header Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">
                <!-- Thumbnail -->

                <div class="flex justify-center">
                    @if ($record->thumbnail)
                        <img src="{{ $record->thumbnail }}" alt="{{ $record->title }}"
                            class="w-full max-w-md rounded-lg shadow-lg object-cover">
                    @else
                        <div
                            class="w-full max-w-md h-64 bg-gray-200 rounded-lg shadow-lg flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    @endif
                </div>

                <!-- Article Info -->
                <div class="space-y-4">
                    <!-- Title -->
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 leading-tight">
                        {{ $record->title }}
                    </h1>

                    <!-- Meta Information -->
                    <div class="space-y-3">
                        @if ($record->category)
                            <div>
                                <span
                                    class="inline-flex items-center px-3 py-1 text-sm font-medium bg-blue-100 text-blue-800 rounded-full">
                                    {{ $record->category }}
                                </span>
                            </div>
                        @endif

                        @if ($record->author)
                            <div class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>By {{ $record->author->name }}</span>
                            </div>
                        @endif

                        @if ($record->published_at)
                            <div class="flex items-center text-gray-500">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zM4 7h12v9H4V7z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>{{ $record->published_at->format('F j, Y') }}</span>
                            </div>
                        @endif
                    </div>

                    <!-- Excerpt -->
                    @if ($record->excerpt)
                        <div class="text-lg text-gray-600 leading-relaxed mt-4">
                            {{ $record->excerpt }}
                        </div>
                    @else
                        <div class="text-lg text-gray-600 leading-relaxed mt-4">
                            {{ Str::words(strip_tags($record->content), 30, '...') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Article Content</h2>
            <div
                class="prose prose-lg max-w-none 
                        prose-headings:text-gray-900 prose-headings:font-bold
                        prose-p:text-gray-700 prose-p:leading-relaxed
                        prose-a:text-blue-600 prose-a:no-underline hover:prose-a:underline
                        prose-strong:text-gray-900 prose-strong:font-semibold
                        prose-ul:text-gray-700 prose-ol:text-gray-700
                        prose-blockquote:border-blue-500 prose-blockquote:bg-blue-50 prose-blockquote:p-4 prose-blockquote:rounded-lg
                        prose-img:rounded-lg prose-img:shadow-md">
                {!! $record->content !!}
            </div>
        </div>

        <!-- Article Information Section -->
        <div class="bg-gray-50 rounded-xl border border-gray-200 p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Article Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <div class="text-sm font-medium text-gray-900">Created</div>
                        <div class="text-sm text-gray-600">{{ $record->created_at->format('F j, Y \a\t g:i A') }}</div>
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                        </path>
                    </svg>
                    <div>
                        <div class="text-sm font-medium text-gray-900">Last Updated</div>
                        <div class="text-sm text-gray-600">{{ $record->updated_at->format('F j, Y \a\t g:i A') }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions Section -->
        <div class="flex justify-center space-x-4">
            <a href="{{ url('/front') }}"
                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Articles
            </a>

            <button onclick="shareArticle()"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z">
                    </path>
                </svg>
                Share Article
            </button>
        </div>
    </div>

    <script>
        function shareArticle() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ $record->title }}',
                    text: '{{ Str::words(strip_tags($record->content), 20) }}',
                    url: window.location.href,
                });
            } else {
                // Fallback untuk browser yang tidak support Web Share API
                const url = window.location.href;
                navigator.clipboard.writeText(url).then(() => {
                    alert('Article URL copied to clipboard!');
                });
            }
        }
    </script>
</x-filament-panels::page>
