<?php

 $login = $_POST["login"];
 $password = $_POST["password"];

$users = [
   array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "User 1"),
   array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "User 2"),
   array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "User 3"),
 ];

//If login exists it will return the id else it will return -1
function userExists($login, $password, $users)
{
  foreach ($users as &$elem) 
  {
    if ($elem["login"] == $login && $elem["password"] == $password )
      {
        return $elem["id"];}
      }

    return -1; 
}
?>

<!Doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="twitter.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Impossible Octopus Fitness</title>
  <link rel="shortcut icon" href="https://maxcdn.icons8.com/wp-content/uploads/2014/01/octopus-128.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<header id="temp">
  <div class = "newtitletxt">
    <p><h1>Impossible Octopus Fitness Club</h1></p>
  </div>
  <div class="headercontainer flex-item">
    <div id="mobile_view_header">
      <button id="nav-button">&#9776;</button>
        <h1><img id="logo" src="https://maxcdn.icons8.com/wp-content/uploads/2014/01/octopus-128.png" alt="Impossible Octopus Fitness Club Logo"> <span class="visuallyhidden">Impossible Octopus Fitness</span> </h1>
    </div>
    <nav>
    <nav class="nav-background">
      <ul class="centernav flex-item">
        <li><a href="index.html">Home</a></li>
        <li><a href="mystatuses.html">My statuses</a></li>
        <li><a href="allusers.html">All users</a></li>
      </ul>
      <ul>
      <?php 
      echo '<br> Your rot13’d login is: ' . str_rot13 ( $login );
      echo '<br>The length of your login is: ' . strlen($login);;
       ?>
       </ul>
      <ul class="toprightmenu flex-item">
        <li id="firstitem"><a href="#">
              <?php

      if (empty($login) || empty($password)) 
        { 
          echo "Hello, there!";
        }  
      else  { $exists = userExists($login, $password, $users);
        {

        }  
        if ($exists < 0) 
          {
            echo nl2br("Hello, there!\n");?>   </a></li>
            <?php
            echo "<font color = 'red' > Invalid credentials </font>";


          } 
        else 
          {
            echo '<br>Hello ' . $users[$exist -1]["full_name"] . '!';
            
          }


         }  


?>

        </a></li>
        <li><a href="#">Logout</a></li>
      </ul>

    </nav>
  </div>
