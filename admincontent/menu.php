<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Night Owl</a>
    </div>
    <ul class="nav navbar-nav">
      <?php if($_GET['link'] == ""){echo '<li class="active"><a href="./">Home</a></li>';}else{echo '<li><a href="./">Home</a></li>';} ?>
      
      <li class="about"><a href="?link=about">About</a></li>
      <li class="exhibitor"><a href="?link=exhibitor">Exhibitor</a></li>
      <li class="mediaa"><a href="?link=mediaa">Media</a></li>
      <li class="artist"><a href="?link=artist">Artist</a></li>
      <li class="gallery"><a href="?link=gallery">Gallery</a></li>
      <li class="team"><a href="?link=team">Team</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<script type="text/javascript">
    
    $(document).ready(function(){
        $('.<?php echo $_GET["link"]; ?>').addClass('active');
    });

</script>