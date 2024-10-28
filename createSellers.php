<?php 
    include "includes/header.php";
    require "includes/config/connectdb.php";

    $db = connectdb();

    // Verificar si hay datos enviados por POST
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {

        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

            
        $query = "INSERT INTO sellers (name, email, phone) VALUES"
            ."('$name', '$email', '$phone')";
        
        $response = mysqli_query($db, $query);
        
        try {

            $response = mysqli_query($db, $query);
            echo "Propiedad Creado!";

            header("Location: createSellers.php");
            exit();

        } catch (Exception  $e) {

            echo "<p>Error: Seller No Creada: ".$e."<p>";
        
        }

       
    }
?>

<section>
    <h2>Sellers Form</h2>
    <div>
        <form action="createSellers.php" method="post">
            <fieldset>
                <legend>Fill all Fields to Create a New Seller</legend>
                <div>
                    <label for="id">ID</label>
                    <input type="number" id="id" name="id">
                </div>
                <div>
                    <label for="name">Name</label>
                    <input required type="text" id="name" name="name" placeholder="Enter Your Name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input required type="text" id="email" name="email" placeholder="your@email.com">
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder="555-555-5555">
                </div>
                <div>
                    <button type="submit">Create a New Seller</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php 
    include "includes/footer.php";
?>
