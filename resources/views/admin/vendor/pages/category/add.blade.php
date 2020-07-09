@extends('admin.vendor.layouts.master')

@section('title')
Add Product
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Product</h6>
    </div>
    <div class="row" style="margin: 8px">
        <div class="col-lg-12">

            <form role="form" action="{{ route('category.store') }}" method="post">
                @csrf

                <fieldset class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" placeholder="Enter product name">
                </fieldset>

                <!-- <fieldset class="form-group">
                    <label>Price</label>
                    <input class="form-control" name="price" placeholder="Enter product price">
                </fieldset> -->

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1">Show</option>
                        <option value="0">No Show</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-secondary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>

            </form>

        </div>
    </div>
</div>
@endsection