@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $item->name }}</div>

                <div class="card-body">
                    <p><strong>Description:</strong> {{ $item->description }}</p>
                    <p><strong>Quantity:</strong> {{ $item->quantity }}</p>
                    <p><strong>Category:</strong> {{ $item->category->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
