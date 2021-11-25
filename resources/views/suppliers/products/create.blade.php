@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Create Product</h5>

                <form action="" method="GET">
                    <div class="row">
                        <div class="col-6 p-3">
                            <div class="row">
                                <div class="col-3">
                                    <label for="product_type" class="form-label">Type of Product</label>
                                </div>
                                <div class="col-9">
                                    <div class="form-group">
                                        <select  class="form-select" name="product_type" id="select-type">
                                            <option value="">Select</option>
                                            <option value="oem" @if (request()->product_type == 'oem') selected @endif>OEM</option>
                                            <option value="aftermarket" @if (request()->product_type == 'aftermarket') selected @endif>Aftermarket</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @if (request()->has('product_type'))
                                <div class="row" id="oem-part">
                                    <div class="col-3">
                                        <label for="part-number" class="form-label">Enter Part No</label>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <input type="text" name="part_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <button type="submit" class="btn btn-warning">Go</button>
                                    </div>
                                </div>     
                                <div class="row">
                                    <div class="col-12">OR</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button name="search_part" class="btn btn-primary" type="submit">Search for Part No</button>
                                    </div>
                                </div>                       
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
var select = document.getElementById('select-type');
select.addEventListener('change', function(){
    this.form.submit();
}, false);
</script>
@endsection