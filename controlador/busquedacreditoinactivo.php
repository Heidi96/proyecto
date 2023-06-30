<?php
        include("../modelo/conexion.php");
        include("../vista/Vistabusquedacredito.php");
        if(isset($_GET['Buscar'])){
            include("../modelo/cliente.php");
            $cli=new cliente("","","","","","","","","");
            $tipo=$_GET['tipo'];
            include("../modelo/tipoprenda.php");
            $tipo1=new tipoprenda("","");
            //$res=$tipo->buscartipoprenda($marca);

            include("../modelo/credito.php");
            $cre=new credito("","","","","","","","","");
            $res=$cre->buscarcreditoinactivo($tipo);

            while($r=mysqli_fetch_array($res)){
                ?>
                <tr align="center" valign="middle">
                    <td><?php echo $r['fechainicio'];?></td>
                    <td><?php echo $r['fechafin'];?></td>  
                    <td><?php echo $r['tipoc'];?></td>
                    <td><?php echo $r['monto'];?></td>
                    <td><?php echo $r['tipoi'];?></td>
                    <td><?php echo $r['totalcredito'];?></td>
                    <td><?php echo $r['nombre_cliente'];?></td>
                    <td><?php echo $r['tipo'];?></td>
                    <td><?php echo $r['marca'];?></td>
                    <td><?php echo $r['color'];?></td>
                    <td><?php echo $r['detalle'];?></td>  
                    
                    
                    <td><?php echo $r['estadoc'];?></td>

                    <td><a href='editacreditoinactivo.php?cod=<?php echo $r[0];?>' class="btn btn-success">Activar</a></td>
                    <i class="bi bi-eraser"></i></a></td>
                        
                    <td><a href='eliminacreditoinactivo.php?cid=<?php echo $r[0];?>' class="btn btn-danger">
                    <i class="bi bi-trash"></i></a></td>
                </tr>
                <?php

            }    
        }
    ?>
    </table>
    <center><h2><a href="listacredito.php">IR PRINCIPAL</a></h2></center>
    <div>
        </form>
    </div>
    </div>
    <div class="col-1"></div>
    </div>
    </div>

</body>
</html>