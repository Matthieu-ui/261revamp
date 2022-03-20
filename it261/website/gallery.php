<?php
//gallery.php
include('config.php');
include('includes/dailyheader.php');

?>

<div id="wrapper">
    <main>

        <?php
$distros = array (
    "ubuntu_distro" => "ubuntu <em>The Ubuntu desktop is by far the world's most widely used Linux workstation platform</em>",
    "fedora_distro" => "fedora <em>Fedora is designed as a secure, general purpose operating system. The operating system is developed on a six-month release cycle, under the auspices of the Fedora Project. Fedora is sponsored by Red Hat.</em>",
    "arch_distro" => "archli <em>Arch Linux is an independently developed, x86-64 general-purpose GNU/Linux distribution that strives to provide the latest stable versions of most software by following a rolling-release model. The default installation is a minimal base system, configured by the user to only add what is purposely required.</em>",
    "marnjaro_distro" => "manjar <em>Manjaro has a focus on user-friendliness and accessibility. It features a rolling release update model and uses Pacman as its package manager.</em>",
    "scientific_distro" => "scient <em>Scientific Linux (SL) is a Linux distribution produced by Fermilab, CERN, DESY and by ETH Zurich. It is a free and open-source operating system based on Red Hat Enterprise Linux.</em>"
);
//$name         $image
//$key          $value
?>
        <div class="container">
            <div class="row">
                <div class="full column">
                <h1>Welcome to my Gallery Page!</h1>
                    <table class="gallery">
                        
                        <?php foreach($distros as $name => $image) :?>
                        <tr>
                            <td><img class="tableimg" src="images/str_gallery/<?php echo substr($image, 0, 6);?>.jpg"
                                    alt="<?php echo str_replace('_', ' ', $name);?>"></td>
                            <td class="distro_common_name">
                                <?php echo ucfirst(str_replace('_distro', ' ', $name));   ?></td>
                            <td><?php echo substr($image, 6);?></td>
                           
                        </tr>
                        <?php endforeach;?>

                    </table>
                </div>
            </div>

        </div>

    </main>
</div>
<!--end wrapper-->
                       
<?php
include('includes/dailyfooter.php');?>