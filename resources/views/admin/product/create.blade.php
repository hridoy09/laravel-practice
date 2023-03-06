@extends('admin.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Add product</h4>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Product Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Tumb Image</label>
                                        <input class="form-control" name="tumb_image" type="file" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Images</label>
                                        <input class="form-control" name="images[]" type="file" multiple required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Weight</label>
                                        <input class="form-control" name="weight" type="text" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Dimensions</label>
                                        <input class="form-control" name="diensions" type="text" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Color</label>
                                        <input class="form-control" name="color" type="text" required>
                                    </div>
                                </div>


                                <div class="col-12 col-md-6 col-lg-6">
                                    <label for="name">Specifications</label>
                                    <div id="row">
                                        <div class="input-group mb-2 mt-2">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-danger" id="DeleteRow" type="button">
                                                    <i class="bi bi-trash"></i>
                                                    Delete
                                                </button>
                                            </div>
                                            <input type="text" name="specifications[]" class="form-control m-input">
                                        </div>
                                    </div>

                                    <div id="newinput"></div>
                                    <button id="rowAdder" type="button" class="btn btn-md btn-dark">
                                         ADD
                                    </button>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@section('script')
    <script type="text/javascript">
        $("#rowAdder").click(function() {
            newRowAdd =
                '<div id="row"> <div class="input-group mb-2 mt-2">' +
                '<div class="input-group-prepend">' +
                '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                '<i class="bi bi-trash"></i> Delete</button> </div>' +
                '<input type="text" name="specifications[]" class="form-control m-input"> </div> </div>';

            $('#newinput').append(newRowAdd);
        });

        $("body").on("click", "#DeleteRow", function() {
            $(this).parents("#row").remove();
        })
    </script>
@endsection
