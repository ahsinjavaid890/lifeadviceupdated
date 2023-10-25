@php
    $url = request()->segment(count(request()->segments()));
    $page = DB::table('travelpages')->where('url' , $url)->get()->first();
@endphp
@section('tittle')
<title>{{ $page->meta_title }}</title>
<meta name="DC.Title" content="{{ $page->meta_title }}">
<meta name="rating" content="general">
<meta name="description" content="{{ $page->meta_description }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ url('public/images') }}/{{ $page->meta_image }}">
<meta property="og:title" content="{{ $page->meta_title }}">
<meta property="og:description" content="{{ $page->meta_description }}">
<meta property="og:site_name" content="{{ Cmf::get_store_value('site_name') }}">
<meta property="og:url" content="{{ URL::current() }}">
<link rel="canonical" href="{{ URL::current() }}">
<meta property="og:locale" content="it_IT">
<meta name="keywords" content="{{ $page->meta_tag }}">
@endsection