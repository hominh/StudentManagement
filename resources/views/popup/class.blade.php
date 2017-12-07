<div class="modal fade" id="class-show" role="dialog">
    <div class="modal-dialog modal-xs">
        <section class="panel panel-default">
            <header class="panel-heading">
                Choose academic
            </header>
            <form class="form-horizontal" id="frm-view-course" action="{!! route('storeclass') !!}" method="POST">
                <div class="panel-body" style="border-bottom: 1px solid">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for"academic">Academic year</label>
                            <div class="input-group">
                                <select class="form-control" name="academic_id" id="academic">
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
                        <div class="col-sm-6">
                            <label for"program">Course</label>
                            <div class="input-group">
                                <select class="form-control" name="program_id" id="programs">
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

                        <div class="col-sm-6">
                            <label for"level">Level</label>
                            <div class="input-group">
                                <select class="form-control" name="level" id="level">
                                    <option value="">---</option>
                                    @foreach($levels as $item)
                                        <option value="{!! $item->id !!}">{!! $item->name !!}</option>
                                    @endforeach()
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-level"></span>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
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


                        <div class="col-sm-6">
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


                        <div class="col-sm-3">
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
                    </div>
                </div>
            </form>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Class Information
                </div>
                <div class="panel-body" id="add-class-info" style="overflow: auto; height: 250px;">

                </div>

            </div>
        </section>
    </div>
</div>
