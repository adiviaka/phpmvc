<h2>    Edit Data</h2>

<?php 
// $title = $_GET['title'];
$project = current (array_filter ($_SESSION['database']['project'],function($project){
    return $project['title'] == $_GET['title'];
}));
?>

<form action="<?= BASEURL?>/project/editProject?title=<?= $project['title'];?>" method="POST">
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" value="<?= $project['title'];?>"><br>
  <label for="jobdesk">Jobdesk:</label><br>
  <input type="text" id="jobdesk" name="jobdesk" value="<?= $project['jobdesk'];?>"><br><br>
  <input type="submit" value="Submit">
</form> 