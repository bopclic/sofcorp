@props(['tagCsv'])

@php
$tags = explode(',', $tagCsv) 
@endphp

@foreach ($tags as $tag)
 <a href="/?tag={{$tag}}" class="btn btn-dark mb-3">{{$tag}}</a>
@endforeach

<br>