<?php
    include("../modelo/conexion.php");
    include("../vista/Vistabusquedatipocredito.php");
    if(isset($_GET['Buscar'])){
        $ti=$_GET['tipoc'];
        include("../modelo/tipocredito.php");
        $tipo=new tipocredito("","");
        $res=$tipo->buscartipocredito($ti);
        while($r=mysqli_fetch_array($res)){
            ?>
            <tr align="center" valign="middle">
                <td><?php echo $r['tipoc'];?></td>

                <td><a href='editatipocredito.php?cod=<?php echo $r[0];?>' class="btn btn-success">
                <i class="bi bi-eraser"></i></a></td>
                    
                <td><a href='eliminatipocredito.php?cid=<?php echo $r[0];?>' class="btn btn-danger">
                <i class="bi bi-trash"></i></a></td>
            </tr>
            <?php

        }    
    }
?>
    </table>
    <center><h2><a href="listatipocredito.php">IR PRINCIPAL</a></h2></center>
    <div>
        </form>
    </div>
    </div>
    <div class="col-1"></div>
    </div>
    </div>
    <br><br>
</body>
</html>