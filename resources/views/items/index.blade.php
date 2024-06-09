@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Items</div>

                <div class="card-body">
                    <a href="{{ route('items.create') }}" class="btn btn-primary">Add New Item</a>
                    <a href="{{ route('categories.index') }}" class="btn btn-primary m-2">Categories</a>
                    <br><br>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>
                                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
