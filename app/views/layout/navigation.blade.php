<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 20-12-2014
 * Time: 16:26
 */
?>
{{ HTML::style('css/navigation.css'); }}
<nav>
    <ul>
        <li><a href="{{ URL::route('home') }}">Home</a></li>

        @if(Auth::check())
            <li><a href="{{ URL::route('account-sign-out') }}">Sign out</a></li>
        @else
            <li><a href="{{ URL::route('account-sign-in') }}">Sign in</a></li>
            <li><a href="{{ URL::route('account-create') }}">Create an account</a></li>
        @endif
    </ul>
</nav>
