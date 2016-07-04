{extends file="../login/index.tpl"}
{block name=body}

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="?url=teacher/editVal" method="post">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" value="{$name}">
                                        </div>

                                        <div class="form-group">
                                            <label>Department</label>
                                            <input class="form-control" name="dept" value="{$dept}">
                                        </div>

                                        <div class="form-group">
                                            <label>Rank</label>
                                            <input class="form-control" name="rank" value="{$rank}">
                                        </div>

                                        <input type="hidden" name="id" value="{$id}">
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
            <!-- /.row -->
        <!-- /#page-wrapper -->
  {/block}