 <form action="<?=base_url("save"); ?>" name="" method="POST">
    <div class="form-group">
        <input type="text"  name="captacao_cliente" class="form-control "  placeholder="Nome" required="">
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <input type="text"  name="captacao_ddd"  maxlength="2" class="form-control  text-center"    maxlength="2" placeholder="DDD"  required="">
            </div>    
            <div class="col-md-8" >
                <input type="text"  name="captacao_telefone1"   data-mask-type="telefone" class="form-control"    maxlength="15" placeholder="Telefone"  required="">
            </div>    
        </div>
    </div>
    <div class="form-group">
        <input type="email"  name="captacao_email" class="form-control " placeholder="E-mail"  required="">
    </div>
    <input type="hidden"  name="origem" value="<?= "http" . (isset($_SERVER['HTTPS']) ? (($_SERVER['HTTPS'] == "on") ? "s" : "") : "") . "://" . "{$_SERVER['HTTP_HOST']}"; ?>" >
           
   <button type="submit" class="btn  btn-danger" style=" width: 100%;  padding: 10px 0; font-size: 12px;   border-radius: 5px; ">
            QUERO RASTREAR MEU VEÍCULO
        </button>
</form>  