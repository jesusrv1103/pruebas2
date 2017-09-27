<?php
class ServiciosVivienda
{
	private $pdo;
    
    public $idServiciosVivienda;
    public $viviendaElectricidad;
    public $viviendaAgua;
    public $viviendaDrenaje;
    public $viviendaGas;
    public $viviendaTelefono;
    public $viviendaInternet;
  
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM serviciosVivienda");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idServiciosVivienda)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM serviciosVivienda WHERE idServiciosVivienda = ?");
			          

			$stm->execute(array($idServicioVivienda));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idServicioVivienda)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM serviciosVivienda WHERE idServiciosVivienda = ?");			          

			$stm->execute(array($idServicioVivienda));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE serviciosVivienda SET 
						viviendaAgua          = ?, 
						viviendaDrenaje        = ?,
                        viviendaElectricidad        = ?,
						viviendaGas            = ?, 
						viviendaInternet = ?,
						viviendaTelefono = ?
				    WHERE idServiciosVivienda = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->viviendaAgua, 
                        $data->viviendaDrenaje,
                        $data->viviendaElectricidad,
                        $data->viviendaGas,
                        $data->viviendaInternet,
                        $data->viviendaTelefono,
                        $data->idServicioVivienda
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(ServiciosVivienda $data)
	{
		try 
		{
		$sql = "INSERT INTO serviciosVivienda (viviendaAgua,viviendaDrenaje,viviendaElectricidad,viviendaGas,viviendaInternet,viviendaTelefono) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->viviendaAgua,
                    $data->viviendaDrenaje, 
                    $data->viviendaElectricidad, 
                    $data->viviendaGas,
                    $data->viviendaInternet,
                    $data->viviendaTelefono
                 //   date('Y-m-d')
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}