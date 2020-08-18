 <div class="row">
                                <?php
     include('../conn.php');
								    $query = $con->query("SELECT * FROM user");
                                    $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
								    foreach($fetch as $data){
                                        $id = $data['id'];
                                        $n = ucwords($data['name']);
                                        $u = $data['email'];
                                ?>
                                <div class="col-sm-2">
                                    <img style="margin-top:5px;" src="../img/user.png" class="img-circle" alt="image" height="65" width="65">
                                </div>
                                  <a style="text-decoration:none; color:#222;" href="msg.php?user=<?php echo $u ?>">
                                <div class="col-sm-10 details" style="text-align:; padding-left:30px">
                                   <h4 title=""><?php echo $n ?></h4> 
                                        <p><?php  $avail = $con->query("SELECT * from user where id='$id'"); echo $avail['status']?></p>
                                    <hr>
                                </div>
                                       </a>
                                 <?php } ?>
                            </div>