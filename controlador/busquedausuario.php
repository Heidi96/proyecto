<?php
    include("../modelo/conexion.php");
    include("../vista/Vistabusquedausuario.php");
    if(isset($_GET['Buscar'])){
        $ci=$_GET['ci'];

        include("../modelo/empleado.php");
        $emp=new empleado("","","","","","","","","","");

        include("../modelo/usuario.php");
        $usu=new usuario("","","","","","");
        $res=$usu->buscarusuario2($ci);
        while($r=mysqli_fetch_array($res)){
            ?>
            <tr align="center" valign="middle">
                <td><?php echo $r['nombre_e'].' '.$r['paterno_e'].' '.$r['materno_e'];?></td>
                <td><?php echo $r['usuario'];?></td>
                
                <td>
                    <?php
                        if($r['nivel']==1){
                            echo 'Administrador';
                        }else{
                            if($r['nivel']==2){
                                echo 'Secretario';
                            }else{
                                echo 'Vendedor';
                            }
                        }
                    ?>
                </td>
                <td><a href='editausuario.php?cod=<?php echo $r[0];?>' class="btn btn-success">
                <i class="bi bi-eraser"></i></a></td>
                    
                <td><a href='eliminausuario.php?cid=<?php echo $r[0];?>' class="btn btn-danger">
                <i class="bi bi-trash"></i></a></td>
            </tr>
            <?php

        }    
    }
?>
    </table>
    <center><h2><a href="listausuario.php">IR PRINCIPAL</a></h2></center>
    <div>
        </form>
    </div>
    </div>
    <div class="col-1"></div>
    </div>
    </div>

</body>
</html>