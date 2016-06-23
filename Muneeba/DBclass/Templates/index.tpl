{* Smarty *}
{include file="header.tpl" title="Info"}

User Information:<p>

<h6>Hello {$name}, welcome to Smarty!</h6>

<select name=user>
    {html_options values=$id output=$names selected="5"}
</select>

<table>
    {foreach $names as $name}

            <tr bgcolor="{cycle values="#eeeeee,#dddddd"}">
                <td>{$name}</td>
            </tr>

    {/foreach}
</table>

<table>
    {foreach $users as $user}
            <tr bgcolor="{cycle values="#aaaaaa,#bbbbbb"}">
                <td>{$user.name}</td>
                <td>{$user.phone}</td>
            </tr>
    {/foreach}
</table>
<table>
    {assign var='i' value=1}
    {section name=user loop=$arr}
        <tr>
            <td>{$i}</td>
            <td>{$arr[user].full_name}</td>
            <td>{$arr[user].dob}</td>
            <td>{$arr[user].father_name}</td>
            <td>{$arr[user].class}</td>
            <td>{$arr[user].address}</td>
            <td>{$arr[user].city}</td>
            <td>{$arr[user].school}</td>
        </tr>
        {assign var='i' value=$i+1}
    {/section}
</table>


{include file="footer.tpl"}


