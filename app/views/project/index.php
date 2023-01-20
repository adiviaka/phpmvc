<form action="project/index" method="GET">
<label for="fname">Search:</label><br>
<input type="text" name="Search" value=""><br><br>
<input type="submit" value="Submit">
</form>

<br>

<?php foreach ($data['table'] as $table) : ?>
    <li><?= $table['title']; ?></li>
    <li><?= $table['jobdesk']; ?></li>
    <br>
<?php endforeach; ?>