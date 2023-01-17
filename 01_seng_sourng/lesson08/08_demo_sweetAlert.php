<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
    <title>Using Sweet Alert</title>
    <style>
        span{
            color: red;
        }
        body{
             font-family: 'Courier New', 'Hanuman', monospace;
        }      
    </style>
</head>
<body>
<form method="post">
            <input name="nm" type="text" placeholder="Name">
            <input name="em" type="text" placeholder="Email">
            <input name="sub" type="submit" value="Submit">
        </form>
        <?php
    if(isset($_POST['sub'])){
        $n=$_POST['nm'];
        $e=$_POST['em'];
        if(empty($n) || empty($e)){
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Invalid',
                text: 'សូមបញ្ចូលតម្លៃអោយ'
            })
        </script>
        <?php
        }else{
            ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Good job!',
                    text: 'សូមស្វាគមន៍'
                })            
            </script>
            <?php
        }
}
?>
</body>
</html>