<div id="course-start-date">
	<?php echo "Data:" ?>
	<strong>
		<input type="text" class="inlineDatePicker" name="course[start_date]" size="8" value="<?php echo $course->start_date ?>">
	</strong>
</div>
<div id="course-human-time">
	<?php echo "Data/Horário humana:" ?><br>
	<strong>
		<input type="text" name="course[human_time]" size="30" value="<?php echo $course->human_time ?>">
	</strong>
</div>

<div id="course-duration">
	<?php echo "Duração:" ?>
	<strong>
		<input type="text" name="course[duration]" size="3" value="<?php echo $course->duration ?>"> horas
	</strong>
</div>