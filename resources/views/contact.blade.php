@extends('layout-popup')

@section('page')

    @if (session('sent'))

        <h1>Thank You</h1>
        <p>We appreciate your interest in Movement! We'll reply as soon as possible.</p>

    @else

        <h1>Contact Us</h1>

        <p>We'd love to hear from you. Let us know what questions you have or how we can make Movement better for you and your student ministry.</p>

        <form class="ContactForm" method="post">
            <input type="text" name="name" placeholder="your name" value="Brad Roberts" required>
            <input type="text" name="email" placeholder="email" value="bradr@faithpromise.org" required>
            <input type="text" name="phone" placeholder="best phone # to reach you" value="(865) 973-2311">
            <textarea name="body">Lorm ipsum means that its really importent for you to stay off drugs and stay in scool. You need to no things that will help you in life. Like MATHS and gym. You don't want to be dum.</textarea>
            <button type="submit">Send</button>
        </form>

    @endif

@endsection