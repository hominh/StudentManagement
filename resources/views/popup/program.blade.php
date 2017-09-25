<div class="modal fade" id="program-show" tabindex="-1" role="dialog" aria-labelledby="mymodallabel" aria-hidden="true">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" id="user_id" />
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="model-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Program</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                     <div class="form-group">
                          <label class="">Name</label>
                          <input type="text" name="program" id="program" class="form-control" />
                    </div>
                    <div class="form-group">
                         <label class="">Description</label>
                         <input type="text" name="description" id="description" class="form-control" />
                   </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success btn-save-program">Save</button>
            </div>
        </div>
    </div>
</div>
