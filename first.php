<?php include_once('connection.php'); ?>

<!-- saved from url=(0018)http://welcome.qa/ -->
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Welcome to Qatar</title>
    <style type="text/css">
    .backpack.dropzone {
        font-family: 'SF UI Display', 'Segoe UI';
        font-size: 15px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 250px;
        height: 150px;
        font-weight: lighter;
        color: white;
        will-change: right;
        z-index: 2147483647;
        bottom: 20%;
        background: #333;
        position: fixed;
        user-select: none;
        transition: left .5s, right .5s;
        right: 0px; 
    }
    .backpack.dropzone .animation {
        height: 80px;
        width: 250px;
        background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/hoverstate.png") left center; 
    }
    .backpack.dropzone .title::before {
        content: 'Save to'; 
    }
    .backpack.dropzone.closed {
        right: -250px; 
    }
    .backpack.dropzone.hover .animation {
        animation: sxt-play-anim-hover 0.91s steps(21);
        animation-fill-mode: forwards;
        background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/hoverstate.png") left center; 
    }

    @keyframes sxt-play-anim-hover {
    from {
        background-position: 0px; }
    to {
        background-position: -5250px; } }
    .backpack.dropzone.saving .title::before {
        content: 'Saving to'; }
    .backpack.dropzone.saving .animation {
        background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/saving_loop.png") left center;
        animation: sxt-play-anim-saving steps(59) 2.46s infinite; }

    @keyframes sxt-play-anim-saving {
    100% {
        background-position: -14750px; } }
    .backpack.dropzone.saved .title::before {
        content: 'Saved to'; }
    .backpack.dropzone.saved .animation {
        background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/saved.png") left center;
        animation: sxt-play-anim-saved steps(20) 0.83s forwards; }

    @keyframes sxt-play-anim-saved {
    100% {
        background-position: -5000px; } }
    </style>
</head>
<body center="" style="background-color:#8c1a3c;  &gt;
    &lt;p style=" text-align:="" data-new-gr-c-s-check-loaded="14.990.0" data-gr-ext-installed="">
    <center>
        <div>
            <div class="custom-select" style="width:200px;">
                <select>       
                    <?php
                        $sql = "SELECT * FROM looks";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) !== NULL) {
                            while ($row[] = mysqli_fetch_array($result)){
                                $rows = $row['look'];
                            }
                            //$row = mysqli_fetch_array($result);
                        }
                        foreach($rows as $val){
                    ?>
                            <option value="0"><?php echo $val; ?></option>
                    <?php
                        }
                    ?>           
                </select>
            </div>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                    <a href="https://123movies-to.org">123movies</a>
                        <style>
                        .mapouter{position:relative;text-align:right;height:500px;width:600px;}
                        .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
                        </style>
                    <a href="https://maps-google.github.io/embed-google-map/"></a>
                </div>
            </div>
        </div>
    </center>

</body>
</html>