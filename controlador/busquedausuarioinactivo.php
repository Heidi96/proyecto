<?php
    include("../vista/Vistabusquedausuarioinactivo.php");
    if(isset($_GET['Buscar'])){
        $ci=$_GET['ci'];
        include("../modelo/usuario.php");
        $usu=new usuario("","","","","","");
        $res=$usu->buscarusuarioinactivo($ci);
        while($r=mysqli_fetch_array($res)){
            ?>
            <tr align="center" valign="middle">
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

                <td><a href='editausuarioinactivo.php?cod=<?php echo $r[0];?>' class="btn btn-success">Activar</a></td>

                <td><a href='eliminausuarioinactivo.php?cid=<?php echo $r[0];?>' class="btn btn-danger">Eliminar<i class="glyphicon glyphicon-edit"></i></a></td>
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