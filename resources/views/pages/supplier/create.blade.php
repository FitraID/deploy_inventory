@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/supplier">Supplier</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Supplier</li>
</ol>
</nav>

<div class="row">
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">

        <h6 class="card-title">Input Supplier</h6>

        <form class="forms-sample">
        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Nama Cabang">
        </div>
        <div class="mb-3">
            <label for="exampleInputUsername2" class="form-label">Kepala</label>
            <input name="kepala" type="text" class="form-control" id="exampleInputUsername2" autocomplete="off" placeholder="Kepala Cabang">
        </div>
        <div class="mb-3">
            <label for="exampleInputUsername3" class="form-label">Telepon</label>
            <input type="number" name="telepon" class="form-control" id="exampleInputUsername3" autocomplete="off" placeholder="Telepon">
        </div>
        <div class="mb-3">
            <label for="exampleInputUsername4" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputUsername4" autocomplete="off" placeholder="Alamat Cabang">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label">Category Cabang</label>
            <select class="form-select" name="category" id="exampleFormControlSelect1">
                <option selected disabled>Select your Category Cabang</option>
                <option>12-18</option>
                <option>18-22</option>
                <option>22-30</option>
                <option>30-60</option>
                <option>Above 60</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputUsername4" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="exampleInputUsername4" autocomplete="off" placeholder="Keterangan Cabang">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button  
        onclick="window.history.go(-1); return false;"
        type="submit"
        value="Cancel" class="btn btn-secondary">Cancel</button>
        </form>

    </div>
    </div>
</div>
</div>

@endsection
