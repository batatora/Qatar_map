<?php include_once('connection.php'); ?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Welcome to Qatar</title>
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="js/jquery.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDocOTLnXB8Kgn46cZSKokpsVHpq6MTORE&libraries=places,drawing&callback=initMap"
    async defer></script>
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="nav" style="height: 118px;">
        <p><h1 id="logo_str" >Welcome <br> <span style="font-size: 36px;">to Qatar</span></h1></p>
    </div>
    <center>
        <div style="background-color:#efefef;width: 100%;">
            <div style="width:90%; padding-top: 24px;">
                <div class="select_menu" id="select_looks">
                    <p style="margin-right: 16px; font-weight: 600; font-size: 17px; ">Look for   </p>
                     <select id="looks" class="select_box">
                        <option value=""></option>
                        <?php
                            $sql = "SELECT * FROM looks";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) !== NULL) {
                                while($row = $result->fetch_array())
                                {
                                $rows[] = $row;
                                }

                            }

                            foreach($rows as $row){
                        ?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row['look']; ?></option>
                        <?php
                            }

                        ?>
                    </select>
                </div>
                <div class="select_menu" id="select_witch">
                    <p style="margin-right: 11px; "  >Witch one   </p>
                    <select id ="witch" class="select_box">
                        <div id="witchone">
                        <option value="" id=></option>
                        </div>
                    </select>
                </div>
                <div class="btn_box">
                    <button  id="search_Func" class="btn btn-primary">Search</button>
                </div>
            </div>
            <div class="col" id="des">
                    Detail Information
            </div>
            <div class="col" id="detail_info" >
                <label for="fname">Location Name:</label>
                <input type="text" id="location" name="" class="show_input" value="" ><br>
                <label for="lname" style=" margin-left: -37px;">Telehphone Number:</label>
                <input type="text" id="telehphone" name="" class="show_input" value="" readonly><br>
                <label for="lname">Website Name:</label>
                <input type="text" id="website" name="" class="show_input" value="" readonly><br>
                <label for="lname"> Email Address:</label>
                <input type="text" id="email" name="" class="show_input" value="" readonly><br>
            </div>
            <div id="map" style="height: 500px; margin: 26px; border:solid 1px; "></div>
        </div>
    </center>
</body>
</html>

//git commit commit!!!!!!
sdfseedfsdsc
//git commit commit!!!!!!
padding









