<?php include 'includes/header.php' ?>
<style>
#only:hover {
font-size: 18px;
background-color:yellow;
font-weight:bolder; }
</style>
<br>
  <div class="jumbotron">
    <h2 class="display-3" style="font-weight:bolder;color:black;background-color:palegreen;font-family:geneva;" >Find your job</h2>
    <form action="index.php" method="GET">
      <select name="category" class="form-control">
        <option value="0">Choose category</option>
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        <?php endforeach ?>
      </select>
      <br>
      <input type="submit" class="btn btn-lg btn-success" value="GO"> 
    </form>
    </div>
    <?php error_reporting(0); ?>
  <br><center><h3 style="font-weight:bolder;background-color:orange; width:300px"><?php echo $title; ?></h3></center>
  <?php foreach($jobs as $job): ?>
  <div class="row marketing">
    <div class="col-md-10">
      <h4 style="font-weight:bolder;color:black"><?php echo $job->job_title; ?></h4>
      <p style="font-weight:larger;color:blue"><?php echo $job->description; ?></p>
    </div>
    <div class="col-md-2">
    	<a href="job.php?id=<?php echo $job->id;?>" class="btn btn-outline-success" id="only" style="color:midnightblue;font-weight:bolder">View</a>
    </div>
  </div>
<?php endforeach ?>
<br><center><h4><?php echo $name; ?></h4><br></center>
<?php include 'includes/footer.php' ?>