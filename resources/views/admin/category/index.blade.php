@extends('admin.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">{{ __('Category') }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <button type="button" class="btn btn-primary waves-effect waves-light mb-3 addCategory">Add
                                Category</button>
                            <h2> Category</h2>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>

                                            <th class="align-middle">Id</th>
                                            <th class="align-middle">Name</th>
                                            <th class="align-middle">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (@$categories as $category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td class="btn-group">
                                                    <button type="button" value="{{ $category->id }}"
                                                        data-id="{{ $category->id }}" data-name="{{ $category->name }}"
                                                        class="btn btn-md btn-warning editBtn">Edit</button>
                                                    <button class="btn btn-danger deleteCategoryButton"
                                                        data-category_id="{{ $category->id }}">Delete</a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- sample add modal content -->
    <div id="CategoryModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add Category</h5>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="modal-body">

                        <h5>Name *</h5>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                            required placeholder="Category">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <!-- Danger Alert Modal -->
    <div id="deleteCategoryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content modal-filled bg-danger">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="dripicons-wrong h1 text-white"></i>
                        <h4 class="mt-2 text-white">Alert!</h4>
                        <p class="mt-3 text-white">Are you sure to delete this employee?</p>
                        <a href="" class="deleteCategoryAnchore"><button type="button"
                                class="btn btn-light my-2">Continue</button></a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection


@section('script')
    <script>
        (function($) {
            "use strict";
            $('body').on('click', '.deleteCategoryButton', function() {
                let deleteCategoryModal = $('#deleteCategoryModal');
                let url = `{{ route('admin.delete.category', '') }}/${$(this).data('category_id')}`;
                deleteCategoryModal.find('.deleteCategoryAnchore').attr('href', url);
                deleteCategoryModal.modal('show');
            });
        })(jQuery);
    </script>

    <script>
        $(document).ready(function() {
            var MyModal = $('#CategoryModal')
            var Url = `{{ route('admin.category.save') }}`
            $(document).on('click', '.editBtn', function() {
                $('[name="name"]').val($(this).data('name'));
                MyModal.find('form').attr('action', `${Url}/${$(this).data('id')}`);
                MyModal.modal('show');
            });

            $(document).on('click', '.addCategory', function() {
                MyModal.find('form')[0].reset();
                MyModal.find('form').attr('action', Url);

                MyModal.modal('show');

            });

        });
    </script>
@endsection
