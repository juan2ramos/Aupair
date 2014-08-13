<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title><?php echo str_replace("-", " ", $url); ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
    <!-- Meta Facebook -->


    <link rel="shortcut icon" href="favicon.png">

    <!-- Estilos -->
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body class="<?php echo($url); if($url!='inicio'){echo(' menu-fixed');}?>">
<header>
    <div id="bar-info">
        <ul id="customer-service" class="inline">
            <li><a href="conocenos">Conócenos</a> -</li>
            <li><a href="servicio-al-cliente">Servicio Al Cliente</a> -</li>
            <li><a href="eventos">Eventos</a> -</li>
            <li><a href="funcionarios">Funcionarios </a></li>
        </ul>
        <div id="info-aupair" class="inline">
            Email: <a href="mailto:info@aupaircolombia.com">info@aupaircolombia.com</a> |
            P.B.X<a href="tel:5717440144">57 (1) 7 44 01 44</a>
        </div>
        <nav id="network" class="inline">
            <li><a href=""><span class="icon-facebook"></span></a></li>
            <li><a href=""><span class="icon-twitter"></span></a></li>
            <li><a href=""><span class="icon-uniE603"></span></a></li>
            <li><a href=""><span class="icon-instagram"></span></a></li>
        </nav>
    </div>
    <?php if ($url == 'inicio'): ?>
        <div class="slider slider-home">
            <ul class="slides">
                <li>
                    <div class="contend-p">
                        <p> Más que viajar trabajar <br>

                            &nbsp;y ser bilingue <br>

                            &nbsp;es estar a la par con el mundo</p>
                        <br/>
                        <p class="light-p">somos una agencia dónde encontrarás responsabilidad, profesionalismo y soporte calificado
                            durante todo tu proceso tanto en Colombia como en el exterior. <br/><a href="conocenos" class="light color-yellow">CONOCENOS</a></p>
                    </div>
                    <img src="images/Banner/01.jpg">
                </li>

                <li>
                    <div class="contend-p">
                        <p> Más que viajar trabajar <br>

                            &nbsp;y ser bilingue <br>

                            &nbsp;es estar a la par con el mundo</p>
                        <br/>
                        <p class="light-p">somos una agencia dónde encontrarás responsabilidad, profesionalismo y soporte calificado
                            durante todo tu proceso tanto en Colombia como en el exterior. <br/><a href="conocenos" class="light color-yellow">CONOCENOS</a></p>
                    </div>
                    <img src="images/Banner/02.jpg">
                </li>

                <li>
                    <div class="contend-p">
                        <p> Más que viajar trabajar <br>

                            &nbsp;y ser bilingue <br>

                            &nbsp;es estar a la par con el mundo</p>
                        <br/>
                        <p class="light-p">somos una agencia dónde encontrarás responsabilidad, profesionalismo y soporte calificado
                            durante todo tu proceso tanto en Colombia como en el exterior. <br/><a href="conocenos" class="light color-yellow">CONOCENOS</a></p>
                    </div>
                    <img src="images/Banner/03.jpg">
                </li>

                <li>
                    <div class="contend-p">
                        <p> Más que viajar trabajar <br>

                            &nbsp;y ser bilingue <br>

                            &nbsp;es estar a la par con el mundo</p>
                        <br/>
                        <p class="light-p">somos una agencia dónde encontrarás responsabilidad, profesionalismo y soporte calificado
                            durante todo tu proceso tanto en Colombia como en el exterior. <br/><a href="conocenos" class="light color-yellow">CONOCENOS</a></p>
                    </div>
                    <img src="images/Banner/04.jpg">
                </li>

            </ul>
        </div>
    <?php endif ?>
    <div id="bar-nav">
        <div id="slogan-twiter" class="inline">
            <span>#yomefuicon</span><span>aupaircolombia</span>

            <div><a href="http://www.aupaircolombia.com">www.aupaircolombia.com</a></div>
            <img src="images/paises.png" alt="Paises Aupair"/>

        </div>
        <nav id="menu" class="inline ">
            <ul>
                <li><a href="inicio">Incio</a> |</li>
                <li> Aupair  |
                    <ul id="submenu">
                        <li><a href="programa"> Programas </a></li>
                        <li><a href="programa-china"> China </a></li>
                        <li><a href="programa-Canada"> Canada </a></li>
                        <li><a href="programa-Alemania"> Alemania </a></li>

                    </ul>
                </li>
                <li><a href="testimonio">Testimonios</a> |</li>
                <li><a href="ubicacion">Encuéntranos</a></li>
            </ul>
        </nav>
        <div class="inline ins">
            <a href="inscribete">Inscribete</a>
            <a href="#">Pagos en Linea.</a>
        </div>
    </div>
