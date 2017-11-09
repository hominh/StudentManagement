@extends('master')
@section('content')
<style type="text/css">
    .student-photo {
        height: 160px;
        padding-left: 1px;
        padding-right: 1px;
        border: 1px solid #ccc;
        background: #eee;
        width: 140px;
        margin: 0px auto;
    }
    .photo >input[type='file'] {
        display: none;
    }
    .photo {
        width: 30px;
        height: 30px;
        border-radius: 100%;
    }
    .student-id {
        background-repeat: repeat-x;
        border-color: #ccc;
        padding: 5px;
        text-align: center;
        background: #eee;
        border-bottom: 1px solid #ccc;
    }
    .btn-browser {
        border-color: #ccc;
        padding: 5px;
        text-align: center;
        background: #eee;
        border-bottom: 1px solid #ccc;
    }
    fieldset {
        margin-top: 5px;
    }
    fieldset legend {
        display: block;
        width: 100%;
        padding: 0;
        font-size: 15px;
        line-height: inherit;
        color: #797979;
        border-bottom: 1px solid #e5e5e5;
    }
</style>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Student registration</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                <li><i class="icon_document_alt"></i><a href="#">Student</a></li>
                <li><i class="fa fa-file-text-o"></i><a href="#">Create student</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration: none;">Choose academic</a>
                        <a href="#" class="pull-right"><i class="fa fa-plus"></i></a>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body academic-detail">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b><i class="fa fa-apple"></i>Student information</b>
                </div>
                <div class="panel-body" style="padding-bottom: 4px;">
                    <form action="{!! route('storestudent') !!}" method="post" id="frm-create-student">
                         {{ csrf_field() }}
                        <input type="hidden" name="class_id" id="class_id" />
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstname">First name: </label>
                                            <input type="text" name="firstname" id="firstname" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Last name: </label>
                                            <input type="text" name="lastname" id="lastname" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <fieldset>
                                                <legend>Sex</legend>
                                                <table style="width:100%;margin-top: -14px;">
                                                    <tr style="border-bottom: 1px solid #ccc;">
                                                        <td>
                                                            <label>
                                                                <input type="radio" name="sex" id="sex" value="0" required checked />
                                                                Male
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label>
                                                                <input type="radio" name="sex" id="sex" value="1" required />
                                                                Female
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">Birth date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar studentdob"></i>
                                            </div>
                                            <input type="text" name="dob" id="dob" class="form-control" placeholder="yyyy/mm/dd" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="national_card">National card</label>
                                        <input type="text" name="national_card" id="national_card" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <fieldset>
                                            <legend>Status</legend>
                                            <table style="width:100%;margin-top: -14px;">
                                                <tr style="border-bottom: 1px solid #ccc;">
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="status" id="status" value="0" required checked />
                                                            Single
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="status" id="status" value="1" required />
                                                            Married
                                                        </label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="national_card">Nationality</label>
                                        <input type="text" name="nationality" id="nationality" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="national_card">Rac</label>
                                        <input type="text" name="rac" id="rac" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="national_card">Passport</label>
                                        <input type="text" name="passport" id="passport" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="national_card">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="national_card">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="form-group form-group-login">
                                        <table style="margin: 0 auto;">
                                            <thead>
                                                <tr class="info">
                                                    <th class="student-id">0000</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="photo">
                                                        {!! Html::image('photo/user.png',null,['class'=>'student-photo','id'=>'showPhoto']) !!}
                                                        <input type="file" name="photo" id="photo" accept="image/x-png,image/png,image/jpeg" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;background:#ddd;">
                                                        <input type="button" name="browse_file" id="browse_file" class="form-control btn-browser" value="Browse" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="panel-heading" style="margin-top: -20px;">
                            <b><i class="fa fa-apple"></i>Address</b>
                        </div>
                        <div class="panel-body" style="padding-bottom:10px; margin-top:0;">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Village">Village</label>
                                        <input type="text" name="village" id="village" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Commune">Commune</label>
                                        <input type="text" name="commune" id="commune" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="district">District</label>
                                        <input type="text" name="district" id="district" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="province">Province</label>
                                        <input type="text" name="province" id="province" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="current_address">Current address</label>
                                        <input type="text" name="current_address" id="current_address" class="form-control" required />
                                    </div>
                                </div>
                                <!--<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="current_address_study">Current Address Study</label>
                                        <input type="text" name="current_address_study" id="current_address_study" class="form-control" required />
                                    </div>
                                </div>!-->
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button value="submit" class="btn btn-default btn-save">Save<i class="fa fa-save"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $('#browse_file').on('click',function(){
            $('#photo').click();
        });
        $('#photo').on('change',function(){
            showFile(this,'#showPhoto')
        })
        function showFile(fileinput,img,showname){
            if(fileinput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(img).attr('src',e.target.result);
                }
                reader.readAsDataURL(fileinput.files[0]);
            }
            $(showname).text(fileinput.files[0].name);
        }
    </script>
@endsection
