<h1 class="page-header">Servicios Vivienda</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=ServiciosVivienda&a=Crud">Nuevo Servicios Vivienda</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Vivienda Agua</th>
            <th style="width:180px;">Vivienda Agua</th>
            <th>Vivienda Drenaje</th>
            <th>Vivienda Electricidad</th>
            <th style="width:120px;">Vivienda Gas</th>
            <th style="width:120px;">Vivienda Internet</th>
            <th style="width:60px;">Vivienda Telefono</th>
            <th style="width:60px;"></th>
             <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idServiciosVivienda; ?></td>
            <td><?php echo $r->viviendaAgua; ?></td>
            <td><?php echo $r->viviendaDrenaje; ?></td>
            <td><?php echo $r->viviendaElectricidad; ?></td>
            <td><?php echo $r->viviendaGas; ?></td>
            <td><?php echo $r->viviendaInternet; ?></td>
            <td><?php echo $r->viviendaTelefono; ?></td>
            <td>
                <a href="?c=ServiciosVivienda&a=Crud&idServiciosVivienda=<?php echo $r->idServiciosVivienda; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=ServiciosVivienda&a=Eliminar&idServiciosVivienda=<?php echo $r->idServiciosVivienda; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