</header>

<?php include $fileName; ?>

<footer>
    <div id="wrapper">
        <div id="customer-service-footer" class="inline">
            <h2><span class="color-yellow">Servicio</span> al Cliente</h2>
            <hr/>
            <div class="inline text-service">
                <p class="clear-bottom">
                    En nuestro departamento de servicio al cliente siempre encontraras el apoyo necesario para todos los
                    temas
                    relacionados con tu aplicación.
                </p>
                <a class="bold" href="mailto:servicioalcliente@aupaircolombia.com">servicioalcliente@aupaircolombia.com</a>
                <hr/>
                <p>Mantente actualizado:</p>
                <p class="color-yellow">Suscribete a nuestro <span class="roman">Newsletter.</span></p>
                <form action="" id="newsletter">
                    <input type="text" name="" id="" placeholder="E Mail."/>
                    <button>Ok.</button>
                </form>
            </div>
            <div class="inline more-info border-left">
                <p>Departamento Comercial.</p>

                <p>P.B.X +57 (1) <span>7 44 01 44</span></p>

                <p>Chapinero - <span>Cra. 7 No. 50 - 10</span></p>

                <p>info@aupaircolombia.com</p>

                <p>Gerencia General</p>

                <p>Ext.<span>12-00</span></p>

                <p> Prosesos internacionales</p>

                <p>Ext.<span>14-00</span></p>

                <p>Departamento juridico </p>

                <p> Ext.<span>11-00</span></p>

            </div>
        </div>
        <div id="contact" class="inline">
            <h2>Contáctanos</h2>
            <hr/>
            <p>Ser Au Pair es tener la oportunidad de conocer una nueva cultura y adaptarte a un nuevo estilo de vida;
                enriquecer tu perfil personal y laboral al ser bilingüe y al haber vivido una experiencia multicultural.
            </p>

            <div>
                <form action="" class="inline">
                    <input type="text" name="name-user" placeholder="Nombre completo."/>
                    <input type="tel" name="telephone" placeholder="Tel."/>
                    <input type="email" name="email" placeholder="E mail."/>
                    <input type="number" name="age" placeholder="Edad."/>
                    <select name="program">
                        <option value="">Programa de interes.</option>
                        <option value="">Alemania</option>
                        <option value="">USA</option>
                        <option value="">China</option>
                        <option value="">Francia</option>
                    </select>
                    <textarea name="message" id="" placeholder="Mensaje"></textarea>
                    <input type="submit" value="Enviar"/>
                </form>
                <div class="more-info inline">
                    <p>P.B.X +57 (1)<span> 7 44 01 44 </span></p>

                    <p>Sede Administrativa. </p>

                    <p>Chapinero - <span>Cra. 7 No. 50 - 10 </span></p>

                    <p>info@aupaircolombia.com </p>


                    <p>Centro | Ext.<span>11-00</span><br>

                    <p><span> Cll.19 No. 3a - 35</span></p>

                    <p> Centro | Ext.<span>11-00<span></p>

                    <p><span>Cll.19 No. 3a - 35</span></p>

                    <p> Javeriana | Ext.<span>12-00</span></p>

                    <p><span>Cra.7 No. 40b - 97</span></p>

                    <p> Centro Mayor | Ext.<span>14-00</span></p>

                    <p><span>Local 2-167</span></p>

                </div>
            </div>
        </div>
    </div>

    <div id="copy">
        <div id="wrapper-copy">
            <div class="inline">Deadline Stdo. - juan2ramos.com todos los derechos reservados.</div>
            <div class="inline">Au - Pair Colombia 2014. Todos los derecho reservados</div>
            <nav id="network-footer" class="inline">
                <li><a href=""><span class="icon-facebook"></span></a></li>
                <li><a href=""><span class="icon-twitter"></span></a></li>
                <li><a href=""><span class="icon-uniE603"></span></a></li>
                <li><a href=""><span class="icon-instagram"></span></a></li>
            </nav>
        </div>
    </div>
</footer>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script src="js/script.js"></script>
</body>
</html>