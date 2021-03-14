@extends('layouts.app')
@section('content')
<h1>{{ trans('panel.site_title') }}</h1>

<p>{{ trans('panel.result_of_sort') }} :<hr>
    @foreach($sorted as $item)
        {{ $item }}<br>
    @endforeach
</p>
@endsection