<a href="index.php">back</a>
<form action="../update" method="post">
    <input type="hidden" name="film_id" value="{$id}">
    Title: <input type="text" name="Film[title]"><br>
    Description: <input type="text" name="Film[description]"><br>

    Release Date: <input type="text" name="Film[release_year]"><br>
    Language ID: <input type="text" name="Film[language_id]"><br>

    Original language ID : <input type="text" name="Film[original_language_id]"><br>
    Rental Duration: <input type="text" name="Film[rental_duration]"><br>

    Length: <input type="text" name="Film[length]"><br>
    Replacement cost: <input type="text" name="Film[replacement_cost]"><br>

    Rating: <input type="text" name="Film[rating]"><br>
    Special Features: <input type="text" name="Film[special_features]"><br>

    <input type="submit" name="update" value="update">
</form>
