<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="none">
    <title>CMS | {{ config('app.name', 'Laravel') }}</title>
    {{-- Scripts --}}
    @vite(['resources/js/cms.js'])
    @stack('head-scripts')
</head>
<body class="cms-body">
<div class="cms-app">
    {{-- Sidebar --}}
    @include('layouts.cms.sidebar')

    <div class="cms-page">
        {{-- Navigation --}}
        @include('layouts.cms.navbar')

        {{-- View header --}}
        @if (isset($header)) @include('layouts.cms.header') @endif

        {{-- View action buttons --}}
        @if (isset($actionButtons)) @include('layouts.cms.action-buttons') @endif

        {{-- View content --}}
        <main class="cms-main container-xl">
            {{ $slot }}
        </main>

        {{-- Session flash messages --}}
        @if(Session::has('flash_message')) @include('layouts.cms.flash-message') @endif
    </div>

    {{-- Modals --}}
    @stack('modals')
</div>
{{-- Scripts --}}
@stack('bottom-scripts')
</body>
</html>
