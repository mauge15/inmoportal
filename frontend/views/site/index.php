<?php

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

use yii\bootstrap4\Dropdown;

$this->title = 'My Yii Application';
?>

<!-- Masthead-->
<header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Busca tu nueva casa en segundos!</h1>
                       
                            
                                <?= \yii\helpers\Html::beginForm(['house/index'], 'post',['class'=>'form-subscribe']) ?>
                            <div class="row">
                                <div class="col-sm">
                                
                                <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                                <label class="btn btn-outline-secondary" for="option1">Comprar</label>

                                <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="option2">Alquiler</label>

                                <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="option3">Anticrético</label>

                                </div>
                                <div class="col-sm">   
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>Tipo..</option>
                                    <option value="1">Vivienda</option>
                                    <option value="2">Terreno</option>
                                    </select>
                                </div>

                                <div class="col-sm"> <div class="mb-3 mt-1">
                                        <input class="form-control" type="text" placeholder="Sucre-Ciudad" />
                                        </div>
                                </div>

                                <div class="col-sm">
                                    <button type="submit" class="btn btn-primary btn-block">Buscar</button>
                                </div>

                            </div>
                                <?= \yii\helpers\Html::endForm() ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>


<!-- Icons Grid-->
<section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <h3>Fully Responsive</h3>
                            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                            <h3>Bootstrap 5 Ready</h3>
                            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                            <h3>Easy to Use</h3>
                            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Fully Responsive Design</h2>
                        <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Updated For Bootstrap 5</h2>
                        <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 5 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 5!</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Easy to Use & Customize</h2>
                        <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">What people are saying...</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="..." />
                            <h5>Margaret E.</h5>
                            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="..." />
                            <h5>Fred S.</h5>
                            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="..." />
                            <h5>Sarah W.</h5>
                            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
       