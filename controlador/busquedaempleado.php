<?php
    include("../vista/Vistabusquedaempleado.php");
    if(isset($_GET['Buscar'])){
        $ci=$_GET['ci'];
        include("../modelo/empleado.php");
        $emp=new empleado("","","","","","","","","","");
        $res=$emp->buscarempleado1($ci);

        while($r=mysqli_fetch_array($res)){
            ?>
            <tr align="center" valign="middle">
                <td><?php echo $r['nombre_e'].' '.$r['paterno_e'].' '.$r['materno_e'];?></td>
                <td><?php echo $r['carnet_e'];?></td>
                <td><a href='editaempleado.php?cod=<?php echo $r[0];?>' class="btn btn-success">
                    <i class="glyphicon glyphicon-edit"></i></a></td>
                    
                <td><a href='eliminaempleado.php?cid=<?php echo $r[0];?>' class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i></a></td>
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

<?php
    include("pie.php");
?>
</body>
</html>