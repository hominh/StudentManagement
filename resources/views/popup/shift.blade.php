<div class="modal fade" id="shift-show" tabindex="-1" role="dialog" aria-labelledby="mymodallabel" aria-hidden="true">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" id="user_id" />
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="model-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">New shift</h4>
            </div>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" id="user_id" />
            <div class="panel-body">
                <div class="form-group">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" name="shift-name" id="shift-name" class="form-control" placeholder="Shift" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-save-shift">Save</button>
            </div>
        </div>
    </div>
</div>
