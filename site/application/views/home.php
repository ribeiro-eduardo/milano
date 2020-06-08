<?php 
$this->load->view('meta.php'); 
$this->load->view('header.php'); 
// ver($arrProjetos);
?>

<style>

    .hidden {display: none;}

    .main-galeria{width: 100%; float: left;}

    .album{width: 217px; height: 184px; float: left; padding: 10px}
.album a:hover{opacity: 0.8;}
.album p{text-align: center;}


</style>

<script type="text/javascript" src="js/jquery.fancybox.js"></script>

    <!--/.Navbar -->
    <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/banner2.jpg" style="opacity: 0.85;">
                 <div class="gradient"></div>
                  <div class="carousel-caption">
                   <h1>Pensou em construir?</h1>
                   <p class="lead">A Milano é referência em construção, com experiência em várias obras espalhadas por Curitiba e Região Metropolitana.</p>
                   <a class="btn btn-primary" style="width: 100%" target="_blank" href="https://api.whatsapp.com/send?phone=554197161740"><span>Solicite um orçamento <i class="fab fa-whatsapp"></i></span></a>
                  </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/banner3.jpg">
                 <div class="gradient"></div>
                  <div class="carousel-caption">
                   <h1>Pensou em reformar?</h1>
                   <p class="lead">A Milano é referência em construção, com experiência em várias obras espalhadas por Curitiba e Região Metropolitana.</p>
                   <a class="btn btn-primary" style="width: 100%" target="_blank" href="https://api.whatsapp.com/send?phone=554197161740"><span>Solicite um orçamento <i class="fab fa-whatsapp"></i></span></a>
                  </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/concretagem.jpg">
                 <div class="gradient"></div>
                  <div class="carousel-caption">
                   <h1>A Construtora Milano tem a solução!</h1>
                   <p class="lead">A Milano é referência em construção, com experiência em várias obras espalhadas por Curitiba e Região Metropolitana.</p>
                   <a class="btn btn-primary" style="width: 100%" target="_blank" href="https://api.whatsapp.com/send?phone=554197161740"><span>Solicite um orçamento <i class="fab fa-whatsapp"></i></span></a>
                  </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->

    <section id="portfolio">
        <div class="container">
            <h2>Projetos Recentes</h2>
            <div class="row justify-content-center">
                <div class="col-md-12 col-12">
                    <div class="row">
                        <!-- a carregar -->
                        <?php 
                        for ($i = 0; $i < count($arrProjetos); $i++) {
                            echo '<div class="col-lg-6 col-md-6 col-xs-6">
                            <a class="fancybox" rel="group'.$i.'" href="'.DIRPROJ.'/'.$arrProjetos[$i]->id.'/'.$arrProjetos[$i]->imagens[0]['str_nome'].'">
                                <img src="'.DIRPROJ.'/'.$arrProjetos[$i]->id.'/'.$arrProjetos[$i]->imagens[0]['str_nome'].'" style="width: 100%" title="">
                                <h3 style="text-align: center">'.$arrProjetos[$i]->str_nome.'</h3>
                                <p style="text-align: center">'.$arrProjetos[$i]->str_desc.'</p>
                            </a>';
                            for ($j = 0; $j < count($arrProjetos[$i]->imagens); $j++) {
                                $projetoCorrente = $arrProjetos[$i];
                                $idProjeto = $arrProjetos[$i]->id;
                                $capa = $arrProjetos[$i]->imagens[$j]['str_capa'];
                                if ($capa != '1') {
                                    echo '<a class="fancybox hide" rel="group'.$i.'" title="" href="'.DIRPROJ.'/'.$idProjeto.'/'.$arrProjetos[$i]->imagens[$j]['str_nome'].'"></a>';
                                }                            
                            } 
                            echo '</div>';
                        } ?>
                            
                    </div>
                </div>
            </div>
        </div>
                
    </section>

    <!-- <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 left-side">
                    <h2>My Recent Blog Posts</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="figure">
                                <a href="single.html"><img src="images/banner-image-1.jpg" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure."></a>
                                <figcaption class="figure-caption"> <img src="images/comment.png" alt=""><span>45</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4><a href="single.html">Super and up for the comming model in shoot at newyork USA morning..</a></h4>
                            <div class="btn-group">
                                <a href="single.html" class="btn btn-danger">Ladakh, India</a>
                                <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> 345</button>
                            </div>
                            <p>Posted on : 23.05.2016</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="figure">
                                <a href="single.html"><img src="images/banner-image-2.jpg" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure."></a>
                                <figcaption class="figure-caption"> <img src="images/comment.png" alt=""><span>45</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4><a href="single.html">Super and up for the comming model in shoot at newyork USA morning..</a></h4>
                            <div class="btn-group">
                                <a href="single.html" class="btn btn-danger">Ladakh, India</a>
                                <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> 345</button>
                            </div>
                            <p>Posted on : 23.05.2016</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="figure">
                                <a href="single.html"><img src="images/banner-image-3.jpg" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure."></a>
                                <figcaption class="figure-caption"> <img src="images/comment.png" alt=""><span>45</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4><a href="single.html">Super and up for the comming model in shoot at newyork USA morning..</a></h4>
                            <div class="btn-group">
                                <a href="single.html" class="btn btn-danger">Ladakh, India</a>
                                <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> 345</button>
                            </div>
                            <p>Posted on : 23.05.2016</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="figure">
                                <a href="single.html"><img src="images/banner-image-4.jpg" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure."></a>
                                <figcaption class="figure-caption"><img src="images/comment.png" alt=""><span>45</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4><a href="single.html">Super and up for the comming model in shoot at newyork USA morning..</a></h4>
                            <div class="btn-group">
                                <a href="single.html" class="btn btn-danger">Ladakh, India</a>
                                <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> 345</button>
                            </div>
                            <p>Posted on : 23.05.2016</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="right-side">
                                <h3>Whos Me ?</h3>
                                <figure>
                                    <img src="images/banner-image-2.jpg" alt="">
                                </figure>
                                <h5>Welcome to my personal travel blog, i love to travel the globe, i have been to so many beautiful places and met interesting people around the world, this website is my mirror of life...</h5>
                                <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                                <address>
                               <span>Phone: +44 1234567890</span>
                               <span>Email : info@clickaholic.com</span>
                           </address>
                                <h2>Quick Contact</h2>
                                <form id="contact" method="post" class="form" role="form">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6 form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required/>
                                        </div>
                                        <div class="col-xs-6 col-md-6 form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                                    <br />
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 form-group">
                                            <button class="btn btn-primary" type="submit">Alright Submit it</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer id="footer">
        <section class="footer-top">
            <!--Container-->
            <div class="container">
                <h2 style="text-align: center">Nossos Serviços</h2>
                <!-- <div class="row text-center text-lg-left"> -->
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-xs-1"></div>
                        <div class="col-lg-2 col-md-2 col-xs-2">
                            <img class="img-servicos" src="images/concretagem.jpg">
                            <div align="center">Alvenaria</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-2">
                            <img class="img-servicos" src="images/concretagem.jpg">
                            <div align="center">Cerâmica e Porcelanato</div>
                        </div>                            
                        <div class="col-lg-2 col-md-2 col-xs-2">
                            <img class="img-servicos" src="images/concretagem.jpg">
                            <div align="center">Pintura</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-2">
                            <img class="img-servicos" src="images/concretagem.jpg">
                            <div align="center">Reformas</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-2">
                            <img class="img-servicos" src="images/concretagem.jpg">
                            <div align="center">Hidráulica</div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-xs-1"></div>
                    </div>

            </div>
            <!-- /.container -->
        </section>
        <!-- <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="hidden">/</li>
                            <li><a href="about.html">Sobre a Milano</a></li>
                            <li class="hidden">/</li>
                            <li><a href="gallery.html">Projetos</a></li>
                            <li class="hidden">/</li>
                            <li><a href="contact.html">Solicite um orçamento</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-12">
                        <p>(C) All Rights Reserved <a href="https://www.template.net/editable/websites/html5" target="_blank">ClickaHolic</a> <span>/</span> Designed and Developed by <a href="https://www.template.net/editable/websites/html5" target="_blank">Template.net</a></p>
                    </div> -->
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- <div class="support" id="contato">
            <div class="container">
                <h3>Contato</h3>
                <div class="container py-5 main">
                    <div class="row">
                        <div class="col-md-12">
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="email@brasil.com.br" required>
                            </div>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" placeholder="Número" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control" placeholder="Mensagem" rows="8" required></textarea>
                            </div>
                        </div>
                        <button type="submit" style="background-color: #f9e43f; color: black" class="btn btn-primary px-4">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    </footer>

    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

    <script>
        // $("[data-fancybox]").lightbox();
    </script>
</body>

</html>
