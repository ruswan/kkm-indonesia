<!-- Bagian Event Terbaru -->
<section class="event-section">
    <div class="fi-main fi-width-7xl">
        <div class="event-container">
            <h2 class="event-header-title brand-text header-section">Event Terbaru</h2>
            <p class="event-header-description">Ikuti webinar, seminar, dan acara komunitas kami
                untuk menambah wawasan Anda.</p>

            <div class="event-grid">

                @php
                    $events = \App\Models\Event::latest()->take(3)->get();
                @endphp

                @foreach ($events as $event)
                    <div class="event-card">
                        <div class="event-card-content">
                            <div class="event-date-container">
                                <div class="event-date-badge">
                                    <p class="event-date-month">{{ $event->start_date->format('M') }}</p>
                                    <p class="event-date-day brand-text">{{ $event->start_date->format('d') }}</p>
                                </div>
                                <div class="event-info">
                                    <h3 class="event-title brand-text">{{ $event->name }}</h3>
                                    <p class="event-location">{{ $event->location }}</p>
                                </div>
                            </div>
                            <p class="event-description">
                                {{ Str::limit(strip_tags($event->description), 200) }}
                            </p>
                        </div>
                        <div class="event-card-footer">
                            <a href="{{ url('event/' . $event->slug) }}" class="event-button">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
