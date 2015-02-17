<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 20-12-2014
 * Time: 18:09
 */
?>
@extends('layout.main')

{{ HTML::style('css/create.css'); }}
@section('content')
    <form action="{{ URL::route('account-create-post') }}" method="post">

        <div class="fields">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }} required/>
            @if($errors->has('email'))
                {{ $errors->first('email') }}
            @endif

            <label for="username">Username:</label>
            <input type="text" id="username" name="username"{{ (Input::old('username')) ? ' value="' . e(Input::old('username')) . '"' : '' }} required/>
            @if($errors->has('username'))
                {{ $errors->first('username') }}
            @endif

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required/>
            @if($errors->has('password'))
                {{ $errors->first('password') }}
            @endif

            <label for="password_again">Password again:</label>
            <input type="password" id="password_again" name="password_again" required/>
            @if($errors->has('password_again'))
                {{ $errors->first('password_again') }}
            @endif

            <label for="date_of_birth">Date of birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth"{{ (Input::old('date_of_birth')) ? ' value="' . e(Input::old('date_of_birth')) . '"' : '' }} required/>
            @if($errors->has('date_of_birth'))
                {{ $errors->first('date_of_birth') }}
            @endif

            <input type="submit" id="submit" value="Create account"/>
            {{ Form::token() }}
        </div>
    </form>
@stop