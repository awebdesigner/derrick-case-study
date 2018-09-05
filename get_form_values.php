<pre>
    <?php
        //print_r( $_POST );
    ?>
</pre>

<?php 
    $workPeriods = $_POST;
    $tempWorkPeriods = [];
    foreach($workPeriods['days'] as $workPeriodDay) :
            foreach($workPeriods['hrs_from'] as $workPeriodDayhrsFrom):
                 foreach($workPeriods['hrs_to'] as $workPeriodDayhrsTo):
                    $tempWorkPeriods[$workPeriodDay] = ['start' => $workPeriodDayhrsFrom,'end' => $workPeriodDayhrsTo];
                endforeach;
            endforeach;
        endforeach;
?>
<?php  echo json_encode($tempWorkPeriods); ?>