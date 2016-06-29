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
                    Add customer
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="../customer/add" method="post">
                                <div class="form-group">
                                    <label>First Name: </label>
                                    <input type="text" name="Customer[first_name]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Last Name: </label>
                                    <input type="text" name="Customer[last_name]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Store ID: </label>
                                    <input type="text" name="Customer[store_id]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email: </label>
                                    <input type="text" name="Customer[email]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address: </label>
                                    <input type="text" name="Customer[address_id]" class="form-control">
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