</header>
<!-- End Header -->
  <!-- Content Overwrap-->
  <div class="outercontainer flex-item">
    <div class="contentoverwrap flex-item">
      <!--Content -->
      <div class="statuscontentcontainer flex-item">
        <button class="button postlink flex-item" id="post_button">Post a status!</button>
        <div class="poststatus" id="post_form">
          <form method="get" id="post_status">
            <label for="textarea_0">What is your status?</label>
            <textarea name="status" id="textarea_0"></textarea>
            <div class="locationdiv flex-item">
              <div>
                <label for="geolocation">Include Location</label>
                <input class="location" type="checkbox" id="geolocation" name="location" value="true"><span id="geolocation_text"></span>
              </div>
              <input id="submit_button" type="submit" value="Post">
            </div>
          </form>
        </div>
        <!-- display post status field for users without JavaScript -->
        <noscript>
          <div class="statuscontentcontainer flex-item">
            <div class="poststatus noscriptPost">
              <form method="get">
                <label for="textarea_1">What is your status?</label>
                <textarea name="status" id="textarea_1"></textarea>
                <div class="locationdiv flex-item">
                  <input type="submit" value="Post">
                </div>
              </form>
            </div>
          </div>
        </noscript>
        <div>
          <section class="statuscontent">
            <img src="http://s19.postimg.org/t38mrbb0f/gus.jpg" alt="Gus image" class="userimage">
            <h2 class="username">Gus</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Lorem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra.</p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="0">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_0">
              <form method="get">
                <label for="responsearea_0">Reply to this post:</label>
                <textarea name="status" id="responsearea_0"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_0">Add Emoji</label>
                    <input class="location" id="emoji_0" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://s19.postimg.org/br8a5vhj3/marine.jpg " alt="Marine image" class="userimage">
            <h2 class="username">Marine</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Lorem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus cidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis.</p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="1">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_1">
              <form method="get">
                <label for="responsearea_1">Reply to this post:</label>
                <textarea name="status" id="responsearea_1"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_1">Add Emoji</label>
                    <input class="location" id="emoji_1" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://s19.postimg.org/c1b7bh6rj/bilal.jpg " alt="Bilal image" class="userimage">
            <h2 class="username">Bilal</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Lorem ipsum netus aptent enim justo tincidunt proin.</p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="2">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_2">
              <form method="get">
                <label for="responsearea_2">Reply to this post:</label>
                <textarea name="status" id="responsearea_2"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_2">Add Emoji</label>
                    <input class="location" id="emoji_2" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="https://holbertonschool.s3.amazonaws.com/quotes/photos/000/000/012/larger/bennett2.jpg?1449535775" alt="Bennett image" class="userimage">
            <h2 class="username">Bennett</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Lorem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis Lorem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla tor enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="3">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_3">
              <form method="get">
                <label for="responsearea_3">Reply to this post:</label>
                <textarea name="status" id="responsearea_3"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_3">Add Emoji</label>
                    <input class="location" id="emoji_3" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User image" class="userimage">
            <h2 class="username">User</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Lorem ipsum netus aptent enim justo Lorem ipsum netus aptent enim odio euismod eu ac volutpat nisl quis. orem ipsum netus a justo tincidunttis, lobortis, lobortis
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="4">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_4">
              <form method="get">
                <label for="responsearea_4">Reply to this post:</label>
                <textarea name="status" id="responsearea_4"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_4">Add Emoji</label>
                    <input class="location" id="emoji_4" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User image" class="userimage">
            <h2 class="username">User</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Lorem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis Lorem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla tor enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="5">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_5">
              <form method="get">
                <label for="responsearea_5">Reply to this post:</label>
                <textarea name="status" id="responsearea_5"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_5">Add Emoji</label>
                    <input class="location" id="emoji_5" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User image" class="userimage">
            <h2 class="username">User</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Lorem ipsum netus aptent enim m odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla tor enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="6">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_6">
              <form method="get">
                <label for="responsearea_6">Reply to this post:</label>
                <textarea name="status" id="responsearea_6"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_6">Add Emoji</label>
                    <input class="location" id="emoji_6" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User image" class="userimage">
            <h2 class="username">User</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Lorem ipsum netus aptent enim justo tincidunt proin, dio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis Lorem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla tor enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="7">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_7">
              <form method="get">
                <label for="responsearea_7">Reply to this post:</label>
                <textarea name="status" id="responsearea_7"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_7">Add Emoji</label>
                    <input class="location" id="emoji_7" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User image" class="userimage">
            <h2 class="username">User</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Lorem ipsum netus aptea placerat erat mattis, lobortis Lorem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla tor enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="8">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_8">
              <form method="get">
                <label for="responsearea_8">Reply to this post:</label>
                <textarea name="status" id="responsearea_8"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_8">Add Emoji</label>
                    <input class="location" id="emoji_8" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User image" class="userimage">
            <h2 class="username">User</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">mod eu ac volut erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla tor enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis orci pharetra habitant scelerisque donec etiam odio euismod eu ac volutpat nisl quis. orem ipsum netus aptent enim justo tincidunt proin, auctor dapibus fringilla torquent magna placerat erat mattis, lobortis
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="9">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_9">
              <form method="get">
                <label for="responsearea_9">Reply to this post:</label>
                <textarea name="status" id="responsearea_9"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_9">Add Emoji</label>
                    <input class="location" id="emoji_9" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
        </div> <!-- end status post section -->
        <div id="extra_statuses">
        </div>
        <!--Data will be inserted in its according place, replacing the brackets.-->
        <script id="user-template" type="text/x-handlebars-template">
          <section class="statuscontent">
            <img src="{{image_path}}" alt="User image" class="userimage">
            <h2 class="username">{{user_name}}</h2>
            <p class="date">{{post_date}}</p>
            <p class="usertxt">{{post_text}}
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="{{data_tag}}">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_{{data_tag}}">
              <form method="get">
                <label for="responsearea_{{data_tag}}">Reply to this post:</label>
                <textarea name="status" id="responsearea_{{data_tag}}"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_{{data_tag}}">Add Emoji</label>
                    <input class="location" id="emoji_{{data_tag}}" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
        </script>
        <!-- New statuses are displayed here upon AJAX call.-->
        <div id="content-placeholder"></div>
        <button type="button" class="button call_to_action" id="extra_statuses_button">See more statuses</button>
        <!-- <a id="image_table" href="#">All images on this page</a> -->
      </div>
      <!--End Content Overwrap-->
      <!-- Aside -->
      <div>
        <aside class="flex-item">
          <section class="featureduser">
            <div>
              <img src="http://d.gr-assets.com/authors/1429114964p5/9810.jpg" alt="Albert image" class="asideimage">
              <h2 class="featuredusername">Albert</h2>
              <p class="asidetxt">Albert Einstein was a German-born theoretical physicist. He developed the general theory of relativity, one of the two pillars of modern physics. Einstein's work is also known for its influence on the philosophy of science. Actively involved on this site from the spirit realm.
            </div>
          </section>
          <section class="featureduser" id="bottomfeature">
            <div>
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Feynman_at_Los_Alamos.jpg/220px-Feynman_at_Los_Alamos.jpg" alt="Robert image" class="asideimage">
              <h2 class="featuredusername">Robert</h2>
              <p class="asidetxt">Robert was an American theoretical physicist known for his work in the path integral formulation of quantum mechanics, the theory of quantum electrodynamics, and the physics of the superfluidity of supercooled liquid helium, as well as in particle physics for which he proposed the parton model. For his contributions to the development of quantum electrodynamics, Feynman, jointly with Julian Schwinger and Sin-Itiro Tomonaga, received the Nobel Prize in Physics in 1965.
            </div>
          </section>
        </aside>
      </div>
      <!-- End Aside -->
    </div>
    <!-- End Content Overwrap -->
  </div>
  <!-- End Outermost container -->
  <!-- <div class="beta">
    <p>Welcome! Please bear in mind that this application is in beta.</p>
  </div> -->
  <footer>
    <div class="footercontent flex-item">
      <ul class="flex-item">
        <li><a href="index.html">Home</a></li>
        <li><a href="mystatuses.html">My statuses</a></li>
        <li><a href="allusers.html">All users</a></li>
        <li><a href="#">Edit my profile</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
      <div>
        <p class="fa fa-twitter-square"></p>
        <p class="fa fa-facebook-square"></p>
        <p class="fa fa-github-square"></p>
        <p class="fa fa-linkedin-square"></p>
        <p class="fa fa-youtube-square"></p>
      </div>
    </div>
  </footer>
  <!-- <script type="text/javascript" src="all_images_data.js" defer></script> -->
  <script type="text/javascript" src="/node_modules/handlebars/dist/handlebars.min.js" defer></script>
  <script type="text/javascript" src="ajax.js" defer></script>
  <script type="text/javascript" src="post_a_status.js" defer></script>
  <script type="text/javascript" src="sticky_smart_header.js" defer></script>
  <script type="text/javascript" src="geolocation.js" defer></script>
  <script type="text/javascript" src="weather.js" defer></script>
  <script type="text/javascript" src="load_more.js" defer></script>
  <script type="text/javascript" src="reply.js" defer></script>
  <script type="text/javascript" src="toggle.js" defer></script>
  <script type="text/javascript" src="geolocation_progressive_enhancement.js" defer></script>
</body>
</html>
