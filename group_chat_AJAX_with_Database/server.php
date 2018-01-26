<?php

  // value of last displayed chat id
  $data =$_REQUEST;
  $last_displayed_chat_id = $data['last_displayed_chat_id'];

  //connecte mysql server
  $con = mysqli_connecct("localhost" , "root" ,"","group_chat");

  $select = "SELECT *
                FORM chats
                WHERE chat_id > '".$last_displayed_chat_id."'
                ";
  $result = mysqli_query($con , $select);

  $arr = array();
  $row_count = mysqli_num_rows( $result);

  if( $row_count  > 0){
    while ($row = mysqli_fetch_array( $result)) {
      array_push($arr , $row);
    }
  }

  //close the MYSQL Connection
  mysqli_close( $con);

  //Return the response as JSON
  echo json_encode($arr);

 ?>
