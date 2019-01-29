@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bonus</div>

                <div class="card-body">
                    <?php 

$i; 
for ($i = 1; $i <= 24; $i++) 
{ 
    if ($i % 2 == 0 && $i % 3 == 0)
        echo '<br>'.'CodilityTest'.'<br>';
    else if ($i % 2 == 0 && $i % 5 == 0 )
        echo '<br>'.'CodilityCoders'.'<br>';
    else if ($i % 3 == 0 && $i % 5 == 0)
        echo '<br>'.'CodilityTestCoders'.'<br>';
    else if (($i % 2) == 0)  
        echo 'Codility' .'<br>';              
    else if (($i % 3) == 0)                  
        echo '<br>'.'Test'.'<br>' ; 
    else if (($i % 5) == 0)                  
        echo'<br>'. 'Coders' .'<br>';             
    else       
    echo $i,"  " ;   

}  
?> 
  </div>
            </div>
        </div>
    </div>
</div>  
@endsection