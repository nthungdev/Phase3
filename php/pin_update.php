<?php
    $pin = $_POST['pin'];
    $password = '9999';

    if ($pin == $password){
        echo "
            <meta http-equiv='refresh' content='0; url=../nav_update.html'>
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