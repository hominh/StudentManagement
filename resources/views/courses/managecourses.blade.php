@extends('master')
@section('content')
@include('popup.academic')
@include('popup.program')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Courses</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                <li><i class="icon_document_alt"></i><a href="#">Course</a></li>
                <li><i class="fa fa-file-text-o"></i><a href="#">Manage</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Manage course
                </header>
                <form class="form-horizontal">

                    <div class="panel-body" style="border-bottom: 1px solid">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for"academic">Academic year</label>
                                <div class="input-group">
                                    <select class="form-control" name="academic-year" id="academic">
                                        <option value="">---</option>
                                        @foreach($academics as $item)
                                            <option value="{!! $item->id !!}">{!! $item->name !!}</option>
                                        @endforeach()
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus" id="add-academic"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for"program">Course</label>
                                <div class="input-group">
                                    <select class="form-control" name="program" id="programs">
                                        <option value="">---</option>
                                        @foreach($programs as $item)
                                            <option value="{!! $item->id !!}">{!! $item->name !!}</option>
                                        @endforeach()
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus" id="add-program"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <label for"level">Level</label>
                                <div class="input-group">
                                    <select class="form-control" name="level" id="level">

                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <label for"shift">Shift</label>
                                <div class="input-group">
                                    <select class="form-control" name="shift" id="shift">

                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <label for"time">Time</label>
                                <div class="input-group">
                                    <select class="form-control" name="time" id="time">

                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <label for"batch">Batch</label>
                                <div class="input-group">
                                    <select class="form-control" name="batch" id="batch">

                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-2">
                                <label for"group">Group</label>
                                <div class="input-group">
                                    <select class="form-control" name="group" id="group">

                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <label for"startdate">Start date</label>
                                <div class="input-group">
                                    <input type="text" name="startdate" id="startdate" placeholder="Start date" class="form-control">
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <label for"startdate">End date</label>
                                <div class="input-group">
                                    <input type="text" name="enddate" id="enddate" placeholder="End date" class="form-control">
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="panel-footer">
                        <button type="submit" class="btn btn-default btn-sm">Create course</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        var user_id = $('input#user_id').val();
        $('#startdate').datepicker({
            changeMonth: true,
            changeYear: true
        });
        $('#add-academic').on('click',function(){
            $('#academic-year-show').modal();
            //$( "#academic-year" ).focus();
        });

        $('#add-program').on('click',function(){
            $('#program-show').modal();
            $( "#program" ).focus();
        });
        $('.btn-save-academic').on('click',function(){
            var academicyear =  $('#academic-year').val();
            $.ajax({
                type:"POST",
                url:'/manage/courses/storeacademic',
                data: {
                    'name': academicyear,
                    'user_id': user_id
                },
                success: function(data) {
                    //console.log(data);
                    alert('Success');
                    $('#academic-year-show').modal('toggle');
                    $('#academic').append($("<option/>",{
                        value: data.id,
                        text: data.name
                    }));
                },
                error: function (xhr, status, error) {
                    alert(xhr.responseText);
                }
            });
        });

        $('.btn-save-program').on('click',function(){
            var program = $('#program').val();
            var description = $('#description').val();
            $.ajax({
                type: "POST",
                url: '/manage/courses/storeprogram',
                data: {
                    'name': program,
                    'description': description,
                    'user_id': user_id
                },
                success: function(data) {
                    alert('Success');
                    $('#program-show').modal('toggle');
                    $('#programs').append($("<option/>",{
                        value: data.id,
                        text: data.name
                    }));
                },
                error: function (xhr, status, error) {
                    alert(xhr.responseText);
                }
            });

        });
    </script>
@endsection
