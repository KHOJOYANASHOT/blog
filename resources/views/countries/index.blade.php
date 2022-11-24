@extends('layouts.app')
@section('title', 'Pagination')
@section('content')
<div class="container">
<ul>
@foreach ($countries as $country)
<li>{{ $country->name }}</li>
@endforeach
</ul>
</div>
{{ $countries->links() }}
@endsection
