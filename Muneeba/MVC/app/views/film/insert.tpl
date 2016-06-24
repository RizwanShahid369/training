{* Smarty *}

<a href="../film/view">back</a>
<form action="../film/add" method="post">

    Title: <input type="text" name="Film[title]"><br>
    Description: <input type="text" name="Film[description]"><br>

    Release Date: <input type="text" name="Film[release_year]"><br>
    Language: <input type="text" name="Film[language_id]"><br>

    Original language: <input type="text" name="Film[original_language_id]"><br>
    Rental Duration: <input type="text" name="Film[rental_duration]"><br>

    Length: <input type="text" name="Film[length]"><br>
    Replacement cost: <input type="text" name="Film[replacement_cost]"><br>

    Rating: <input type="text" name="Film[rating]"><br>
    Special Features: <input type="text" name="Film[special_features]"><br>

    <input type="submit" name="insert" value="insert">
</form>

