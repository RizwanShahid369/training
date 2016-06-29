{* Smarty *}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Customer</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Customers
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Last updated</th>
                                <th>Store ID</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Active</th>
                                <th>Create Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {assign var='i' value=1}
                            {section name=user loop=$arr}
                            <tr>
                                <td>{$arr[user].customer_id}</td>
                                <td>{$arr[user].first_name}</td>
                                <td>{$arr[user].last_name}</td>
                                <td>{$arr[user].last_update}</td>
                                <td>{$arr[user].store_id}</td>
                                <td>{$arr[user].email}</td>
                                <td>{$arr[user].address_id}</td>
                                <td>{$arr[user].active}</td>
                                <td>{$arr[user].create_date}</td>

                                <td><a href="edit/{$arr[user].customer_id}" >Edit</a></td>
                                <td><a onclick="return confirm(\'are you sure?\')"  href="removeOne/{$arr[user].customer_id}" >Delete</a></td>

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