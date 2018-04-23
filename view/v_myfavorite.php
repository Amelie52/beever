<html>
<head>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beever | My favorite</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/knacss.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
</head>
<body>

  <section class="sign_in"> 
  <h1 class="txtcenter"><a href="../controler/c_index.php" title="home">Beever</a></h1>
  <p><a href="../controler/c_index.php"><button>Back to home</button></a></p>

    <div class="container">
     
        <div class="grid-2">
          <div class="txtleft reward_title"><p>List of my favorite projects :</p><br></div>
           
        </div>
      
      <div class="grid-4 reward_choice"> 
     
        <?php foreach ($myfav as $myfav): ?>
          <div class="block_sign_in txtcenter"> 
              <p><a href="c_project.php?name=<?php echo $myfav['proj_name_']; ?>"><span class="txtblue"><?php echo $myfav['proj_name_']; ?></span></a></p>
              <img src="../projects/upload/<?php echo $myfav['proj_photo']; ?>" alt="project photo">
              <a href="../model/m_del_fav.php?idf=<?php echo $myfav['fav_id']; ?>"><button>Delete</button></a>
          </div>
        <?php endforeach; ?>
      </div>

      <p><?php if(empty($myfav))  echo "You haven't favorite projects yet !" ?></p>
      
    </div>
  </section>

</body>
</html>