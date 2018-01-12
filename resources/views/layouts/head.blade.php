<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
{!! Html::style('css/styles.css') !!}
{!! Html::style('css/app.css') !!}
@yield('css')
<title> @yield('title')</title>
<head>