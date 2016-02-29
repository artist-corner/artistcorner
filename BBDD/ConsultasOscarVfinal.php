Para que te funcione importa la BBDD la he cambiado
//Consulta que muestra artista con mas likes en sus obras 
	+descripción del artista
SELECT tbl_usuario.*, tbl_obra.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra GROUP BY tbl_obra.id_Usuario ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 1


//Mostrar obra con mas likes

SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 1



//Consultas que muestren las 4 imagenes con mas like de cada estilo de arte


	//Musica
 SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra WHERE tbl_arte.nombre_Arte = 'Musica' GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 4
	

	//Imagen
SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra WHERE tbl_arte.nombre_Arte = 'Imagen' GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 4 

	//Video
SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra WHERE tbl_arte.nombre_Arte = 'Video' GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 4
	
	//Escritura
SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra WHERE tbl_arte.nombre_Arte = 'Escritura' GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 4



//Consultas que muestren las 4 ultimas imagenes de cada arte


	//Musica
SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Musica' ORDER BY tbl_obra.id_Obra DESC LIMIT 4 
	

	//Imagen
SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Imagen' ORDER BY tbl_obra.id_Obra DESC LIMIT 4 

	//Video
SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Video' ORDER BY tbl_obra.id_Obra DESC LIMIT 4 
	
	//Escritura
SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Escritura' ORDER BY tbl_obra.id_Obra DESC LIMIT 4 






















SELECT tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_likes GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 4