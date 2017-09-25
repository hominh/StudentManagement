<div class="modal fade" id="academic-year-show" tabindex="-1" role="dialog" aria-labelledby="mymodallabel" aria-hidden="true">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" id="user_id" />
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="model-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Academic year</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" name="academic-year" id="academic-year" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success btn-save-academic">Save</button>
            </div>
        </div>
    </div>
</div>
