<div class="modal fade" id="level-show" tabindex="-1" role="dialog" aria-labelledby="mymodallabel" aria-hidden="true">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" id="user_id" />
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="model-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">New level</h4>
            </div>
            <form method="post" action="{!! route('storelevel') !!}" id="form-level-create" class="form-horizontal">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}" id="user_id" />
                <div class="panel-body">
                    <div class="form-group">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <select class="form-control" id="level-program" name="program_id">
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" id="level-name" class="form-control" placeholder="Level" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="description" id="level-description" class="form-control" placeholder="Level description" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-save-level">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>
