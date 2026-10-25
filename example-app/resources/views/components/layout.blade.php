<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTittle ?? 'default tittle' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'default description' }}">
</head>
<body>
   @include('partials.nav') {{--directivas--}}
    {{ $slot }}

    @isset($sum)
    <p> 
        {{ $sum }}
    </p>
    @dump($sum)
    @endisset()

    @isset($sidebar)
    <div id="sidebar">
        <h3>Sidebar</h3>
        <div>{{ $sidebar }}</div>
    </div>
    @endisset()
</body>
</html>
