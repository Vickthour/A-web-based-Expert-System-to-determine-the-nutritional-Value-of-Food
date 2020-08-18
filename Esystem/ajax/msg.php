     
    <?php 
    session_start();
     include('../conn.php');
      

                        $sen = $_SESSION['name'];
                        $rec = $_SESSION['rece'];
                        $i = 0;
                    			    $query = $con->query("SELECT * FROM msg WHERE user='$sen' && user2='$rec' || user='$rec' && user2='$sen' order by 1 desc ");
                                    $rowCount = $query->rowCount();
                                    $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
								    if($rowCount > 0){
                                    foreach($fetch as $data){
                                        $id = $data['id'];
                                        $u = ucwords($data['user']);
                                        $m = $data['msg'];
                                        $i++;
                                        ?>

                                <div class="col-sm-2">
                                    <img style="margin-top:5px;" src="img/user.png" class="img-circle" alt="image" height="65" width="65">
                                </div>
                                <a style="text-decoration:none; color:#222;" id="<?php echo $i ?>" value="<?php echo $id ?>">
                                <div class="col-sm-10 details" style="text-align:; padding-left:30px">
                                   <h5 title=""><?php echo $u ?></h5> 
                                    <p><?php echo $m ?></p><hr>
                                </div>
                                       </a>

                                           
                                        <script>	
                                    $("#<?php echo $i ?>").click(function(){
                                        var id = $("#<?php echo $i ?>").attr("value");
				                        if(confirm('Do you want to delete ?')==true){
                                            $.get("ajax/del.php",{id:id},function(data){
                                                //$("#res").html(data);
                                            });
                                        }
                                    });
                            </script>

                                




<?php } }else{ ?>
   <h3 style="color:red;">No Messages...</3>
 




<?php } ?>
                           