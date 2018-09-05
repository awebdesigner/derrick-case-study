<pre>
    <?php
        print_r( $_POST );
    ?>
</pre>

<?php 
    $workPeriods = $_POST;
    $tempWorkPeriods = [];
    foreach($workPeriods['days'] as $workPeriodDay) :
            foreach($workPeriods['hrs_from'] as $workPeriodDayhrsFrom):
                 foreach($workPeriods['hrs_to'] as $workPeriodDayhrsTo):
                    $tempWorkPeriods[$workPeriodDay] = [$workPeriodDayhrsFrom,$workPeriodDayhrsTo];
                endforeach;
            endforeach;
        endforeach;
?>
<pre>
    <?php 
        //print_r( $tempWorkPeriods);
    ?>
</pre>
<?php  echo json_encode($tempWorkPeriods); ?>