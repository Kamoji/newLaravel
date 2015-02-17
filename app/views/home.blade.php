<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 20-12-2014
 * Time: 16:16
 */
?>
@extends('layout.main')

@section('content')
    @if(Auth::check())
        <p>Hello, {{ Auth::user()->username }}</p>
    @else
        <p>You are not signed in</p>
    @endif
@stop