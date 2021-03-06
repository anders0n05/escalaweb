<div class="item <?php echo $active; ?> componente">
<div class="<?php echo $colGrid; ?> item chrt-page-grids">

      <!-- Default panel contents -->
      <div class="panel-heading">
      <div class="col-sm-8">
		 <label class="mobileHide text-left"><?php echo $nomeComponente; ?></label>
         <label class="desktopHide text-left"><?php echo $nomeComponente; ?></label>
      </div>
      <div class="col-sm-4">
          <a id="fechar<?php echo $handleComponente; ?>" class="mobileHide"><i id="iconeFechar<?php echo $handleComponente; ?>" class="fa fa-times"></i></a>
          <a id="maximizar<?php echo $handleComponente; ?>" class="maximize mobileHide"><i class="fa fa-window-maximize"></i></a>
          <a onClick="window.location.reload();return false;" class="mobileHide"  id="atualizar<?php echo $handleComponente; ?>"><i class="fa fa-retweet"></i></a>
      </div>
      </div>
      </div>
      
      <div class="panel-body" id="painel<?php echo $handleComponente; ?>">
        <div id="myclock<?php echo $handleComponente; ?>" style="width:100%; height:auto;"></div>
    
    
</div>
</div>
<script language="javascript" type="text/javascript" src="../../view/tecnologia/js/jquery.thooClock.js"></script>  
<script language="javascript">
var intVal, myclock;

$(window).resize(function(){
	window.location.reload()
});

$(document).ready(function(){

	//clock plugin constructor
	$("div#myclock<?php echo $handleComponente; ?>").thooClock({
		size:$("div#myclock<?php echo $handleComponente; ?>").width(),
		showNumerals:true,
	});

});

//função fechar painel componente
(function() {
	
$("a#fechar<?php echo $handleComponente; ?>").click(function(){
	if( !$("div#painel<?php echo $handleComponente; ?>").hasClass("display") ){
		$("div#painel<?php echo $handleComponente; ?>").addClass("display");
		$("a#maximizar<?php echo $handleComponente; ?>").addClass("display");
		$("a#atualizar<?php echo $handleComponente; ?>").addClass("display");
		$("i#iconeFechar<?php echo $handleComponente; ?>").removeClass("fa-times");
		$("i#iconeFechar<?php echo $handleComponente; ?>").addClass("fa-window-restore");
	}
	else{
		$("div#painel<?php echo $handleComponente; ?>").removeClass("display");
		$("a#maximizar<?php echo $handleComponente; ?>").removeClass("display");
		$("a#atualizar<?php echo $handleComponente; ?>").removeClass("display");
		$("i#iconeFechar<?php echo $handleComponente; ?>").removeClass("fa-window-restore");
		$("i#iconeFechar<?php echo $handleComponente; ?>").addClass("fa-times");
	}
});

})(jQuery);
</script>