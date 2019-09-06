
@php
    use Prismic\Dom\RichText;
@endphp

@extends('layouts.app')

@section('content')
	@foreach ($document as $doc)
    <div data-wio-id="{{ $doc->id }}">
        <h1>{{ RichText::asText($doc->data->title) }}</h1>
        <div>
            {!! RichText::asHtml($doc->data->description) !!}
        </div>
        <img width="300px" src="{{ $doc->data->image->url }}" alt="{{ $doc->data->image->alt }}">
    </div>
    @endforeach
@stop