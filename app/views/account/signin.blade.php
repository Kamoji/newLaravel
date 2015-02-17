<?php
/**
 * Created by PhpStorm.
 * User: Bart van Venrooij
 * Date: 20-12-2014
 * Time: 21:48
 */
?>
@extends('layout.main')

{{ HTML::style('css/create.css'); }}
@section('content')
    <form action="{{ URL::route('account-sign-in-post') }}" method="post">

        <div class="fields">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"{{ (Input::old('email')) ? ' value="' . Input::old('email') . '"' : '' }} required/>
            @if($errors->has('email'))
                {{ $errors->first('email') }}
            @endif

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required/>
            @if($errors->has('password'))
                {{ $errors->first('password') }}
            @endif

            <input type="submit" id="submit" value="Sign in"/>
            {{ Form::token() }}
        </div>

    </form>
@stop