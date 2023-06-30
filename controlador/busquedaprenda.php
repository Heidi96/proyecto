    <?php
        include("../modelo/conexion.php");
        include("../vista/Vistabusquedaprenda.php");
        if(isset($_GET['Buscar'])){
            include("../modelo/cliente.php");
            $cli=new cliente("","","","","","","","","");
            $tipo=$_GET['tipo'];
            include("../modelo/tipoprenda.php");
            $tipo1=new tipoprenda("","");
            //$res=$tipo->buscartipoprenda($marca);
            include("../modelo/prenda.php");
            $prenda=new prenda("","","","","","");
            $res=$prenda->buscarprenda2($tipo);

            while($r=mysqli_fetch_array($res)){
                ?>
                <tr align="center" valign="middle">
                    <td><?php echo $r['nombre_cliente'].' '.$r['paterno_cliente'].' '.$r['materno_cliente'];?></td>
                    <td><?php echo $r['carnet_cliente'];?></td>
                    <td><?php echo $r['tipo'];?></td>
                    <td><?php echo $r['marca'];?></td>
                    <td><?php echo $r['color'];?></td>
                    <td><?php echo $r['detalle'];?></td>
                    <td><a href='editaprenda.php?cod=<?php echo $r[0];?>' class="btn btn-success">
                    <i class="bi bi-eraser"></i></a></td>
                        
                    <td><a href='eliminaprenda.php?cid=<?php echo $r[0];?>' class="btn btn-danger">
                    <i class="bi bi-trash"></i></a></td>
                </tr>
                <?php

            }    
        }
    ?>
    </table>
    <center><h2><a href="listaprenda.php">IR PRINCIPAL</a></h2></center>
    <div>
        </form>
    </div>
    </div>
    <div class="col-1"></div>
    </div>
    </div>

</body>
</html>