{extends file="../layouts/layout.tpl"}

{block name=title} student add page {/block}
{block name=body}
    <h3>student Edit page </h3>
    <div class="col-lg-6">
        <form role="form" method="post" action="">

            {foreach from=$data key=k item=i}
                <div class="form-group">
                    <label>Fist Name</label>
                    <input type="text" class="form-control" name="student[first_name]" value= {$data[0]['first_name']}>
                </div>
                <div class="form-group">
                    <label> Last Name</label>
                    <input type="text" class="form-control" name="student[last_name]" value= {$data[0]['last_name']}>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="student[address]" value= {$data[0]['address']}>
                </div>
                <div>
                    <input type="submit" class="btn btn-default" value="Submit">
                </div>
            {/foreach}
        </form>

        <a href="listAll">View All</a>
    </div>
{/block}