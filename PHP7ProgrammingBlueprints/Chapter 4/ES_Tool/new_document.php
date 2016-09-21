<div class="col-md-6">
  <div class="panel panel-info">
    <div class="panel-heading">Create Document for indexing</div>
    <div class="panel-body">
      <form method="post" action="new_document" role="form">
          <div class="form-group">
            <label class="control-label" for="Title">Title</label>
            <input type="text" class="form-control" id="newTitle" placeholder="Title">
          </div>
          <div class="form-group">
            <label class="control-label" for="exampleInputFile">Post Content</label>
            <textarea class="form-control" rows="5" name="post_body"></textarea>
            <p class="help-block">Add some Content</p>
          </div>
          <div class="form-group">
            <label class="control-label">Keywords/Tags</label>
            <div class="col-sm-10">
             <input type="text" class="form-control" placeholder="keywords, tags, more keywords" name="keywords">
            </div>
            <p class="help-block">You know, #tags</p>
          </div>
          <button type="submit" class="btn btn-default">Create New Document</button>
        </form>
    </div>
  </div>
</div>
