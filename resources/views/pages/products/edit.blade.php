@extends('layouts.default')

@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Ubah Barang</strong></div>
                    <div class="card-body card-block">
                        <form action="{{route('products.update', $item->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Nama Barang</label>
                                <input type="text" name="name" placeholder="Masukkan nama barang" class="form-control @error('name') is-invalid @enderror" value="{{$item->name ?? old('name')}}">
                                @error('name')
                                <div class="text-muted">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Tipe Barang</label>
                                <input type="text" name="type" placeholder="Masukkan tipe barang" class="form-control @error('type') is-invalid @enderror" value="{{ $item->type ??old('type')}}">
                                @error('type')
                                <div class="text-muted">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">Deskripsi Barang</label>
                                <textarea type="text" name="description" placeholder="Masukkan deskripsi barang" class="form-control ckeditor @error('description') is-invalid @enderror">{{$item->description ?? old('description')}} </textarea>
                                @error('description')
                                <div class="text-muted">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">Harga Barang</label>
                                <input type="text" name="price" placeholder="Masukkan harga barang" class="form-control @error('price') is-invalid @enderror" value="{{ $item->price ?? old('price')}}">
                                @error('name')
                                <div class="text-muted">{{$price}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">Kuantitas Barang</label>
                                <input type="text" name="quantity" placeholder="Masukkan kuantitas barang" class="form-control @error('quantity') is-invalid @enderror" value="{{ $item->quantity ?? old('quantity')}}">
                                @error('quantity')
                                <div class="text-muted">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-actions form-group d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary">Ubah barang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- .animated -->
</div><!-- .content -->
@endsection