@extends('layouts.header', [
  'type'        => 'post',
  'heading'     => $post->title,
  'subheading'  => $post->description,
  'meta'        => 'Publié le ' . $post->created_at->format('d F Y'),
  'image'       => asset('frontend-theme/img/post-bg.jpg')
])

@section('page')
@include('utilities.snippets.admin.edit_post', ['id' => $post->id])
  {!! $post->content !!}
  <ul class="pager">
    <li class="next">
      <a href="{{ route('blog') }}">Retourner au blog &rarr;</a>
    </li>
  </ul>
@endsection
