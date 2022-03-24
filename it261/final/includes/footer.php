<div class="footer">
    <ul>
        <li><small>Copyright &copy;
                <?php
                        $date_current = date('Y');
                        $date_created = 2021;
                        if ($date_current == $date_created) {
                            echo $date_current;
                        } else
                            echo '' . $date_created . ' - ' . $date_current . ' ';
                        ?>


            </small></li>
        <li>All Rights Reserved</li>
        <li><a href="https://matthieufelker.io/">Matthieu Felker</a></li>

    </ul>

</div>



</body>

</html>