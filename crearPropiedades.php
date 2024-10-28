<?php
    include "includes/header.php";
    require "includes/config/connectdb.php";

    
    //var_dump($_POST);
    
    // Verificar si hay datos enviados por POST
    if($_SERVER['REQUEST_METHOD']=='POST'){
        echo "<p>METODO POST<p>";
        $db = connectdb();

        $id = $_POST['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $rooms = $_POST['rooms'];
        $wc = $_POST['wc'];
        $timestamp = $_POST['timestamp'];
        $id_seller = $_POST['seller'];

        $query = "INSERT INTO propierties (title, price, image, description, rooms, wc, timestamp, id_seller) VALUES "
                        ."('$title', '$price', '$image', '$description', '$rooms', '$wc', '$timestamp', '$id_seller')";
        
        try {
            $response = mysqli_query($db, $query);
            echo "Propiedad Creado!";

            header("Location: crearPropiedades.php");
            exit();
        } catch (Exception  $e) {
            echo "<p>Error: Propiedad No Creada: ".$e."<p>";
        }

    
    
    }

?>

<section>
    <h2>Propierties Form</h2>
    <div>
        <form action="crearPropiedades.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Fill All Form Fields to Create a New Propierty</legend>
                <div>
                    <label for="id">ID</label>
                    <input type="number" id="id" name="id">
                </div>
                <div>
                    <label for="title">Title</label>
                    <input required type="text" id="title" name="title" placeholder="Title of the propierty" >
                </div>
                <div>
                    <label for="price">Price</label>
                    <input required type="number" id="price" name="price" step ="any" placeholder="$100000">
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" accept="image/*">
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description" placeholder="Propierty Description">
                    </textarea>
                </div>
                <div>
                    <label for="rooms">Number of Rooms</label>
                    <input type="number" id="rooms" name="rooms">
                </div>
                <div>
                    <label for="wc">Number of WC</label>
                    <input type="number" id="wc" name="wc">
                </div>
                <div>
                    <label for="garage">Number of Garage</label>
                    <input type="number" id="garage" name="garage">
                </div>
                <div>
                    <label for="timestamp">TimeStamp</label>
                    <input type="date" id="timestamp"  name="timestamp">
                </div>
                <div>
                    <label for="seller">ID Seller</label>
                    <input required type="number" id="seller" name="seller">
                </div>
                <div>
                    <button type="submit">Create a New Propierty</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php
    include "includes/footer.php";
?>