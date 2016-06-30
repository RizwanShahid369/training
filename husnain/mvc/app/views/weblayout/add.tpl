
{*{extends file="../layouts/layout.tpl"}*}
{extends file="index.html"}

{block name=title} student add page {/block}
{block name=body}

    <h3>student add page </h3>
    <form method="post" action="">
        <table>
            <tr>
                <td>Fist Name:</td>
                <td> <input type="text" name="fname"></td>
            </tr>
            <tr>
                <td> Last Name:</td>
                <td> <input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"> </td>
            </tr>

        </table>

        <a href="listAll">View All</a>


{/block}