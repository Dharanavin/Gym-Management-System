   <?php
    $getDays = mysqli_query($con, "select * from schedule_master");
    while ($row = mysqli_fetch_array($getDays)) {
    ?>
       <!--  one -->
       <div class="tab-pane fade" id="<?php echo $row['scheduleDay']; ?>" role="tabpanel" aria-labelledby="nav-home-tab">
           <div class="row">
               <div class="col-12">
                   <div class="tab-wrapper">
                       <?php
                        $getDays = mysqli_query($con, "select * from schedule_master");
                        while ($row = mysqli_fetch_array($getDays)) {
                        ?>
                           <!-- single -->
                           <div class="single-box">
                               <div class="single-caption text-center">
                                   <div class="caption">
                                       <span><?php echo strtoupper($row['scheduleTime']); ?></span>
                                       <h3><?php echo $row['serviceName']; ?></h3>
                                       <p><span>by</span> <?php echo $row['trainerName']; ?></p>
                                   </div>
                               </div>
                           </div>
                       <?php
                        }
                        ?>
                   </div>
               </div>
           </div>
       </div>
   <?php
    }
    ?>