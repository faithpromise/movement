<?php
$body_class = 'has-popup';
$popup_icon = str_replace('/', '', $_SERVER['REQUEST_URI']);
$nav = ['about', 'tickets', 'travel', 'lodging', 'food', 'resources', 'contact'];
?>

@extends('layout-base')

@section('content')
    <div id="top" class="Popup">

        <ul class="PopupNav">
            @foreach($nav as $nav_item)
                <li class="PopupNav-item">
                    <a class="PopupNav-link" href="/{{ $nav_item }}">
                        <svg>
                            <use xlink:href="#icon-{{ $nav_item }}"></use>
                        </svg>
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="Popup-content">
            <a class="Popup-close" href="/">
                <svg>
                    <use xlink:href="#icon-close"></use>
                </svg>
            </a>
            <div class="Popup-icon">
                <svg>
                    <use xlink:href="#icon-{{ $popup_icon }}"></use>
                </svg>
            </div>
            <div class="Popup-text">
                @yield('page')
            </div>

            @include('_popup_footer')

        </div>
    </div>
@endsection