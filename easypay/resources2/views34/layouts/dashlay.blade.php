<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.header')
@include('layouts.nav') 
@yield('content')

@include('layouts.footer') 