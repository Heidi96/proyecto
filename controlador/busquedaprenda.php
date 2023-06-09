    <?php
        include("../vista/Vistabusquedaprenda.php");
        if(isset($_GET['Buscar'])){
            $marca=$_GET['marca'];
            include("../modelo/prenda.php");
            $prenda=new prenda("","","","","");
            $res=$prenda->buscarprenda1($marca);

            while($r=mysqli_fetch_array($res)){
                ?>
                <tr align="center" valign="middle">
                    <td><?php echo $r['marca'];?></td>
                    <td><?php echo $r['color'];?></td>
                    <td><?php echo $r['detalle'];?></td>
                    <td><a href='editaprenda.php?cod=<?php echo $r[0];?>' class="btn btn-success">
                        <i class="glyphicon glyphicon-edit"></i></a></td>
                        
                    <td><a href='eliminaprenda.php?cid=<?php echo $r[0];?>' class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i></a></td>
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
    <br><br>

    <?php
        include("pie.php");
    ?>
</body>
</html>