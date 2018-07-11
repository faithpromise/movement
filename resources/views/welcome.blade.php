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
                @include('_social')
            </div>
        </div>
    </div>

    <!--
      |--------------------------------------
      | Speakers
      |--------------------------------------
    -->

    <div id="speakers" class="SpeakersSection">
        <div class="SpeakersSection-container">
            <h2 class="SpeakersSection-title">Speakers</h2>
            @include('_speakers')
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
            <img
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    sizes="(max-width: 940px) 33vw, 50vw"
                    srcset="
                        https://faithpromise.imgix.net/movement/stage-smoke-and-balls.jpg?auto=compress%2Cformatw=1920&amp;h={{ 1920 * .5625 }} 1920w,
                        https://faithpromise.imgix.net/movement/stage-smoke-and-balls.jpg?auto=compress%2Cformatw=1680&amp;h={{ 1680 * .5625 }} 1680w,
                    ">
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
        (object)[
            'title'     => 'Move Groups',
            'text'      => 'Move groups is our way of taking the Church outside of the walls of a building and into our communities. As a student, God can use you to encourage and reach people that a pastor couldn’t. You can connect with people before they ever connect to Church, and we believe God will use you and others like you to bring hope to your schools and communities.',
            'link_text' => 'Learn More',
            'slug'      => 'groups',
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