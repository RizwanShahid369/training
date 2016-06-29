

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Actor</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit actor
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="../update" method="post">
                                <input type="hidden" name="actor_id" value="{$id}">
                                <div class="form-group">
                                    <label>First Name: </label>
                                    <input type="text" name="Actor[first_name]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Last Name: </label>
                                    <input type="text" name="Actor[last_name]" class="form-control">
                                </div>
                                <button type="submit" name="update" value="update" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>