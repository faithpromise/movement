<?php

// TODO: imgsrc on images

use App\Services\SvgSprite;
use Illuminate\Support\Facades\App;

$is_production = App::environment('production');
$css_url = 'css/app.css';

$icons_sprite = SvgSprite::make(public_path("images/svg-icons"), 'icon-');
$dividers_sprite = SvgSprite::make(public_path("images/dividers"));

$body_class = isset($body_class) ? $body_class : '';
$page = isset($page) ? $page : '';

?><!doctype html>
<html lang="{{ app()->getLocale() }}" class="{{ $body_class }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <title>Movement Conference</title>

        <script src="https://use.typekit.net/bak8pbx.js"></script>
        <script>try {Typekit.load({ async: false });} catch (e) {}</script>

        <link rel="stylesheet" href="{{ $is_production ? mix($css_url) : '/' . $css_url . uniqid('?') }}">
    </head>
    <body>

        {!! $icons_sprite !!}
        {!! $dividers_sprite !!}

        @yield('content')

        <script>
            window.movement = {
                <?= 'conference_start: ' . $conference_start_date->timestamp * 1000 . ',' ?>
                <?= 'conference_end: ' . $conference_end_date->timestamp * 1000 . ',' ?>
            };
        </script>
        <script src="{{ $is_production ? mix('/js/app.js') : '/js/app.js' . uniqid('?') }}"></script>

    </body>
</html>
