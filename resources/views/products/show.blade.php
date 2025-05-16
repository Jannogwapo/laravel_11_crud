@extends('layouts.app')
@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Details
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="mb-3">
                            <strong>Description:</strong>
                            {{ $product->description }}
                        </div>
                        <div class="mb-3">
                            <strong>Price:</strong>
                            ${{ number_format($product->price, 2) }}
                        </div>
                        <div class="mb-3">
                            <strong>Created At:</strong>
                            {{ $product->created_at->format('M d, Y H:i A') }}
                        </div>
                        <div class="mb-3">
                            <strong>Last Updated:</strong>
                            {{ $product->updated_at->format('M d, Y H:i A') }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-image-container">
                            @if($product->image)
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid product-image">
                            @else
                                <div class="no-image-placeholder">
                                    <i class="bi bi-image"></i>
                                    <p>No image available</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .product-image-container {
        width: 100%;
        min-height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
        border-radius: 8px;
        overflow: hidden;
    }
    .product-image {
        max-width: 100%;
        max-height: 400px;
        object-fit: contain;
    }
    .no-image-placeholder {
        text-align: center;
        color: #6c757d;
    }
    .no-image-placeholder i {
        font-size: 48px;
        margin-bottom: 10px;
    }
    .mb-3 {
        margin-bottom: 1.5rem !important;
    }
    .mb-3 strong {
        display: inline-block;
        width: 120px;
        color: #495057;
    }
</style>
@endpush
@endsection
