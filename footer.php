<footer class="site-footer ">
    <div class="contenedor">


        <div class="contenido-footer">
            <div class="informacion-footer">
               <div>
                    <h3>CIMEC INGENIEROS S.A.</h3>
                    <p>Oficina Lima : Calle Ismael Bielich 753 Urb.</p>
                    <p>Prolongación Benavides, Surco - Lima 33</p>
               </div>
               <?php
                $args = array(
                    'container' => 'nav',
                    'container_class' => 'menu-principal-footer'
                );
                wp_nav_menu($args);
                ?>
               <div>
                    <p>Teléfono:<br>(51-1) 719-3630<br>(51-1) 99574-6542 / RPM *298317<br>Fax: (51-1) 719-3620<br>Nextel: 51*420*9396</p>
               </div>
            </div>
            <div class="footer-lastline">
                <p>todos los derechos reservados. Cimec 2020.</p>
                <div>
                    <a target="_blank" href="https://www.facebook.com/pg/Cimec-Ingenieros-112549723777846/about/?ref=page_internal"><i class="fab fa-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/CimecIngenieros"><i class="fab fa-twitter"></i></a>
                    <a href="mailto:curiol@cimec.com"><i class="fas fa-envelope-open-text"></i></a>
                </div>
            
            </div>
            
        </div>
    </div>
</footer>



<?php wp_footer() ?>

</body>



</html>
