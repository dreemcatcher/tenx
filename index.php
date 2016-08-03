<?php
include 'h.php';
?>
 <body>
 <table width=100%  cellspacing="0">
 <tr>
 <td width="15%"></td> <td width="69%" bgcolor="#CCCCCC"> 
<?php
include 'menu.php';
?>
 </td><td width="15%"></td>
 </tr>
 <tr>
 <td width="15%"></td> <td width="69%">
<?php
include 'cnn/conn.php';
//var_dump($link);
$link->real_query("SELECT * FROM blog where visible=0 ORDER BY id DESC");
$res = $link->use_result();
while ($row = $res->fetch_assoc()) {
    ?>
    <div class="nuspace">&nbsp<br><br></div>
    <div class="shadow">
    <table border='0' align='top' width='100%'>
        <tr>
            <td width='8%'></td>
            <td><H2>
    <?php
    echo $row['Zag'];
    ?>
            </H2>
            </td>
            <td  width='10%'>

            </td>
        </tr>
            <td  colspan='3'><br /> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <?php
    echo "\n";
    echo $row['Zapis'];
    ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td align='center'><br>
    <?php
    echo $row['timestamp'];
    ?>
            </td>
        </tr>
    </table>
    <br></div>
    <?php
}
?>
 </td> <td width="15%"></td>
 </tr>
 </table>
<?php
include 'f.php';
?>