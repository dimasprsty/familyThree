<?php
    //Ini untuk koneksi Db
    $user_name = "root";
    $password  = "";
    $database  = "weddingdp";
    $host_name = "localhost";
    
    $connect_db =   mysql_connect($host_name, $user_name, $password);
    $find_db    =   mysql_select_db($database);
    //Akhir koneksi Db

    //--- membaca data ----
    $sql    =   "select * from guestbook order by No desc";
    $hs     =   mysql_query($sql);

    $result = array();
 
    //while($row = mysql_fetch_array($hs)){
    //    array_push($result, array('SendingName' => $row[1], 'FromColleague' => $row[2], 'WhisesMessage' => $row[3]));
    //}
    //echo json_encode(array("result" => $result));
    // $wishes = "";

    
    
     
    $wishes = "<div class='all-wishes'>";
    $wishes .= "<div class='quotes'></div>";
    $wishes .= "<div id='wishes-box' class='wishes-box'>";
    while($rs=mysql_fetch_array($hs)) {
        $wishes .= "<div class='wishes'>";
        $wishes .= "<div class='title'>";
        $wishes .= "<h4>".$rs['SendingName']."</h4>";
        $wishes .= "<span class='wishes-from'> - ".$rs['FromColleague']."</span>";
        $wishes .= "</div>";
        $wishes .= "<p>".$rs['WhisesMessage']."</p>";
        $wishes .= "</div>";
    }
    $wishes .= "</div>";
    $wishes .= "</div>";

    echo $wishes;
    // $table = '<div style=" background-color:#141414;"><table width="100%" border="0" cellpadding="0">
    // <tr>
    // <td bgcolor="#890025">Name</td>
    // <td bgcolor="#890025">From</td>
    // <td bgcolor="#890025">Whises Message</td>
    // </tr>';

    // while($rs=mysql_fetch_array($hs)){
    //     $table .= '<tr>
    //     <td bgcolor="white">'.$rs['SendingName'].'</td>
    //     <td bgcolor="white">'.$rs['FromColleague'].'</td>
    //     <td bgcolor="white">'.$rs['WhisesMessage'].'</td>
    //     </tr>';
    // }
    // $table .= '</table></div>';

    // echo $table;
?>