@extends('layouts.default')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Tambah Barang</strong></div>
                    <div class="card-body card-block">
                        <form action="{{route('product-galleries.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="product" class=" form-control-label">Nama Barang</label>
                                <select name="products_id" class="form-control @error('products_id') is-invalid @enderror">
                                    @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                                @error('name')
                                <div class="text-muted">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="photo" class=" form-control-label">Foto Barang</label>
                                <input type="file" name="photo" placeholder="Masukkan foto barang" accept="image/*" class="form-control @error('photo') is-invalid @enderror" value="{{old('photo')}}">
                                @error('photo')
                                <div class="text-muted">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="is_default" class="form-control-label">Jadikan Default</label>
                                <br>
                                <label>
                                    <input type="radio" name="is_default" value="1" class="form-control @error('is_default') is-invalid @enderror"/>Ya
                                </label>
                                &nbsp;
                                <label>
                                    <input type="radio" name="is_default" value="0" class="form-control @error('is_default') is-invalid @enderror"/>Tidak
                                </label>
                                @error('is_default')
                                <div class="text-muted">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-actions form-group d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary">Tambah barang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- .animated -->
</div><!-- .content -->
@endsection