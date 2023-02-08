<h2>    Edit Data</h2>

<form action="<?= BASEURL?>/project/editProject?title=<?= $data['table']['title'];?>" method="POST">
  <input type="hidden" name="id" value="<?= $data['table']['id_project'];?>">
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" value="<?= $data['table']['title'];?>"><br>
  <label for="jobdesk">Jobdesk:</label><br>
  <input type="text" id="jobdesk" name="jobdesk" value="<?= $data['table']['jobdesk'];?>"><br>
  <label for="status">Status:</label><br>
  <input type="text" id="status" name="status" value="<?= $data['table']['status'];?>"><br><br>
  <input type="submit" value="Submit">
</form> 