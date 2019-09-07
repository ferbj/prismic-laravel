@php
use Prismic\Dom\RichText;
@endphp
@extends('layouts.app')
@section('content')
@foreach ($document as $doc)
<div class="d-flex justify-content-center">
    <div data-wio-id="{{ $doc->id }}">
        <h1 class="text-center">{{ RichText::asText($doc->data->title) }}</h1>
        <div class="text-center">
            {!! RichText::asHtml($doc->data->description) !!}
        </div>
        <img class="img-responsive" width="300px" src="{{ $doc->data->image->url }}" alt="{{ $doc->data->image->alt }}">
    </div>
</div>
@endforeach
@stop