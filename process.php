
<?php
include('config.php');
if (isset($_POST['updateL']))
{
    $Work_Category = $_POST["Work_Category"];
    $No_Of_Workers = $_POST["No_Of_Workers"];
    $Labor_ID = $_POST["Labor_ID"];

    $query = "UPDATE labor SET Work_Category = '$Work_Category', No_Of_Workers = '$No_Of_Workers' WHERE Labor_ID = $Labor_ID";

    mysqli_query($conn, $query);
    echo
    "<script> alert('Data Updated Successfully'); </script>";

}

header('location:/CRUD/readR.php');
?>


<?php
include('config.php');

if (isset($_POST['updateM']))
{
    $Aggregate = $_POST["Aggregate"];
    $A_Quantity = $_POST["A_Quantity"];
    $ConcreteCement = $_POST["ConcreteCement"];
    $C_Quantity = $_POST["C_Quantity"];
    $LumberWood = $_POST["LumberWood"];
    $L_Quantity = $_POST["L_Quantity"];
    $Metal = $_POST["Metal"];
    $M_Quantity = $_POST["M_Quantity"];
    $PlumbingElectrical = $_POST["PlumbingElectrical"];
    $P_Quantity = $_POST["P_Quantity"];
    $Material_ID = $_POST["Material_ID"];


    $sql = "UPDATE material SET  Aggregate = '$Aggregate',A_Quantity = '$A_Quantity',ConcreteCement='$ConcreteCement',C_Quantity='$C_Quantity',LumberWood='$LumberWood',L_Quantity='$L_Quantity',Metal='$Metal',M_Quantity='$M_Quantity',PlumbingElectrical='$PlumbingElectrical',P_Quantity='$P_Quantity' 
    WHERE Material_ID = $Material_ID";

    if(mysqli_query($conn, $sql))
    {
        echo "Record Updated Successfully!";
    }
    else
    {
        die('Error');

    }
}
header('location:/CRUD/readR.php');
?>

<?php
include('config.php');

if (isset($_POST['updateE']))
{
    $EarthMoving = $_POST["EarthMoving"];
    $E_Equipments = $_POST["E_Equipments"];
    $Material = $_POST["Material"];
    $M_Equipments = $_POST["M_Equipments"];
    $ConstructionVehicles = $_POST["ConstructionVehicles"];
    $C_Equipments = $_POST["C_Equipments"];
    $Concrete = $_POST["Concrete"];
    $Co_Equipments = $_POST["Co_Equipments"];
    $Equipment_ID = $_POST["Equipment_ID"];   //Primary Key


    $sql = "UPDATE equipment SET  EarthMoving = '$EarthMoving',E_Equipments = '$E_Equipments',Material='$Material',M_Equipments='$M_Equipments',ConstructionVehicles='$ConstructionVehicles',C_Equipments='$C_Equipments',Concrete='$Concrete',Co_Equipments='$Co_Equipments' 
    WHERE Equipment_ID = $Equipment_ID";

    if(mysqli_query($conn, $sql))
    {
        echo "Record Updated Successfully!";
    }
    else
    {
        die('Error');

    }
}
header('location:/CRUD/readR.php');
?>