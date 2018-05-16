<?php
    $pin = $_POST['pin'];
    $password = '9999';

    if ($pin == $password){
        echo "
            <br>
            <form action='../nav_insert.html'>
                <meta http-equiv='refresh' content='0; url=../nav_insert.html'>
                
            </form>
        ";
    }
    # <input type='submit' value='Go to INSERT' />
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