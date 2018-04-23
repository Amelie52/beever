<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beever | Add a reward</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/knacss.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <section class="sign_in">
    <div class="container_sign_in">
      <h1 class="txtcenter"><a href="../controler/c_index.php">Beever</a></h1>
      <div class="txtcenter block_sign_in"> 
        <p>Add a reward</p><br>
        <form method="POST" action="../model/m_add_reward.php?name=<?php echo $proj_name ?>">

          <input type="number"  name="reward_sum" placeholder="Reward sum" required> <br>
          <input type="text"  name="reward_gift" placeholder="Reward gift" required> <br>
          <input type="date"  name="reward_delivery" placeholder="Date of delivery gift" required> <br>
          <select name="country_limit">
            <option value="Only in the origin country">Only in the origin country</option>
            <option value="Everywhere">Everywhere</option>
          </select>

          <button type="submit" name="submit">Valid</button>
        </form>
        <a href="../controler/c_myproject.php?name=<?php echo $proj_name ?>"><button>Back to my project</button></a>
        <hr>
        <div class="txtleft required_fields">
          <p>*Required fields</p>
        </div>
      </div>
      
    </div>
  </section>
</body>
</html>