<?php
    $pin = $_POST['pin'];
    $password = '9999';
    echo $pin;

    if ($pin == $password){
        echo "Validation successful!";
        echo "
            <br>
            <form action='../nav_insert.html'>
                <input type='submit' value='Go to INSERT' />
            </form>
        ";
    }
    
    else {
        echo "Incorrect PIN code! Please try again!";
        echo "
                <br>
                <button onclick='goBack()'>Try Again</button>
                
                <br>
                <form action='../index.html'>
                    <input type='submit' value='Go to Main Page' />
                </form>

                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
             
             ";

    }

?>