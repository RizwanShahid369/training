{extends file="../layouts/layout.tpl"}

{block name=title} Teacher add page {/block}
{block name=body}
    <h3>Teacher add page </h3>
    <div class="col-lg-6">
        <form role="form" method="post" action="">

            <div class="form-group">
                <label>Teacher Name</label>
                <input class="form-control" type="text" name="teacher[name]" placeholder="Teacher Name">
            </div>
            <div class="form-group">
                <label>Designation</label>
                <input class="form-control" type="text" name="teacher[designation]" placeholder="Designation">
            </div>
            <div>
                <input class="btn btn-default" type="submit" value="Submit">
            </div>

            <div>
                <a href="listAll">View All</a>

            </div>

        </form>
    </div>
{/block}