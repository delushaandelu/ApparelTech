 <?php
       
                    if(!empty($_GET['poid']) ){
            
                        $id = $_GET['poid'];
                        $sql= "delete * from deliveryrequest where poid = '$id'";
                        $result=mysqli_query($db,$sql);
                            if($result){
                                echo'<script language ="javascript">';
                                echo"swal({  title: 'Driver Deleted!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='viewStatus.php'});";
                                echo'</script>'; }
                } 
?>