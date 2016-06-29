{* Smarty *}


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Film</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add film
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="../film/add" method="post">
                                <div class="form-group">
                                    <label>Title: </label>
                                    <input type="text" name="Film[title]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Text area</label>
                                    <textarea class="form-control" rows="3" name="Film[description]"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Release Date: </label>
                                    <input type="text" name="Film[release_year]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Language: </label>
                                    <input type="text" name="Film[language_id]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Original Language: </label>
                                    <input type="text" name="Film[original_language_id]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Rental Duration: </label>
                                    <input type="text" name="Film[rental_duration]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Length: </label>
                                    <input type="text" name="Film[length]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Replacement cost: </label>
                                    <input type="text" name="Film[replacement_cost]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Rating: </label>
                                    <input type="text" name="Film[rating]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Special Features: </label>
                                    <input type="text" name="Film[special_features]" class="form-control">
                                </div>
                                <button type="submit" name="insert" value="insert" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>