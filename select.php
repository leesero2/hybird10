<?php
    
include "00DBConnect.php";
    
  $jb_sql = "SELECT * FROM dit_user LIMIT 5;";
  $jb_result = mysqli_query( $jb_conn, $jb_sql );
  while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
    echo '<p>' . $jb_row[ 'user_id' ] . $jb_row[ 'user_category' ] . $jb_row[ 'user_name' ] . $jb_row[ 'user_email' ] . '</p>';
  }
?>
