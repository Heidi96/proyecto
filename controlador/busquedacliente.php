<?php
    include("../vista/Vistabusquedacliente.php");
    if(isset($_GET['Buscar'])){
        $ci=$_GET['ci'];
        include("../modelo/cliente.php");
        $car=new cliente("","","","","","","","","");
        $res=$car->buscarcliente1($ci);
        while($r=mysqli_fetch_array($res)){
            ?>
            <tr align="center" valign="middle">
                <td><?php echo $r['nombre_cliente'];?></td>
                <td><?php echo $r['carnet_cliente'];?></td>
                <td><a href='editacliente.php?cod=<?php echo $r[0];?>' class="btn btn-success">
                    <i class="glyphicon glyphicon-edit"></i></a></td>
                    
                <td><a href='eliminacliente.php?cid=<?php echo $r[0];?>' class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i></a></td>
            </tr>
            <?php

        }    
    }
?>
    </table>
    <center><h2><a href="listacliente.php">IR PRINCIPAL</a></h2></center>
    <div>
        </form>
    </div>
    </div>
    <div class="col-1"></div>
    </div>
    </div>

</body>
</html>