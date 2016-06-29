

{* Smarty *}


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
                    All stores
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Store ID</th>
                                <th>Manaager Staff Name </th>
                                <th>Address</th>
                                <th>Last Updated</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {assign var='i' value=1}
                            {section name=user loop=$arr}
                                <tr>
                                    <td>{$arr[user].store_id}</td>
                                    <td>{$arr[user].manager_staff_id}</td>
                                    <td>{$arr[user].address_id}</td>
                                    <td>{$arr[user].last_update}</td>

                                    <td><a href="edit/{$arr[user].store_id}" >Edit</a></td>
                                    <td><a onclick="return confirm(\'are you sure?\')"  href="removeOne/{$arr[user].store_id}" >Delete</a></td>
                                </tr>
                                {assign var='i' value=$i+1}
                            {/section}
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>

