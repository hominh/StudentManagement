@extends('master')
@section('content')
@include('popup.academic')
@include('popup.program')
@include('popup.level')
@include('popup.shift')
@include('popup.time')
@include('popup.batch')
@include('popup.group')
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
                <form class="form-horizontal" id="frm-create-course" action="{!! route('storeclass') !!}" method="POST">
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
                                        <span class="fa fa-plus" id="add-level"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <label for"shift">Shift</label>
                                <div class="input-group">
                                    <select class="form-control" name="shift" id="shift">
                                        <option value="">---</option>
                                        @foreach($shifts as $item)
                                            <option value="{!! $item->id !!}">{!! $item->name !!}</option>
                                        @endforeach()
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus" id="add-shift"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <label for"time">Time</label>
                                <div class="input-group">
                                    <select class="form-control" name="time" id="time">
                                        <option value="">---</option>
                                        @foreach($times as $item)
                                            <option value="{!! $item->id !!}">{!! $item->name !!}</option>
                                        @endforeach()
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus" id="add-time"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <label for"batch">Batch</label>
                                <div class="input-group">
                                    <select class="form-control" name="batch" id="batch">
                                        <option value="">---</option>
                                        @foreach($batches as $item)
                                            <option value="{!! $item->id !!}">{!! $item->name !!}</option>
                                        @endforeach()
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus" id="add-batch"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-2">
                                <label for"group">Group</label>
                                <div class="input-group">
                                    <select class="form-control" name="group" id="group">
                                        <option value="">---</option>
                                        @foreach($groups as $item)
                                            <option value="{!! $item->id !!}">{!! $item->name !!}</option>
                                        @endforeach()
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus" id="add-group"></span>
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
            changeYear: true,
            dateFormat: 'yy-mm-dd'
        });
        $('#enddate').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd'
        });
        $('#frm-create-course').on('submit',function(e){
            e.preventDefault();
            var url = $(this).attr('action');
            var active = '1';
            var academic_id = $('#academic').val();
            var level = $('#level').val();
            var shift = $('#shift').val();
            var time = $('#time').val();
            var batch = $('#batch').val();
            var group = $('#group').val();
            var startdate = $('#startdate').val();
            var enddate = $('#enddate').val();
            //console.log(data);
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    'academic_id': academic_id,
                    'level_id': level,
                    'shift_id': shift,
                    'time_id': time,
                    'group_id': group,
                    'batch_id': batch,
                    'start_date': startdate,
                    'end_date': enddate,
                    'active': active,
                    'user_id': user_id,
                },
                success: function(data) {
                    console.log(data);
                    alert('Success');
                    $('#frm-create-course').trigger('reset');
                },
                error: function (xhr, status, error) {
                    console.log(xhr);
                    console.log(error);
                    console.log(status);
                }
            });
        });
        $('#frm-create-course #programs').on('change',function(){
            var program_id = $(this).val();
            var level = $('#level');
            $(level).empty();
            $.ajax({
                type: "GET",
                url:'/manage/courses/showlevel',
                data: {
                    program_id: program_id
                },
                success: function(data) {
                    console.log(data);
                    $.each(data,function(i,l){
                        $(level).append($("<option/>",{
                            value: l.id,
                            text: l.name
                        }));
                    });
                },
            });
        });

        $('#add-academic').on('click',function(){
            $('#academic-year-show').modal();
            //$( "#academic-year" ).focus();
        });

        $('#add-program').on('click',function(){
            $('#program-show').modal();
            $( "#program" ).focus();
        });
        $('#add-level').on('click',function(){
            var programs = $('#programs option');
            var program = $('#form-level-create').find('#level-program');
            $(program).empty();
            $.each(programs,function(i,pro){
                //console.log($(pro).val()); //value of option
                $(program).append($("<option/>",{
                    value: $(pro).val(),
                    text: $(pro).text()
                }));
            });
            $('#level-show').modal('show');
        });

        $('#add-shift').on('click',function(){
            $('#shift-show').modal();
        });

        $('#add-time').on('click',function() {
            $('#time-show').modal();
        });

        $('#add-batch').on('click',function() {
            $('#batch-show').modal();
        });

        $('#add-group').on('click',function() {
            $('#group-show').modal();
        });

        $('.btn-save-group').on('click',function(){
            var groupname = $('#group-name').val();
            $.ajax({
                type: "POST",
                url: '/manage/courses/storegroup',
                data: {
                    'user_id': user_id,
                    'name': groupname
                },
                success: function(data) {
                    console.log(data);
                    alert('Success');
                    $('#group-show').modal('toggle');
                    $('#group').append($("<option/>",{
                        value: data.id,
                        text: data.name
                    }));
                }
            });
        });

        $('.btn-save-batch').on('click',function(){
            var batchname = $('#batch-name').val();
            $.ajax({
                type: "POST",
                url: '/manage/courses/storebatch',
                data: {
                    'user_id': user_id,
                    'name': batchname
                },
                success: function(data) {
                    console.log(data);
                    alert('Success');
                    $('#batch-show').modal('toggle');
                    $('#batch').append($("<option/>",{
                        value: data.id,
                        text: data.name
                    }));
                }
            });
        });

        $('.btn-save-time').on('click',function() {
            var timename = $('#time-name').val();
            $.ajax({
                type: "POST",
                url: '/manage/courses/storetime',
                data: {
                    'user_id': user_id,
                    'name': timename
                },
                success: function(data) {
                    console.log(data);
                    alert('Success');
                    $('#time-show').modal('toggle');
                    $('#time').append($("<option/>",{
                        value: data.id,
                        text: data.name
                    }));
                }
            });
        });

        $('.btn-save-shift').on('click',function(){
            var shiftname = $('#shift-name').val();
            $.ajax({
                type: "POST",
                url: '/manage/courses/storeshift',
                data: {
                    'user_id': user_id,
                    'name': shiftname
                },
                success: function(data) {
                    console.log(data);
                    alert('Success');
                    $('#shift-show').modal('toggle');
                    $('#shift').append($("<option/>",{
                        value: data.id,
                        text: data.name
                    }));
                }
            });
        });

        $('#form-level-create').on('submit',function(e){
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            console.log(data);
            $.ajax({
                type: "POST",
                url: url,
                data: data,
                success: function(data) {
                    console.log(data);
                },
                error: function (xhr, status, error) {
                    console.log(xhr);
                    console.log(error);
                    console.log(status);
                }
            });
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
