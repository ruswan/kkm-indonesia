@php
    $image = asset('images/kkmi.png');

    if (request()->is('/')) {
        $title = 'Selamat Datang di KKMI';
        $description = 'Komunitas konselor menyusui Indonesia';
    } elseif (request()->is('counselor')) {
        $title = 'Direktori Konselor';
        $description = 'Temukan konselor menyusui terbaik di Indonesia';
    } elseif (request()->is('article')) {
        $title = 'Artikel';
        $description = 'Baca artikel menarik seputar menyusui';
    } elseif (request()->is('article/*')) {
        $record = request()->route('slug');
        $record = \App\Models\Article::where('slug', $record)->first();
        $title = $record ? $record->title : 'Detail Artikel';
        $description = $record ? Str::limit(strip_tags($record->content), 150) : 'Detail Artikel';
        $image =
            $record && $record->thumbnail
                ? route('public.thumbnail', ['article' => $record])
                : asset('images/kkmi.png');
    } elseif (request()->is('event')) {
        $title = 'Event';
        $description = 'Ikuti event menarik seputar menyusui';
    } elseif (request()->is('event/*')) {
        $record = request()->route('slug');
        $record = \App\Models\Event::where('slug', $record)->first();
        $title = $record ? $record->name : 'Detail Event';
        $description = $record ? Str::limit(strip_tags($record->description), 150) : 'Detail Event';
        $image =
            $record && $record->thumbnail ? route('public.thumbnail', ['event' => $record]) : asset('images/kkmi.png');
    } else {
        $title = 'Komunitas Konselor Menyusui Indonesia';
        $description = 'Bersama Meningkatkan Dukungan Menyusui di Indonesia';
    }
@endphp


<meta name="description" content="{{ $description ?? 'Komunitas konselor menyusui Indonesia' }}">

<meta property="og:title" content="{{ $title ?? 'Komunitas Konselor Menyusui Indonesia' }}">
<meta property="og:description" content="{{ $description ?? 'Bersama Meningkatkan Dukungan Menyusui di Indonesia' }}">
<meta property="og:image" content="{{ $image ?? asset('images/kkmi.png') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title ?? 'Komunitas Konselor Menyusui Indonesia' }}">
<meta name="twitter:description" content="{{ $description ?? 'Bersama Meningkatkan Dukungan Menyusui di Indonesia' }}">
<meta name="twitter:image" content="{{ $image ?? asset('images/kkmi.png') }}">
