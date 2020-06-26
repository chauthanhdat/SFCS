@extends('admin.layouts.master')

@section('title')
Add Product
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">

        <form role="form">

            <fieldset class="form-group">
                <label>Text Input with Placeholder</label>
                <input class="form-control" placeholder="Enter text">
            </fieldset>

            <div class="form-group">
                <label>Static Control</label>
                <p class="form-control-static">email@example.com</p>
            </div>

            <fieldset class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile">
            </fieldset>

            <fieldset class="form-group">
                <label>Text area</label>
                <textarea class="form-control" rows="3"></textarea>
            </fieldset>

            <button type="submit" class="btn btn-secondary">Submit Button</button>
            <button type="reset" class="btn btn-secondary">Reset Button</button>

        </form>

    </div>
</div>
@endsection