@extends('layouts.app')
@section('title','Test Grid')
@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-1 row-cols-sm-1 row-cols-lg-2">
        <div class="col mb-2">
            <button type="submit" class="btn btn-primary mb-2">Tambah</button>
            <button type="submit" class="btn btn-success mb-2">Import</button>
            <button type="submit" class="btn btn-secondary mb-2">Export</button>
        </div>
        <div class="col mb-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="search" class="form-control" id="inputSearch" placeholder="Enter keyword">
                </div>
                <div class="form-group col-md-6">
                    <select name="" class="form-control" id="">
                        <option value="">--Pilih--</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection