<?php
echo $this->load->view("layout/nav");
echo $this->load->view("layout/banner-principal");
echo $this->load->view("formulario/form_principal");
echo $this->load->view("video-como-funciona");
echo $this->load->view("pronto-atendimento");
echo $this->load->view("como-ajudamos-voce.php");
echo $this->load->view("pronto-atendimento");
echo $this->load->view("depoimentos");
echo $this->load->view("faq");
echo $this->load->view("ultimas-do-blog");
?>
<hr class="_margin-bottom-100">
<section class="container-fluid _margin-top-100  hidden-xs hidden-sm"  style="background: #c1383b">
	<div class="container">
	    <div class="row">
	        <div class="col-md-8">
	            <h6 class="  text-center" style="color: #fff; font-size: 20px; line-height: 60px; font-weight: normal;">
	            	Segurança, transparência e agilidade na  localização de veíclulos 24 horas por dia. 
	            </h6>
	        </div>
	        <div class="col-md-4 text-center">
	        	<a href="javascript:void(0)" alt="SOLICITAR ORÇAMENTO" title=""  
	        			data-toggle="modal" data-target="#myModal"  class="btn btn-danger"  
	        			style="background: #c1383b; 
	        			padding: 15px;  
	        			border: 2px solid; 
	        			margin-top: 15px; 
	        			margin-bottom: 15px">
	        			QUERO RASTREAR MEU VEÍCULO
	        	</a>
	        </div>
	    </div>
	</div>
</section>
<?php  echo $this->load->view("footer-home");