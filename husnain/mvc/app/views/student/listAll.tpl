{extends file="../layouts/layout.tpl"}

{block name=title} student add page {/block}
{block name=body}
    <h2>All students information</h2>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Students
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach from=$data key=k item=i}
                            <tr>
                                <td>{$i.id}</td>
                                <td>{$i.first_name}</td>
                                <td>{$i.last_name}</td>
                                <td>{$i.address}</td>
                                <td><a href="edit?id={$i.id}">Edit</a> / <a href="delete?id={$i.id}">Delete</a></td>
                            </tr>
                        {/foreach}

                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->


        <div>
            <a href="add">Add new Student</a>
        </div>
    </div>
{/block}

