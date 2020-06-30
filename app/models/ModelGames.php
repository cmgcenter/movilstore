<?php
class ModelGames
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
						'category_id' => $games['category_id'],
						'genre_id' => $games['genre_id'],
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

	public static function getGame($id)
	{
		//obtenemos los post que van dentro del slider del index
		$pdo = db::obtenerInstancia()->obtenerBD();
		$cmd = "SELECT * FROM tbl_games WHERE status = :status AND id=:id LIMIT 1";
		$status = intval(1);
		$id = intval($id);
		try 
		{
			$exec = $pdo->prepare($cmd);
			$exec->bindParam(':status', $status);
			$exec->bindParam(':id', $id);
			if( $exec->execute() )
			{
				$output = array();
				$output['GameData'] = array();
				
				$game = $exec->fetch(PDO::FETCH_ASSOC);
				if ($game != null ) 
				{
					$game = array(
						'id' => $game['id'],
						'title' => $game['title'],
						'url' => $game['url'],
						'description' => $game['description'], 
						'cover' => $game['cover'],
						'galery' => json_decode($game['galery'], true),
						'category_id' => $game['category_id'],
						'genre_id' => $game['genre_id'],
						'on_created' => $game['on_created'],
						'on_updated' => $game['on_updated'],
						'status' => $game['status']
					);
					$output['Game'] = $game;
					$output['GameData'] = array(
						'views' => 152, 
						'likes' => 41,
					);
				}

				http_response_code(200);
				return $output;
				//print_r($output);
			}
		}
		catch (Exception $e) 
		{
			throw new Exception("Error Processing Request", 503);	
		}

	}
	
	







}
?>