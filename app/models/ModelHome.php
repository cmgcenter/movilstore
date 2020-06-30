<?php
class ModelHome
{

	public static function GetSliderPost()
	{
		//obtenemos los post que van dentro del slider del index
		$pdo = db::obtenerInstancia()->obtenerBD();
		$cmd = "SELECT * FROM tbl_games WHERE status = :status ORDER BY on_created ASC LIMIT 10";
		$status = intval(1);
		try 
		{
			$exec = $pdo->prepare($cmd);
			$exec->bindParam(':status', $status);
			if( $exec->execute() )
			{
				$output = array();
				while ($games = $exec->fetch(PDO::FETCH_ASSOC) ) 
				{
					extract($games);
					$setInGames = array(
						'id' => $games['id'],
						'title' => $games['title'],
						'url' => $games['url'],
						'description' => $games['description'], 
						'cover' => $games['cover'],
						'galery' => json_decode($games['galery'], true),
						'on_created' => $games['on_created'],
						'on_updated' => $games['on_updated'],
						'status' => $games['status']
					);
					array_push($output, $setInGames);
				}

				http_response_code(200);
				return $output;
			}
		}
		catch (Exception $e) 
		{
			throw new Exception("Error Processing Request", 503);	
		}
	}
	
	







}
?>