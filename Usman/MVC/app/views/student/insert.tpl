{extends file="../login/index.tpl"}
{block name=body}
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Basic Form Elements
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="?url=student/insertVal/" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Father Name</label>
                                    <input class="form-control" name="fname" >
                                </div>

                                <div class="form-group">
                                    <label>Date of birth</label>
                                    <input class="form-control" name="dob">
                                </div>

                                <div class="form-group">
                                    <label>City</label>
                                    <input class="form-control" name="city">
                                </div>

                                <div class="form-group">
                                    <label>Class</label>
                                    <input class="form-control" name="class">
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" name="address">
                                </div>

                                <div class="form-group">
                                    <label>School</label>
                                    <input class="form-control" name="school">
                                </div>
                                <input type="hidden" name="student" value="{$id}">
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
{/block}
