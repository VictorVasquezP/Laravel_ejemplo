<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deails</title>
    <link rel="stylesheet" href="{{asset('css/blog-details.css')}}">
</head>
<body>
    <div class="post-main">
        <div class="post-left">
            <div class="post-body">
                <img class="post-image" src="images/blog/2.jpg" alt="" srcset="">
                <div class="post-text-header">
                    <h2>Este es el titulo de Post que sjs js js s</h2>
                    <div class="post-auth">
                        <h4>Creado por: <span>Victor Vasquez</span></h4>
                        <h4>Fecha de publicación: <span>01/09/2019</span></h4>
                    </div>
                    
                </div>
                <div class="post-text-description">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni obcaecati voluptatum amet, pariatur accusamus veniam, beatae, atque ut placeat molestiae velit aut error eius magnam debitis culpa possimus corporis! Soluta?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, consectetur esse in at itaque culpa veniam illum eum dolores, labore provident distinctio accusamus facilis fuga! Laborum cumque illo iure quis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, sequi! Obcaecati tempora fugiat veritatis id, quidem mollitia voluptates eum iste aliquam illum recusandae commodi alias reprehenderit fugit repudiandae, molestiae fuga.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea provident laudantium odio autem, doloremque libero, est aliquid ratione delectus dolor eius expedita odit exercitationem beatae qui blanditiis ducimus? Beatae, cumque!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi veniam, totam natus hic soluta doloribus ea corrupti distinctio quasi non cupiditate error nobis explicabo possimus quisquam nostrum at? Rem, quaerat.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis delectus molestias inventore culpa facere quidem ab eum ipsum sit sint, labore tempora et voluptatem quia natus ea cupiditate! Repellat, fuga!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias nobis modi libero voluptatibus soluta dolores, asperiores ipsa non ipsum voluptatum quod explicabo ut ea quis sed placeat velit harum beatae?
                    </p>
                </div>
                <div class="post-text-footer">
                    <p>
                        <span>Categorias</span>: <a href="#">Node js</a>, <a href="#">Express</a>
                    </p>
                </div>
            </div>
            <div class="comments">

            </div>
        </div>
        <div class="post-right">
            <div class="post-popular">
                <h3>Posts relacionados</h3>
                <ul>
                    <li>
                        <a href="#">
                            <div class="post-image-popular">
                                <img src="images/blog/3.jpg" alt="" srcset="">
                            </div>
                            <div class="post-popular-text">
                                <h4>Titulo pequeño para poder ver hasta donde llega</h4>
                                <p>
                                    18 Julio 2021 
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="post-image-popular">
                                <img src="images/blog/3.jpg" alt="" srcset="">
                            </div>
                            <div class="post-popular-text">
                                <h4>Titulo pequeño para poder ver hasta donde llega</h4>
                                <p>
                                    18 Julio 2021 
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="post-image-popular">
                                <img src="images/blog/3.jpg" alt="" srcset="">
                            </div>
                            <div class="post-popular-text">
                                <h4>Titulo pequeño para poder ver hasta donde llega</h4>
                                <p>
                                    18 Julio 2021 
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="post-categorias">
                <h3>Categorias</h3>
                <ul>
                    <li><a href="#">Food <span>(10)</span></a></li>
                    <li><a href="#">Travel <span>(10)</span></a></li>
                    <li><a href="#">Adventure <span>(10)</span></a></li>
                </ul>
            </div>
            <div class="post-tags">

            </div>
        </div>
    </div>
</body>
</html>