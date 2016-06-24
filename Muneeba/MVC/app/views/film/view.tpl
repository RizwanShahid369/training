{* Smarty *}

<a href="film/insert">insert</a>
<form action="film/search" method="post">
    Search Full Name: <input type="text" name="Film[title]"><br>
    <input type="submit" name="search" value="search">
</form>

<table>
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


            <td><a href="film/edit/{$arr[user].film_id}" >Edit</a></td>
            <td><a onclick="return confirm(\'are you sure?\')"  href="/film/removeOne/{$arr[user].film_id}" >Delete</a></td>
        </tr>
        {assign var='i' value=$i+1}
    {/section}
</table>


