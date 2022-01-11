@extends('layouts.admin')

@section('admin_body')
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li class="">
                    <a href="#">Hospitals</a>
                </li>

                <li class="active">
                    <a href="#">Create new</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>
    </div>

    <div class="page-content">

        <div class="page-header">
            <h1>
                Hospitals
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    Create new Hospital
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

                <div class="row">
                    <form action="{{url('/admin/save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-offset-1 col-md-9">
                            <div class="form-group">
                                <label for="">Hospital Name</label>
                                <input type="text" name="hospital_name" class="form-control" placeholder="Enter hospital name...">
                            </div>

                            <div class="form-group">
                                <label for="">Level</label>
                                <select name="hospital_lvl" class="form-control">
                                    <option value="Level 1">Level 1</option>
                                    <option value="Level 2">Level 2</option>
                                    <option value="Level 3">Level 3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Category</label>
                                <select name="hospital_category" class="form-control">
                                    <option value="General Health">General Health</option>
                                    <option value="Lorem ipsum">Lorem ipsum</option>
                                    <option value="Lorem ipsum">Lorem ipsum</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Hospital Address</label>
                                <input type="text" name="hospital_addr" class="form-control" placeholder="Enter hospital complete address...">
                            </div>

                            <div class="form-group">
                                <label for="">Hospital Map link</label>
                                <input type="text" name="hospital_link" class="form-control" placeholder="Enter hospital map link...">
                            </div>

                            <div class="form-group">
                                <label for="">Hospital Photo</label>
                                <input type="file" id="id-input-file-2" name="file"/>
                            </div>

                            <div class="form-group">
                                <label for="">Hospital Description</label>
                                <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="clearfix form-actions">
                                <div class="text-center">
                                    <button class="btn btn-info" type="submit">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
@endsection

@section('admin_js')
    <script>
        $(document).ready(function(){
            $('#id-input-file-2').ace_file_input({
                no_file:'No File ...',
                btn_choose:'Choose',
                btn_change:'Change',
                droppable:false,
                onchange:null,
                thumbnail:false //| true | large
                //whitelist:'gif|png|jpg|jpeg'
                //blacklist:'exe|php'
                //onchange:''
                //
            });
        });
    </script>
@endsection
