<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.header2')
@include('layouts.nav') 
@yield('content')

@include('layouts.footer2') 