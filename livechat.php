
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welfare - Live Chat</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container clearfix">
   
   
    <div class="chat">
      <div class="chat-header clearfix">
        <!-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar" /> -->
       
        <div class="chat-about">
          <div class="chat-with">Live Chat</div>
<!--           <div class="chat-num-messages">Disaster-name</div> -->
        </div>
        <i class="fa fa-star"></i>
      </div> <!-- end chat-header -->
     
      <div class="chat-history">
        <ul>
          <?php
          $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hack";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
                $sql="SELECT * from message where uname <> 1";
                $result=$conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row=$result->fetch_assoc())
                    {
                      echo "<li class='clearfix'><div class='message-data align-right'><span class=''message-data-time' >".$row["mtime"]."</span> &nbsp; &nbsp;<span class='message-data-name' >".$row["uname"]."</span><i class='fa fa-circle me'></i></div><div class='message other-message float-right'>".$row["msg"]."</div></li>";
                    }
                }
          $conn->close();
          ?>
          <?php
          $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hack";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
                $sql="SELECT * from message where uname=1";
                $result=$conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row=$result->fetch_assoc())
                    {
                      echo "<li><div class='message-data'><span class=''message-data-name' >".$row["uname"]."</span> &nbsp; &nbsp;<span class='message-data-time' >".$row["mtime"]."</span></div><div class='message my-message'>".$row["msg"]."</div></li>";
                    }
                }
           $conn->close();
          ?>
        </ul>
      </div> <!-- end chat-history -->
     
      <div class="chat-message clearfix">
        <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
               
        <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
        <i class="fa fa-file-image-o"></i>
       
        <button>Send</button>

      </div> <!-- end chat-message -->
     
    </div> <!-- end chat -->
   
  </div> <!-- end container -->

<script id="message-template" type="text/x-handlebars-template">
<!--   <?php
    $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hack";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
                $sql="INSERT INTO message(mtime,mcity,mdis,uname,msg)values(time(),'Mumbai','EARTHQUAKE','Hello there')";

                $result=$conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row=$result->fetch_assoc())
                    {
                      echo "<li><div class='message-data'><span class=''message-data-name' >".$row["uname"]."</span> &nbsp; &nbsp;<span class='message-data-time' >".$row["mtime"]."</span></div><div class='message my-message'>".$row["msg"]."</div></li>";
                    }
                }
           $conn->close();
  ?> -->
  <li class="clearfix">
    <div class="message-data align-right">
      <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
      <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
    </div>
    <div class="message other-message float-right">
      {{messageOutput}}
    </div>
  </li>
</script>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script><script  src="./script.js"></script>

</body>
</html>