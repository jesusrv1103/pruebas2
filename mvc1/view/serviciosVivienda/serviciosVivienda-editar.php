<h1 class="page-header">
    <?php echo $serVivienda->idServiciosVivienda != null ? $serVivienda->viviendaAgua : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=ServiciosVivienda">Servicios de Vivienda</a></li>
  <li class="active"><?php echo $serVivienda->idServiciosVivienda != null ? $serVivienda->viviendaAgua : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-serVivienda" action="?c=ServiciosVivienda&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idServiciosVivienda" value="<?php echo $serVivienda->idServiciosVivienda; ?>" />
    
    <div class="form-group">
        <label>Vivienda</label>
        <input type="text" name="viviendaElectricidad" value="<?php echo $serVivienda->viviendaElectricidad; ?>" class="form-control" placeholder="Ingrese si hay" data-validacion-tipo="requerido|min:3" />
    </div>
    <div class="form-group">
        <label>Vivienda</label>
        <input type="text" name="viviendaAgua" value="<?php echo $serVivienda->viviendaAgua; ?>" class="form-control" placeholder="Ingrese si hay" data-validacion-tipo="requerido|min:3" />
    </div>
    <div class="form-group">
        <label>Vivienda</label>
        <input type="text" name="viviendaDrenaje" value="<?php echo $serVivienda->viviendaDrenaje; ?>" class="form-control" placeholder="Ingrese si hay" data-validacion-tipo="requerido|min:3" />
    </div>
    <div class="form-group">
        <label>Vivienda</label>
        <input type="text" name="viviendaGas" value="<?php echo $serVivienda->viviendaGas; ?>" class="form-control" placeholder="Ingrese si hay" data-validacion-tipo="requerido|min:3" />
    </div>
    <div class="form-group">
        <label>Vivienda</label>
        <input type="text" name="viviendaTelefono" value="<?php echo $serVivienda->viviendaTelefono; ?>" class="form-control" placeholder="Ingrese si hay" data-validacion-tipo="requerido|min:3" />
    </div>
     <div class="form-group">
        <label>Vivienda</label>
        <input type="text" name="viviendaInternet" value="<?php echo $serVivienda->viviendaInternet; ?>" class="form-control" placeholder="Ingrese si hay" data-validacion-tipo="requerido|min:3" />
    </div>
      
   
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-serVivienda").submit(function(){
            return $(this).validate();
        });
    })
</script>