<?php

include ('connect.php');

echo "<style type='text/css'>
    table { 
        background-color:#eeeeee;
        border-collapse:collapse; 
    }
table th { 
    background-color:#fab5ec;
    color:black;
}
table td, table th {
     
     border:1px solid #000; }
</style>";

$sql = "SELECT * FROM test2 WHERE svgid = :svgid";
$svgid = $_REQUEST["q"];
$statement = $conn->prepare($sql);
$statement->bindParam(':svgid', $svgid, PDO::PARAM_STR);
$statement->fetchAll(PDO::FETCH_ASSOC);
$statement->execute([':svgid' => $svgid]);

if($statement->rowCount() != 0) {
    ?>
    <table class="table" >
       <tr COLSPAN=2 >
       <th> Location </th>
                <th> Name </th>
                <th> IP </th>
                <th> Switch Port </th>
                <th> Floor Port </th>
                <th> Purchase Date </th>
                <th> Serial Number </th>
                <th> Managed By </th>
                <th> Notes </th>
                <th> Delete </th>
       </tr>
     <?php     
     while($row=$statement->fetch()) 
     {
        echo "<tr>".
          "<td>".$row['locationid']."</td>".
          "<td>".$row['nameid']."</td>".
          "<td>".$row['ip']."</td>".
          "<td>".$row['floorport']."</td>".
          "<td>".$row['switchport']."</td>".
          "<td>".$row['purchasedate']."</td>".
          "<td>".$row['serialid']."</td>".
          "<td>".$row['ownerid']."</td>".
          "<td>".$row['notes']."</td>"
          //"<td>".$row['randomkey']."</td>"
          

          ?>
          <td><a href="delete.php?id=<?php echo $row['randomkey']; ?>">Delete</a></td>

          <?php
        "</tr>";
     }
    
    }
    else
    //{
    //     echo 'No results for ';
    //     echo $svgid;
    //}
    $conn=null;
    ?>
        </table>

