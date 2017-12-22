<?php

/** @var \App\Models\Guest $guest */

$photo = $guest->photo_count > 1 ? 2 : 1;

$body_class = 'has-popup';
$photo_url = 'https://faithpromise.imgix.net/movement/speakers/' . $guest->slug . '-' . $photo . '.jpg?auto=compress%2Cformat&amp;crop=entropy&amp;fit=facearea&amp;facepad=2.5&amp;w=480&amp;h=480';
?>

@extends('layout-base')

@section('content')
    <div id="top" class="Popup">

        <div class="Popup-content">
            <a class="Popup-close" href="/">
                <svg>
                    <use xlink:href="#icon-close"></use>
                </svg>
            </a>
            <div class="Popup-iconImg" style="background-image: url({{ $photo_url }})"></div>

            <div class="Popup-text">
                @yield('page')

                <div class="Popup-social">
                    <ul class="SocialList">
                        @if ($guest->facebook)
                            <li class="SocialList-item">
                                <a class="SocialList-link" href="https://facebook.com/{{ $guest->facebook }}">
                                    <svg role="img" class="SocialIcon">
                                        <use xlink:href="#icon-facebook"></use>
                                    </svg>
                                </a>
                            </li>
                        @endif
                        @if ($guest->twitter)
                            <li class="SocialList-item">
                                <a class="SocialList-link" href="https://twitter.com/{{ $guest->twitter }}">
                                    <svg role="img" class="SocialIcon">
                                        <use xlink:href="#icon-twitter"></use>
                                    </svg>
                                </a>
                            </li>
                        @endif
                        @if ($guest->instagram)
                            <li class="SocialList-item">
                                <a class="SocialList-link" href="https://instagram.com/{{ $guest->instagram }}">
                                    <svg role="img" class="SocialIcon">
                                        <use xlink:href="#icon-instagram"></use>
                                    </svg>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            <h2 class="Popup-h2">Other Guests Include</h2>

            @include('_speakers', ['show_social' => false])

            @include('_popup_footer')

        </div>

    </div>
@endsection