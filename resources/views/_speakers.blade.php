<?php

$show_social = isset($show_social) ? $show_social : true;

?>

<ul class="SpeakerList">
    @foreach($guests as $guest)
        <li class="SpeakerList-item">
            <div class="SpeakerCard">
                <a class="SpeakerCard-photo" href="/speakers/{{ $guest->slug }}">
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
                    <svg role="img" class="Speaker-open">
                        <use xlink:href="#icon-open"></use>
                    </svg>
                </a>
                <div class="SpeakerCard-info">
                    <h3 class="SpeakerCard-name">{{ $guest->name }}</h3>
                    @if($show_social)
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
                    @endif
                </div>
            </div>
        </li>
    @endforeach
</ul>