@extends('layouts.app')
@section('content')
<h1>{{ trans('panel.site_title') }}</h1>

<form action="showResult" method="GET">
    <p>{{ trans('panel.enter_text') }} :<br>
        <textarea id="text" name="text" rows="15" cols="170"></textarea>
    </p>
    
    <input type="submit" value="{{ trans('panel.process_text') }}" style="width:120px; height:30px;">
</form>
@endsection