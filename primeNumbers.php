<? php
    if($_GET){
        $i=2;
        $isPrime=true;
    while ($i < $_GET['number']){
        if ($_GET['number']% $i==0){
            //Number is not prime
            $isPrime = false;
        }
        $i++
    }
    if ($isPrime){
        echo "<p>".$i."is a prime number!</p>"
    } else {
        echo "<p>".$i."is not a prime number!</p>"
    }
    }
    ?>
    <p>Please enter a whole number</p>
    <form>

        <input name="number" type="text">
        <input type="submit" value="Go!">
    
    
    </form>