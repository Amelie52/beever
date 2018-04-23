<html>
<head>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beever | Choose a reward</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/knacss.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
</head>
<body>

  <section class="sign_in"> 
  <h1 class="txtcenter"><a href="../controler/c_index.php" title="home">Beever</a></h1>
  <p><a href="c_project.php?name=<?php echo $proj_name; ?>"><button>Back to the project</button></a></p>
    <div class="container">
     
        <div class="grid-2">
          <div class="txtleft reward_title"><p>Choose a reward</p><br></div>
        </div>
      
      <div class="grid-4 grid-small-1 reward_choice"> 
        <?php foreach ($rewards as $rewards): ?>
          <div class="block_sign_in"> 
              
              <p><span class="txtblue">Reward sum : </span><?php echo $rewards['reward_sum']; ?></p>
              <p><span class="txtblue">Reward gift : </span><?php echo $rewards['reward_gift']; ?></p>
              <p><span class="txtblue">Reward delivery : </span><?php echo $rewards['reward_delivery']; ?></p>
              <p><span class="txtblue">Reward country limit : </span><?php echo $rewards['reward_country_limit']; ?></p>
              <a href="../model/m_valid_rew.php?proj=<?php echo $proj_name .'&id=' .$rewards['reward_id']; ?>"><button>Choose</button></a>
          </div>
        <?php endforeach; ?>

      </div>


      
    </div>
  </section>

</body>
</html>