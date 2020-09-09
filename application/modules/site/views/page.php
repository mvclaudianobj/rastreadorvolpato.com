<?php   defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="drag-drop-item">
<head>
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7LXMGS');</script>
<!-- End Google Tag Manager -->

<meta charset="utf-8">  
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="HandheldFriendly" content="true" />
<meta content="INDEX, FOLLOW" name="ROBOTS" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="og:title" content="" />
<meta name="og:url" content="" />
<meta name="geo.region" content="BR-RS" />
<meta name="geo.placename" content="Porto Alegre" />
<meta name="geo.position" content="-30.012827;-51.198421" />
<meta name="ICBM" content="-30.012827, -51.198421" />    
<meta name="og:image" content="<?=  base_url('assets/img/logo-volpato.jpg')?>" />
<meta name="classification" content="Internet" />
<meta name="document-classification" content="VOLPATO" />
<meta name="REVISIT-AFTER" content="1 days" />
<meta name="LANGUAGE" content="Portuguese" />
<meta name="COPYRIGHT" content="" />
<meta name="audience" content="all" />
<meta name="copyright" content="VOLPATO" />
<link rel="image_src" href="<?=base_url('assets/img/logo-volpato.jpg')?>" />

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico')?>" />
<title>Rastreador Veícular -  Ligue : 3004-5554</title>
<?php echo $this->load->view("bootstrap"); ?>
<?php echo $this->load->view("main"); ?>
<link href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>" rel="stylesheet"> <!--load all styles -->

<?=isset($assets['css'])?$assets['css']:'';?>
<?=isset($assets['javaScriptHeader'])?$assets['javaScriptHeader']:'';?>
</head>
<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7LXMGS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  
    <div id="__container-fluid">
        <div class="container-fluid">
            <?php echo $content; ?>       
        </div>  
    </div> 
<style type="text/css">        
@font-face {font-family: "GothamBold";font-style: normal;font-weight: 400;src: url("<?php echo base_url()?>assets/fonts/GothamBold/5d6f50ed2dde0e4ad455448f896c09f0.woff2") format("woff2"),url("<?php echo base_url()?>assets/fonts/GothamBold/5d6f50ed2dde0e4ad455448f896c09f0.woff") format("woff"), 
url("<?php echo base_url()?>assets/fonts/GothamBold/GothamBold.otf") format("otf"), url("<?php echo base_url()?>assets/fonts/GothamBold/5d6f50ed2dde0e4ad455448f896c09f0.ttf") format("truetype");
}
</style>
   <?php echo $this->load->view("jquery.php"); ?>
   <?php echo $this->load->view("bootstrapjs"); ?>

   <script type="text/javascript" src="<?php echo base_url('assets/js/scrollreveal.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-mask-plugin/jquery.mask.js');?>"></script>
      <script type="text/javascript">
            $(function(){
                /*
                    var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? ' 00000-0000' : ' 0000-00009'; }, spOptions = {    onKeyPress: function(val, e, field, options) {    field.mask(SPMaskBehavior.apply({}, arguments), options); } };  $('input[data-mask-type="telefone"]').mask(SPMaskBehavior, spOptions);   $('.msk_telefone').mask(SPMaskBehavior, spOptions);
            
                */



/*

$('input[data-mask-type="telefone"]').mask("0000-00009");

                $('input[data-mask-type="telefone"]').blur(function(event) {
                    if($(this).val().length === 13){
                        $('input[data-mask-type="telefone"]').mask("00 00 000000009");

                    } else if($(this).val().length === 11) {          
                        $('input[data-mask-type="telefone"]').mask("00 000000009");
                    }else{
                             $('input[data-mask-type="telefone"]').mask("00 00 000000009");
                    }
                });

            });

*/

          window.sr = ScrollReveal({reset:true});
            sr.reveal('.scrollrevealtitle',{
                duration: 2000,
                origin:'bottom',
                distance:'30px'
            });
            sr.reveal('.scrollrevealleft',{
                duration: 2000,
                origin:'left',
                distance:'30px'
            });
            sr.reveal('.scrollrevealright',{
                duration: 2000,
                origin:'right',
                distance:'30px'
            });
        </script>


    <?php echo isset($assets['javaScriptFooter'])?$assets['javaScriptFooter']:'';?>        

</body>
<?= $this->load->view("formulario/form_modal"); ?>
</html>