
{extends file="../layouts/layout.tpl"}
{*{extends file="../weblayout/index.tpl"}*}

{block name=title} student add page {/block}
{block name=body}
    <h3>student add page </h3>
    <div class="col-lg-6">

        <form role="form" method="post" action="">

            <div class="form-group">
                <label>Fist Name</label>
                <input class="form-control" type="text" name="student[first_name]" placeholder="First Name">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input class="form-control" type="text" name="student[last_name]" placeholder="Last Name">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="student[address]" placeholder="Address">
            </div>

            <div>
                <input type="submit" class="btn btn-default" value="Submit">
            </div>
        </form>

        <a href="listAll">View All</a>
    </div>
{/block}

