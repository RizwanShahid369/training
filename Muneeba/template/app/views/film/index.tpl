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
                    Films
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Film ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Release Year</th>
                                <th>Language</th>
                                <th>Original Language</th>
                                <th>Rental Duration</th>
                                <th>Length</th>
                                <th>Replacement cost</th>
                                <th>Rating</th>
                                <th>Special Features</th>
                                <th>Last updated</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {assign var='i' value=1}
                            {section name=user loop=$arr}
                                <tr>
                                    <td>{$i}</td>
                                    <td>{$arr[user].film_id}</td>
                                    <td>{$arr[user].title}</td>
                                    <td>{$arr[user].description}</td>
                                    <td>{$arr[user].release_year}</td>
                                    <td>{$arr[user].language_id}</td>
                                    <td>{$arr[user].original_language_id}</td>
                                    <td>{$arr[user].rental_duration}</td>
                                    <td>{$arr[user].length}</td>
                                    <td>{$arr[user].replacement_cost}</td>
                                    <td>{$arr[user].rating}</td>
                                    <td>{$arr[user].special_features}</td>
                                    <td>{$arr[user].last_update}</td>


                                    <td><a href="edit/{$arr[user].film_id}" >Edit</a></td>
                                    <td><a onclick="return confirm(\'are you sure?\')"  href="removeOne/{$arr[user].film_id}" >Delete</a></td>
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

