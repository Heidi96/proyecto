<?php
    include("../modelo/conexion.php");
    include("../vista/Vistabusquedaempleado.php");
    if(isset($_GET['Buscar'])){
        $ci=$_GET['ci'];
        include("../modelo/cargo.php");
        $ca=new cargo("","");
        include("../modelo/empleado.php");
        $emp=new empleado("","","","","","","","","","");
        $res=$emp->buscarempleado2($ci);

        while($r=mysqli_fetch_array($res)){
            ?>
            <tr align="center" valign="middle">
                <td><?php echo $r['cargo'];?></td>
                <td><?php echo $r['nombre_e'].' '.$r['paterno_e'].' '.$r['materno_e'];?></td>
                <td><?php echo $r['carnet_e'];?></td>
                <td><?php echo $r['telefono_e'];?></td>
                <td><?php echo $r['direccion_e'];?></td>
                <td><a href='editaempleado.php?cod=<?php echo $r[0];?>' class="btn btn-success">
                <i class="bi bi-eraser"></i></a></td>
                    
                <td><a href='eliminaempleado.php?cid=<?php echo $r[0];?>' class="btn btn-danger">
                <i class="bi bi-trash"></i></a></td>
            </tr>
            <?php

        }    
    }
?>
    </table>
    <center><h2><a href="listaempleado.php">IR PRINCIPAL</a></h2></center>
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