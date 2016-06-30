{extends file="../layouts/layout.tpl"}

{block name=title} teacher List page {/block}
{block name=body}


    <div class="col-lg-12">
    <h2>All Teacher information</h2>

    <div class="panel panel-default">
    <div class="panel-heading">
        Teachers
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Operation</th>
        </thead>
        <tbody>
        {foreach from=$data key=k item=i}
            <tr>
                <td>{$i.id}</td>
                <td>{$i.name}</td>
                <td>{$i.designation}</td>
                <td><a href="edit?id={$i.id}">Edit</a> / <a href="delete?id={$i.id}">Delete</a> </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    </div>
        <!-- /.table-responsive -->
    </div>
        <!-- /.panel-body -->

    </div>
    <div>
        <a href="add">Add new teachers</a>
    </div>


{/block}