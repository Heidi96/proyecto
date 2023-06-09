<?php
    include("../vista/Vistabusquedacargo.php");
    if(isset($_GET['Buscar'])){
        $ca=$_GET['cargo'];
        include("../modelo/cargo.php");
        $car=new cargo("","");
        $res=$car->buscarcargo($ca);
        while($r=mysqli_fetch_array($res)){
            ?>
            <tr align="center" valign="middle">
                <td><?php echo $r['cargo'];?></td>

                <td><a href='editacargo.php?cod=<?php echo $r[0];?>' class="btn btn-success">
                    <i class="glyphicon glyphicon-edit"></i></a></td>
                    
                <td><a href='eliminacargo.php?cid=<?php echo $r[0];?>' class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i></a></td>
            </tr>
            <?php

        }    
    }
?>
    </table>
    <center><h2><a href="listacargo.php">IR PRINCIPAL</a></h2></center>
    <div>
        </form>
    </div>
    </div>
    <div class="col-1"></div>
    </div>
    </div>
    <br><br>

<?php
    include("pie.php");
?>
</body>
</html>