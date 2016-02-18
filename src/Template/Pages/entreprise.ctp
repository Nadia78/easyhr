<?php $this->layout="layoutConnected" ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
	<!-- <link rel='stylesheet' href='fullcalendar/fullcalendar.css' /> -->
	<?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.css') ?>
	<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.css' /> -->
	<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js'); ?>
	<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js'); ?>
	<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js'); ?>

	<?= $this->Html->script('main'); ?>
	<?= $this->Html->css('main') ?>


	<!-- <script src='lib/jquery.min.js'></script>
	<script src='lib/moment.min.js'></script> -->
	<!-- <script src='fullcalendar/fullcalendar.js'></script> -->
</head>
<body>
<div id="table">
<TABLE BORDER="1"> 
  <CAPTION> Informations générales </CAPTION> 
  <TR> 
 <TH> Noms </TH> 
 <TH> Montant du salaire Brut</TH> 
 <TH> Absences du mois</TH> 
 <TH> Motif </TH> 
  </TR> 
  <TR> 
  <!-- echo $nom -->
 <TD> Mr François DUPONT </TD> 
 <TD> 2000 € </TD> 
 <TD> 1 </TD> 
 <TD> Arrêt Maladie </TD> 
  </TR> 
</TABLE> 
</div>
<div id='calendar'>
</div>
</body>
</html>