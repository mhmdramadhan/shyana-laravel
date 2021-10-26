@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <select name="product_id" id="product_id" class="form-control @error('product_id') is-invalid @enderror">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    @error('product_id')
                        <div class="text-muted">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto Barang</label>
                    <input type="File" name="photo" id="photo" value="{{ old('photo') }}" accept="image/*"
                        class="form-control @error('photo') is-invalid @enderror">
                    @error('photo')
                        <div class="text-muted">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="is_default" class="form-control-label">Jadikan Default</label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="is_default" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="customRadioInline1">Ya</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="is_default" class="custom-control-input" value="0">
                        <label class="custom-control-label" for="customRadioInline2">Tidak
                        </label>
                    </div>
                    @error('is_default')
                        <div class="text-muted">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Tambah Foto barang</button>
                </div>
            </form>
        </div>
    </div>
@endsection
