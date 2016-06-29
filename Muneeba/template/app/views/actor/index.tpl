{* Smarty *}

<!--<form action="search" method="post">
    Search Full Name: <input type="text" name="Actor[first_name]"><br>
    <input type="submit" name="search" value="search">
</form>

<table>

</table>
<a href="logout">Log Out</a> -->




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
                    Actors
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Actor No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Last updated</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {assign var='i' value=1}
                            {section name=user loop=$arr}
                                <tr role="row" class="gradeA odd">
                                    <td class="sorting_1">{$i}</td>
                                    <td>{$arr[user].first_name}</td>
                                    <td>{$arr[user].last_name}</td>
                                    <td>{$arr[user].last_update}</td>
                                    <td><a href="edit/{$arr[user].actor_id}" >Edit</a></td>
                                    <td><a onclick="return confirm(\'are you sure?\')"  href="removeOne/{$arr[user].actor_id}" >Delete</a></td>
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

