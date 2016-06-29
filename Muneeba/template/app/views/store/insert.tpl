

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Store</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit store
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="../store/add" method="post">

                                <div class="form-group">
                                    <label>Manager Staff ID: </label>
                                    <input type="text" name="Store[manager_staff_id]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address ID: </label>
                                    <input type="text" name="Store[address_id]" class="form-control">
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