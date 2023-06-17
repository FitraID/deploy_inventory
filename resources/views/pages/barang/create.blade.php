@extends('layout.master')

@section('content')
@php
    use App\Models\category_cabang;
    $cabang = category_cabang::all();
@endphp
    <div class="row">
        <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <h6 class="card-title">Input Mask</h6>
            <form 
            action="{{ route('barang.store') }}" 
            method="POST" 
            enctype="multipart/form-data"    
            class="forms-sample">
            @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Product Name:</label>
                        <input class="form-control mb-4 mb-md-0" id="product-name-input" type="text" placeholder="Search for a product..." />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Supplier:</label>
                        <select class="form-control" id="supplier-select">
                            <option value="">All Suppliers</option>
                            <option value="supplier1">Supplier 1</option>
                            <option value="supplier2">Supplier 2</option>
                            <option value="supplier3">Supplier 3</option>
                        </select>
                    </div>
                </div>
                <!-- Rest of the form content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">category</label>
                        <select class="form-control" id="supplier-select">
                            <option value="">All Suppliers</option>
                            <option value="supplier1">Supplier 1</option>
                            <option value="supplier2">Supplier 2</option>
                            <option value="supplier3">Supplier 3</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jumlah</label>
                        <input class="form-control" name="jumlah" type="number"/>
                    </div>
                </div>
                <!-- Rest of the form content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Harga Pokok</label>
                        <input class="form-control mb-4 mb-md-0" name="harga_pokok" type="number" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Harga Jual</label>
                        <input class="form-control" name="harga_jual" type="number" />
                    </div>
                </div>
                <label for="">Harga Khusus</label>
        <table class="table table-bordered" id="tabelhargakhusus">
            <thead>
                <tr>
                    <th>Keterangan</th>
                    <th>Jumlah Minimal</th>
                    <th>Harga</th>
                    <th>Diskon</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="nama[]">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="jumlah_minimal[]">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="harga[]">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="diskon[]">
                    </td>
                    <td class="text-center">
                        <button class="btn btn-sm float-right btn-info" id="add_tr2" type="button"><i class="fa fa-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>

            <div class="mt-3">
        <!-- Rest of the form content -->
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button onclick="window.history.go(-1); return false;" type="submit" value="Cancel" class="btn btn-secondary">Cancel</button>
                    </div>
            
            </div>
        </div>
 
    </div>
    </div>
    </form>
    <script>
        $('#add_tr2').on('click', function (e) {
            var newRowContent =
                `<tr id="tr2_` + ($("#tabelhargakhusus > tbody > tr").length + 1) + `">` +
                `<td>` +
                `<input type="text" class="form-control" name="nama[]">` +
                `</td>` +
                `<td>` +
                `<input type="text" class="form-control" name="jumlah_minimal[]">` +
                `</td>` +
                `<td>` +
                `<input type="text" class="form-control" name="harga[]">` +
                `</td>` +
                `<td>` +
                `<input type="text" class="form-control" name="diskon[]">` +
                `</td>` +
                `<td class="text-center">` +
                `<button class="btn btn-sm btn-danger" onclick="deletetr2(` + ($("#tabelhargakhusus > tbody > tr").length + 1) + `)" type="button"><i class="fa fa-minus"></i></button>` +
                `</td>` +
                `</tr>`;
            $("#tabelhargakhusus tbody").append(newRowContent);
        });
    
        function deletetr2(id) {
            document.getElementById("tr2_" + id).remove();
        }
    </script>
@endsection

