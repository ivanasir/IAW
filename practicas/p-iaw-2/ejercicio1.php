<html>
  <body>
    <form action="ejercicio1post.php" method="POST">
        <input type="hidden" name="formulario">
            Nombre de la fiesta : <input type="text" name="fiesta"></br>
            numero de personas : <input type="number" name="personas"></br>
            tipo de fiesta :    <input type="radio" name="tipo" value="privada" checked> privada
                                <input type="radio"  name="tipo" value="publica"> publica</br>
                            
        Seleciona musica 
        <select name="musica">
            <option value="pop ">Pop</option>
            <option value="rock">Rock</option>
            <option value="jazz">Jazz</option>
            <option value="indie">Indie</option>
        </select></br>
        ubicaciones disponibles : <input type="checkbox" name="ubi[]" value="barras" > barras
            <input type="checkbox"  name="ubi[]" value="escenarios" checked> escenarios
            <input type="checkbox"  name="ubi[]" value="jardin"> jardin
            <input type="checkbox"  name="ubi[]" value="zonachill"> zona chill</br>
        comentarios adicionales
        <textarea name="comentarios" cols="20" rows="5">
        </textarea></br>
        <input type="submit" value="enviar">
    </form>
  </body>
</html>