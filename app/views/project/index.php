<form action="project/index" method="GET">
<label for="fname">Search:</label><br>
<input type="text" name="Search" value=""><br><br>
<input type="submit" value="Submit">
</form>

<br>

<a href="<?= BASEURL?>/project/add" type = "button" >Add Data</a><br>
<br>

<?php foreach ($data['table'] as $index => $table) : ?>
    <li><?= $table['title']; ?></li>
    <li><?= $table['jobdesk']; ?></li>
    <li><?= $table['status']; ?></li>
    <!-- <br> -->
    <a href="<?= BASEURL?>/project/detail/<?= $table['id_project'];?>" type = "button" >Detail Data</a>
    <a href="<?= BASEURL?>/project/edit/<?= $table['id_project'];?>" type = "button" style="margin-left: 20px;">Edit Data</a>
    <a href="<?= BASEURL?>/project/delete?index=<?= $table['id_project'];?>" type = "button" style="margin-left: 20px;">Delete Data</a><br>
    <a href="<?= BASEURL?>/project/softdelete?id=<?= $table['id_project'];?>" type = "button" style="margin-left: 20px;">Soft Delete Data</a><br>
    <br>
    <!-- <form action="<?= BASEURL?>/project/edit" method="post">
        <input type="hidden" name="index" value="<?= $index ?>">
    <button type="submit" onclick="">Edit</button>
    </form> -->
<?php endforeach; ?>