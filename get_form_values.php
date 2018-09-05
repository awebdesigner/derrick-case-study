<?php 
    $workPeriods = $_POST;
    $tempWorkPeriods = [];
    foreach($workPeriods['days'] as $workPeriodDay)
        foreach($workPeriods['hrs_from'] as $workPeriodDayhrsFrom)
            foreach($workPeriods['hrs_to'] as $workPeriodDayhrsTo)
            $tempWorkPeriods[$workPeriodDay] = ['start' => $workPeriodDayhrsFrom,'end' => $workPeriodDayhrsTo];

?>
<?php  echo json_encode($tempWorkPeriods); ?>