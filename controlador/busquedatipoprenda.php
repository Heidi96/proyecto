<?php
    include("../modelo/conexion.php");
    include("../vista/Vistabusquedatipoprenda.php");
    if(isset($_GET['Buscar'])){
        $ti=$_GET['tipo'];
        include("../modelo/tipoprenda.php");
        $tipo=new tipoprenda("","");
        $res=$tipo->buscartipoprenda($ti);
        while($r=mysqli_fetch_array($res)){
            ?>
            <tr align="center" valign="middle">
                <td><?php echo $r['tipo'];?></td>

                <td><a href='editatipoprenda.php?cod=<?php echo $r[0];?>' class="btn btn-success">
                <i class="bi bi-eraser"></i></a></td>
                    
                <td><a href='eliminatipoprenda.php?cid=<?php echo $r[0];?>' class="btn btn-danger">
                <i class="bi bi-trash"></i></a></td>
            </tr>
            <?php

        }    
    }
?>
    </table>
    <center><h2><a href="listatipoprenda.php">IR PRINCIPAL</a></h2></center>
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