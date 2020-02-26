<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>TABLEAU D'AFFICHAGE</title>
</head>
<body>
 <form method="POST" action="{{ route('ma_forme') }}">
       {{ csrf_field() }}
    <center>
    
       <p>
           <input type="text" name="nom" placeholder="Nom">
       </p>
       <br>
       <p>
        <input type="text" name="prenom" placeholder="Prenom">
       </p>
       <br>
       <p>
        <input type="date" name="date" placeholder="Date">
       </p>
       <br>
       <p>
        <input type="text" name="telephone" placeholder="Telephone">
       </p>
       <br>
       <p>
        <input type="text" name="email" placeholder="Email">
       </p>
       <br>
       <p>
        <input type="text" name="grade" placeholder="Grade">
       </p>
       <br>
       <p>
        <input type="text" name="unite" placeholder="Unite">
       </p>
       <br>
       <p>
        <input type="text" name="texte" placeholder="Texte">
       </p>
       <br>
       <p>
        <input type="text" name="information_complementaire" placeholder="Information Complementaire">
       </p>
       <br>

            <button type="submit" class="btn btn-primary">VALIDER</button>
            
        
    </center> 

    
        
            
       
           
        <div id="container">

            
            <tbody>     
                <tr>
                    <th>
                        Nom:
                    </th>
                    <th>
                        Prenom:
                    </th>
                    <th>
                        Date:
                    </th>
                    <th>
                        Telephone:
                    </th>
                    <th>
                        Email:
                    </th>
                    <th>
                        Grade:
                    </th>
                    <th>
                        Unite:
                    </th>
                    <th>
                        Texte:
                    </th>
                    <th>
                        Information Complementaire:
                    </th>
                    

                </tr>     
            </tbody>
            @foreach(\App\form::all() as $e) 
                <td>
                   {{ $e->nom }}
                </td>    
                <td>
                    {{ $e->prenom }}
                </td>
                <td>
                    {{ $e->date }}
                </td>
                <td>
                    {{ $e->telephone }}
                </td>
                <td>
                    {{ $e->email }}
                </td>
                <td>
                    {{ $e->grade }}
                </td>
                <td>
                    {{ $e->unite }}
                </td>
                <td>
                    {{ $e->texte }}
                </td>
                <td>
                {{ $e->information_complementaire }}
                </td>
                
            @endforeach
        </div>
        <a id="mon_bouton">VALIDER</a>
</form>
    
<script src="{{asset ('js/jquery.js') }}"></script>   
<script>
        $(document).ready(function(){
          
          $('#mon_bouton').click(function(){
      
            $("#container").empty();
          });
      });
    //   $(document).ready(function(){
          
    //       $('#mon_bouton').click(function(){
      
    //         alert("cool");
    //       });
      
          
</script>  
          
 
    
    
    
</body>

</html>
