<?php 
    header('Content-Type: application/json');
    require_once "../config.php";
    $results =[];
    $results["results"]=[];
    $results["GETParams"]=$_GET;  
    $results["POSTParams"]=$_POST;
    $limit = null;
    $year = null;
    $active = null;
    
    if(isset($_POST["limit"])){
        $limit = $_POST["limit"];
    }

    if(isset($_POST["year"])){
        $year = $_POST["year"];
    }

    if(isset($_POST["active"])){
        $active = $_POST["active"];
    }

    $sql = 'SELECT * FROM CMP_Student_Reviews';

    if ($year != null){
        $sql .= ' where student_year = :y  AND active = :active';  
    }

    $sql .= " ORDER BY date DESC";

    if ($limit != null){
        $sql .= ' Limit :limit';
    }
    
    

    $stmt = $link->prepare($sql);

    if ($year != null){
         $stmt->bindValue(':y', $year);
    }
    /*if ($active != null){
        $stmt->bindValue(':active', $active);
    }*/
    if ($limit != null){
        $stmt->bindValue(':limit', $limit);
    }
    
    $stmt->execute();
    $results["results"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
   // $stmt = $link->query('SELECT review_text FROM Student_Reviews');
     /*   foreach ($stmt as $row){
            //echo '<div class="col-md-6"><figure class="quote"><blockquote>' . $row["review_text"] . '</blockquote><figcaption>&mdash; Student, <cite>ECTS CMP Student Class of 2021</cite></figcaption></figure></div>';
            $results["results"][]= $row;
        }
        */
    echo json_encode($results);
?>