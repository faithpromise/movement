@extends('layout')

@section('page')

    <!--
          |--------------------------------------
          | Header
          |--------------------------------------
        -->

    <div class="HomeHeader">
        {{--<img src="/images/stage-smoke-and-balls.jpg">--}}
        <video data-object-fit="cover" autoplay loop muted preload>
            <source src="https://s3-us-west-2.amazonaws.com/faithpromise.org/movement/movement-banner.mp4" type="video/mp4">
        </video>
        <div class="HomeHeader-overlay"></div>
        <div class="HomeHeader-container">
            <h1 class="HomeHeader-title">Movement</h1>
            <p class="HomeHeader-dates">{{ $conference_start_date->format('F j') }}-{{ $conference_end_date->format('j, Y') }}</p>
            <div class="HomeHeader-social">
                <ul class="SocialList">
                    <li class="SocialList-item">
                        <a class="SocialList-link" href="">
                            <svg role="img" class="SocialIcon">
                                <use xlink:href="#icon-facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="SocialList-item">
                        <a class="SocialList-link" href="">
                            <svg role="img" class="SocialIcon">
                                <use xlink:href="#icon-twitter"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="SocialList-item">
                        <a class="SocialList-link" href="">
                            <svg role="img" class="SocialIcon">
                                <use xlink:href="#icon-instagram"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--
      |--------------------------------------
      | Speakers
      |--------------------------------------
    -->

    <div id="speakers" class="SpeakersSection">
        {{--<div class="SectionDivider-1">--}}
        {{--<img src="http://placehold.it/300x100">--}}
        {{--<svg>--}}
        {{--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#divider-1"></use>--}}
        {{--</svg>--}}
        {{--</div>--}}
        <div class="SpeakersSection-container">
            <h2 class="SpeakersSection-title">Speakers</h2>

            <ul class="SpeakerList">
                @foreach($guests as $guest)
                    <li class="SpeakerList-item">
                        <div class="SpeakerCard">
                            <img
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    sizes="(max-width: 779px) 100vw, 50vw"
                                    srcset="
                                        https://faithpromise.imgix.net/movement/speakers/{{ $guest->slug }}-1.jpg?auto=compress%2Cformat&amp;crop=entropy&amp;fit=facearea&amp;facepad=5&amp;mono=969696&amp;w=1920&amp;h={{ 1920 * .5625 }} 1920w,
                                        https://faithpromise.imgix.net/movement/speakers/{{ $guest->slug }}-1.jpg?auto=compress%2Cformat&amp;crop=entropy&amp;fit=facearea&amp;facepad=5&amp;mono=969696&amp;w=1680&amp;h={{ 1680 * .5625 }} 1680w,
                                        https://faithpromise.imgix.net/movement/speakers/{{ $guest->slug }}-1.jpg?auto=compress%2Cformat&amp;crop=entropy&amp;fit=facearea&amp;facepad=5&amp;mono=969696&amp;w=1280&amp;h={{ 1280 * .5625 }} 1280w,
                                        https://faithpromise.imgix.net/movement/speakers/{{ $guest->slug }}-1.jpg?auto=compress%2Cformat&amp;crop=entropy&amp;fit=facearea&amp;facepad=5&amp;mono=969696&amp;w=800&amp;h={{ 800 * .5625 }} 800w,
                                        https://faithpromise.imgix.net/movement/speakers/{{ $guest->slug }}-1.jpg?auto=compress%2Cformat&amp;crop=entropy&amp;fit=facearea&amp;facepad=5&amp;mono=969696&amp;w=480&amp;h={{ 480 * .5625 }} 480w
                                    ">
                            <div class="SpeakerCard-info">
                                <h3 class="SpeakerCard-name">{{ $guest->name }}</h3>
                                <div class="SpeakerCard-social">
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
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!--
      |--------------------------------------
      | Schedule
      |--------------------------------------
    -->

    <div class="Schedule">

        <div class="Schedule-content">
            <h2 class="Schedule-title">Schedule</h2>

            @include('_schedule')
        </div>

        <div class="Schedule-image">
            <img src="/images/stage-lights.jpg">
        </div>

        <div class="SectionDivider-2">
            <img src="http://placehold.it/300x24">
            <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#divider-2"></use>
            </svg>
        </div>

    </div>

    <!--
      |--------------------------------------
      | Details
      |--------------------------------------
    -->

    <?php

    $detail_sections = [
        (object)[
            'title'     => 'About',
            'text'      => 'Movement Conference is more than an event, it’s a spark to an awakening in the next generation! Check here for all the details.',
            'link_text' => 'Learn about the conference',
            'slug'      => 'about',
        ],
        (object)[
            'title'     => 'Tickets',
            'text'      => 'We\'ve made registering easy! Check here for frequently asked questions regarding tickets and registration.',
            'link_text' => 'More on registration',
            'slug'      => 'tickets',
        ],
        (object)[
            'title'     => 'Travel & Venue',
            'text'      => 'Movement Conference will be held at the Knoxville Civic Auditorium located in Downtown Knoxville. Learn more about traveling to Knoxville.',
            'link_text' => 'More on travel and venue',
            'slug'      => 'travel',
        ],
        (object)[
            'title'     => 'Lodging',
            'text'      => 'We have discount rates at several hotels within walking distance of the conference. Be sure to book early for the best rate.',
            'link_text' => 'More on lodging',
            'slug'      => 'lodging',
        ],
        (object)[
            'title'     => 'Food',
            'text'      => 'What\'s a student conference without food? Please check here for more information about which meals are provided.',
            'link_text' => 'More about meals',
            'slug'      => 'food',
        ],
        (object)[
            'title'     => 'Resources',
            'text'      => 'Leaders, we have all the details you need to provide an amazing experience for your students.',
            'link_text' => 'Resources for leaders',
            'slug'      => 'resources',
        ],
    ];

    ?>

    <div class="Section">

        <div class="Section-container">

            <h2 class="Section-title Section-title--schedule">Details</h2>

            <ul class="DetailsList">
                @foreach ($detail_sections as $section)
                    <li class="DetailsList-item">
                        <div class="DetailsItem">
                            <a class="DetailsItem-header" href="/{{ $section->slug }}">
                                <div class="DetailsItem-icon DetailsItem-icon--{{ $section->slug }}">
                                    <svg>
                                        <use xlink:href="#icon-{{ $section->slug }}"></use>
                                    </svg>
                                </div>
                                <h3 class="DetailsItem-title">{{ $section->title }}</h3>
                            </a>
                            <div class="DetailsItem-body">
                                <p>{{ $section->text }}</p>
                            </div>
                            <div class="DetailsItem-footer">
                                <a class="DetailsItem-button" href="/{{ $section->slug }}">
                                    <span>{{ $section->link_text }}</span>
                                    <svg>
                                        <use xlink:href="#icon-arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

        </div>

    </div>

@endsection