@extends ('master.content.mastercontent')

@section ('title', 'Add Product')
@section ('content')

<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"></head>

<div class="form-add">
    <h1>Add Product</h1>
    <div class="form-card">
        <form action="/product/store" method="POST" class="form">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text">Name</span>
                <input name="name" type="text" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <input name="image" type="file" class="form-control">
                <label class="input-group-text">Image</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Rp</span>
                <input name="price" type="number" class="form-control">
                <span class="input-group-text">,00</span>
            </div>
            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="button-add-product">
                <button class="add-button-product" type="submit" name="submit">Add</button>
            </div>
        </form>
    </div>
</div>

@if(Session::has('add-product'))
    <div class="alert-info" role="alert">
        {{Session::get('message')}}
    </div>
@endif

@endsection