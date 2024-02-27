   <?php
    include_once "navbar.php";
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $filename = 'notes.json';
	$data = file_get_contents($filename);
	$users = json_decode($data);
    foreach($users as $user){
        if ($user->id == $id) { ?>
        <div class="container" style="margin-top:100px;">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-white"><?php echo $user->name  ?></h2>
                    <p class="text-white lead" align="justify">
                        <?php echo $user->desc ?>
                    </p>
                    <h2 class="text-white">Download the Handwriten Notes:</h2><a class="text-info <?php if(isset($_SESSION['id'])){ echo ''; } else {echo 'disabled';}?>" href="<?php echo $user->link ?>">Click Here</a>
                </div>
            </div>
        </div>
    <?php
    }}}
        include_once "footer.php";
    ?>