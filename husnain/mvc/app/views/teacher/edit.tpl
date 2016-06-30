{extends file="../layouts/layout.tpl"}

{block name=title} teacher edit page {/block}
{block name=body}
    <h3>Teacher Edit page </h3>
    <div class="col-lg-6">
    <form role="form" method="post" action="">

    {foreach from=$data key=k item=i}
        <div class="form-group">
            <label>Teacher Name</label>
            <input class="form-control" type="text" name="teacher[name]" value= {$data[0]['name']}>
        </div>
        <div class="form-group">
            Designation
            <input class="form-control" type="text" name="teacher[designation]" value= {$data[0]['designation']}>
        </div>
        <div>
            <input class="btn btn-default" type="submit" value="Submit">
        </div>
    {/foreach}
    <div>
        <a href="listAll">View All</a>
    </div>
{/block}