<html>
    <head><title>MovieAdd</title></head>
    <body bgcolor='#CCFF33'>    
    <h2>Add Movie</h2>
                        <form method="POST" action="Addmovie.php">
                            <table>
                                <tr>
                                    <td><label>ID Movie</label></td>
                                    <td><input type="text" name="ID" /></td>
                                </tr>                                
                                <tr>
                                    <td><label>Movie</label></td>
                                    <td><input type="text" name="movie" /></td>
                                </tr>
                                <tr>
                                    <td><label>Genre</label></td>
                                    <td><input type="text" name="Genre" /></td>
                                </tr>
                                <td><input type="submit" name="Add" value="Add" style="width: 120px; padding: 20px; cursor: pointer;   
                                box-shadow: 6px 6px 5px;  -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; 
                                background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%"/></td>
                            </table>
                        </form>
    </body>
</html>