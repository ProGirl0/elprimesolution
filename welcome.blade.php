<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ELPRIME SOLUTION</title>
        <link rel="icon" type="image/x-icon" href="css/assets/img/00logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
       <style>
    body{
        font-family: "times new roman";
        background-color:darkturquoise;
    }    
    .logo {
      position: absolute;
      top: 10px;
      left: 10px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      overflow: hidden;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }

     .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      border-radius: 10px;
      text-align: left;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
    .layer{
        text-align:center;
        background-color: white;
        border:1px solid black;
        border-radius:10px;
    }

     .logo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .gallery img {
      width: 100%;
      height: 70%;
      display: none;
    }

    .gallery img.active {
      display: block;
    }
    .gallery-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
    }
    
    .controls {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }

    .controls button {
      background-color: transparent;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      font-weight: normal;
    }
    .bott{
        height:50px;
        margin-top:15px;
        float;:right;
        background-color: darkturquoise;
    }
       </style>


    </head>
    <body id="page-top" >
        <!-- Navigation-->
        <nav style="background-color:rgb(139, 139, 226, 0.628);" class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
            <div class="logo">
      <img src="css/assets/img/00logo.png" alt="Logo">
    </div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul style="color:white;" class="navbar-nav ms-auto">
                       
    </li>
                        <li class="nav-item"><a class="nav-link" href="SobreNos"> Sobre nós</a></li>
                        
                        <li class="nav-item"> <a  class="nav-link"href="/login">Inciar sessão</a</li>
                        <li class="nav-item"><a class="nav-link" href="/register">Criar conta</a></li>
                        
                   
                    </ul>
                    </nav>

                </div>
            </div>
             
       
        <!-- Masthead-->
        <main>
    <div class="gallery">
      <div class="gallery-item">
      <img class="active" src="css/assets/img/biblioteca2.jfif" alt="Image 1">
      <div class="gallery-text"><div id="texto" style="font-size: 40PT; background-color: transparent; border-radius: 10px; font-family:lucida caligraphy;"></div> </div>
      <div class="gallery-item">
      <img src="css/assets/img/biblioteca1.jfif" alt="Image 2">
      <div class="gallery-text"></div> </div>
      <div class="gallery-item">
      <img src="css/assets/img/biblioteca.jfif" alt="Image 3">
      <div class="gallery-text"></div></div>
      <!-- Adicione mais imagens conforme necessário -->
    </div>
    <div class="controls">
      <button onclick="prevImage()" style="font-size: 50pt;"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
      </svg></button>
      <button onclick="nextImage()" style="font-size: 50pt;"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
      </svg></button>
    </div>
  </main>
        </section>
        <!-- Projects-->

        
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="css/assets/img/quem somos.jfif" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Quem somos?</h4>
                          <p style="text-align:justify; text-indent:40px;">  A ELPRIME SOLUTION|Serviços & Comércio LDA., é uma empresa de direito angolano, com número de identificação fiscal 5001132644, constituída aos 12 de agosto de 2022, com sede em Luanda, sob número de matrícula 38309-22/220816, vocacionada nas diversas áreas de serviços de Consultoria Empresarial, Formação e Capacitação.Podendo ainda exercer outras Actividades Mercantis que a lei lhe permite.
                 <a href="SobreNos">Veja mais!.</a>
                        </p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img style="height:322px;" class="img-fluid" src="css/assets/img/servicos.jfif" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white"> <a style="color:white; text-decoration:none;" href="servicos">Serviços</a></h4>
                                <p style="color:white; text-indent:40px; text-align:justify; ">
                                    A Elprime Solution|Comércio & Serviço Lda., disponibiliza para si uma vasta gama de serviços, clique para continuar, e se inreva para receber uma assistência.
                                </p> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img style="height:322px;" class="img-fluid" src="css/assets/img/cursos.jfif" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white"><a style="color:white; text-decoration:none;" href="cursos">Cursos</a></h4>
                                    <p style="color:white; text-indent:40px; text-align:justify; ">
                                    A Elprime Solution|Comércio & Serviço Lda., tema oferecer para si um pacote de cursos disponibilizados  com a maior qualidade, se inscreva para mais informação.
                                </p> </div>
                            </div>
                        </div>
                    </div>
        
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img style="height:322px;" class="img-fluid" src="css/assets/img/galeria.jfif" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white"><a style="color:white; text-decoration:none;" href="galeria">Galeria</a></h4>  
                                    <p style="color:white; text-indent:40px; text-align:justify; ">
                                    A Elprime Solution|Comércio & Serviço Lda. é responsável pela realização de eventos afim impulsionar o crecimento profissional dos estudantes, confira alguns momentos.
                                </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img style="height:342px;" class="img-fluid" src="css/assets/img/estagio.jfif" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white"><a style="color:white; text-decoration:none;" href="estagios">Estágios</a></h4>
                                    <p style="color:white; text-indent:40px; text-align:justify; ">
                                    A Elprime Solution|Comércio & Serviço Lda., disponibiliza para os estudantes treinamentos profissionais e estágios curriculares afim de preparar um ambiente real para a aplicação dos seus aprendizados.
                                </p> </div>
                            </div>
                        </div>
                    </div>
               
        </section>
        <!-- Signup-->
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                
                                <h4 class="text-uppercase m-0"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0" viewBox="0 0 1800 1800" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m899.993 1556.267 441.512-441.511c8.202-7.819 26.127-26.384 26.893-27.184l.36-.383c110.946-118.997 172.046-274.141 172.046-436.851 0-353.342-287.463-640.805-640.803-640.805-353.342 0-640.805 287.463-640.805 640.805 0 162.714 61.1 317.857 172.038 436.851zm.008-1485.108c319.355 0 579.179 259.818 579.179 579.18 0 146.968-55.159 287.114-155.315 394.639-5.202 5.387-19.292 19.873-25.095 25.383L900.006 1469.1l-424.049-424.315C375.902 937.286 320.82 797.229 320.82 650.339c0-319.362 259.814-579.18 579.181-579.18z" fill="#00ced1" opacity="1" data-original="#000000" class=""></path><path d="M998.745 225.279c110.577 0 325.781 120.91 325.781 342.553 0 17.018 13.789 30.812 30.812 30.812 17.014 0 30.812-13.794 30.812-30.812 0-115.37-50.989-222.331-143.563-301.184-73.464-62.566-169.175-102.994-243.842-102.994-17.014 0-30.812 13.794-30.812 30.813s13.798 30.812 30.812 30.812zM1286.716 1361.056c-24.003-9.809-49.854-18.548-77.134-26.264l-50.474 50.478c148.765 35.502 240.488 98.79 240.488 157.599 0 87.962-205.171 185.974-499.596 185.974-294.417 0-499.597-98.012-499.597-185.974 0-58.805 91.723-122.097 240.488-157.599l-50.478-50.478c-27.271 7.716-53.126 16.455-77.121 26.264-112.537 45.995-174.513 110.563-174.513 181.813s61.977 135.817 174.513 181.813c103.793 42.422 241.128 65.785 386.708 65.785 145.582 0 282.921-23.363 386.715-65.785 112.536-45.995 174.504-110.563 174.504-181.813s-61.967-135.818-174.503-181.813z" fill="#00ced1" opacity="1" data-original="#000000" class=""></path><path d="M901.771 945.221c-171.172 0-310.434-139.256-310.434-310.425S730.599 324.37 901.771 324.37s310.434 139.256 310.434 310.425-139.262 310.426-310.434 310.426zm0-559.226c-137.193 0-248.809 111.612-248.809 248.801s111.616 248.801 248.809 248.801c137.192 0 248.809-111.612 248.809-248.801s-111.616-248.801-248.809-248.801z" fill="#00ced1" opacity="1" data-original="#000000" class=""></path></g></svg>
                             </h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Angola/Luanda-Cacuaco, Boa Esperança, Rua da Cimangola</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                               
                                <h4 class="text-uppercase m-0"><svg xmlns="http://www.w3.org/2000/svg" color="darkturquoise"width="50" height="50" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
          <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
          <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
        </svg> </h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">
                                  <a href="mailto:elprimesolution12@gmail.com">elprimesolution12@gmail.com
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                
                                <h4 class="text-uppercase m-0"><svg xmlns="http://www.w3.org/2000/svg" width="50"color="darkturquoise" height="50" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
        </svg></h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+ (244) 926-776-470</div>
                                <div class="small text-black-50">+ (244) 926-776-425</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="color:darkturquoise;" class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://web.facebook.com/search/top/?q=elprime%20solution%20-%20com%C3%A9rcio%20e%20servi%C3%A7os%2C%20lda"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0" viewBox="0 0 100 100" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M40.4 55.2h-9.9c-1.6 0-2.1-.6-2.1-2.1V41c0-1.6.6-2.1 2.1-2.1h9.9v-8.8c0-4 .7-7.8 2.7-11.3 2.1-3.6 5.1-6 8.9-7.4 2.5-.9 5-1.3 7.7-1.3h9.8c1.4 0 2 .6 2 2v11.4c0 1.4-.6 2-2 2-2.7 0-5.4 0-8.1.1-2.7 0-4.1 1.3-4.1 4.1-.1 3 0 5.9 0 9h11.6c1.6 0 2.2.6 2.2 2.2V53c0 1.6-.5 2.1-2.2 2.1H57.3v32.6c0 1.7-.5 2.3-2.3 2.3H42.5c-1.5 0-2.1-.6-2.1-2.1V55.2z" fill="#00ced1" opacity="1" data-original="#000000" class=""></path></g></svg></a>
                    <a class="mx-2" href="#!"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" style="" fill="#00ced1" data-original="#03a9f4" class="" opacity="1"></path></g></svg>   </a>
                    <a class="mx-2" href="https://wa.me/933658300"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0" viewBox="0 0 308 308" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M227.904 176.981c-.6-.288-23.054-11.345-27.044-12.781-1.629-.585-3.374-1.156-5.23-1.156-3.032 0-5.579 1.511-7.563 4.479-2.243 3.334-9.033 11.271-11.131 13.642-.274.313-.648.687-.872.687-.201 0-3.676-1.431-4.728-1.888-24.087-10.463-42.37-35.624-44.877-39.867-.358-.61-.373-.887-.376-.887.088-.323.898-1.135 1.316-1.554 1.223-1.21 2.548-2.805 3.83-4.348a140.77 140.77 0 0 1 1.812-2.153c1.86-2.164 2.688-3.844 3.648-5.79l.503-1.011c2.344-4.657.342-8.587-.305-9.856-.531-1.062-10.012-23.944-11.02-26.348-2.424-5.801-5.627-8.502-10.078-8.502-.413 0 0 0-1.732.073-2.109.089-13.594 1.601-18.672 4.802C90 87.918 80.89 98.74 80.89 117.772c0 17.129 10.87 33.302 15.537 39.453.116.155.329.47.638.922 17.873 26.102 40.154 45.446 62.741 54.469 21.745 8.686 32.042 9.69 37.896 9.69h.001c2.46 0 4.429-.193 6.166-.364l1.102-.105c7.512-.666 24.02-9.22 27.775-19.655 2.958-8.219 3.738-17.199 1.77-20.458-1.348-2.216-3.671-3.331-6.612-4.743z" fill="#00ced1" opacity="1" data-original="#000000" class=""></path><path d="M156.734 0C73.318 0 5.454 67.354 5.454 150.143c0 26.777 7.166 52.988 20.741 75.928L.212 302.716a3.998 3.998 0 0 0 4.999 5.096l79.92-25.396c21.87 11.685 46.588 17.853 71.604 17.853C240.143 300.27 308 232.923 308 150.143 308 67.354 240.143 0 156.734 0zm0 268.994c-23.539 0-46.338-6.797-65.936-19.657a3.996 3.996 0 0 0-3.406-.467l-40.035 12.726 12.924-38.129a4.002 4.002 0 0 0-.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677 0-65.543 53.754-118.867 119.826-118.867 66.064 0 119.812 53.324 119.812 118.867.001 65.535-53.746 118.851-119.811 118.851z" fill="#00ced1" opacity="1" data-original="#000000" class=""></path></g></svg></a>
        <a class="mx-2" href="#!"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M12 2.162c3.204 0 3.584.012 4.849.07 1.308.06 2.655.358 3.608 1.311.962.962 1.251 2.296 1.311 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.059 1.301-.364 2.661-1.311 3.608-.962.962-2.295 1.251-3.608 1.311-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.291-.059-2.669-.371-3.608-1.311-.957-.957-1.251-2.304-1.311-3.608-.058-1.265-.07-1.645-.07-4.849s.012-3.584.07-4.849c.059-1.296.367-2.664 1.311-3.608.96-.96 2.299-1.251 3.608-1.311 1.265-.058 1.645-.07 4.849-.07M12 0C8.741 0 8.332.014 7.052.072 5.197.157 3.355.673 2.014 2.014.668 3.36.157 5.198.072 7.052.014 8.332 0 8.741 0 12c0 3.259.014 3.668.072 4.948.085 1.853.603 3.7 1.942 5.038 1.345 1.345 3.186 1.857 5.038 1.942C8.332 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 1.854-.085 3.698-.602 5.038-1.942 1.347-1.347 1.857-3.184 1.942-5.038.058-1.28.072-1.689.072-4.948 0-3.259-.014-3.668-.072-4.948-.085-1.855-.602-3.698-1.942-5.038C20.643.671 18.797.156 16.948.072 15.668.014 15.259 0 12 0z" fill="#00ced1" opacity="1" data-original="#000000" class=""></path><path d="M12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" fill="#00ced1" opacity="1" data-original="#000000" class=""></path><circle cx="18.406" cy="5.594" r="1.44" fill="#00ced1" opacity="1" data-original="#000000" class=""></circle></g></svg></a>
                    <a class="mx-2" href="#!"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path d="M23.002 21.584h.227l-.435-.658c.266 0 .407-.169.409-.376l-.001-.025c0-.282-.17-.417-.519-.417h-.564v1.476h.212v-.643h.261l.41.643zm-.425-.81h-.246v-.499h.312c.161 0 .345.026.345.237 0 .242-.186.262-.412.262M17.291 19.073h-3.007v-4.709c0-1.123-.02-2.568-1.564-2.568-1.566 0-1.806 1.223-1.806 2.487v4.79H7.908V9.389h2.887v1.323h.04a3.165 3.165 0 0 1 2.848-1.564c3.048 0 3.609 2.005 3.609 4.612l-.001 5.313zM4.515 8.065a1.745 1.745 0 1 1 0-3.49 1.745 1.745 0 0 1 0 3.49m1.503 11.008h-3.01V9.389h3.01v9.684zM18.79 1.783H1.497A1.481 1.481 0 0 0 0 3.246V20.61c.01.818.68 1.473 1.497 1.464H18.79a1.485 1.485 0 0 0 1.503-1.464V3.245a1.484 1.484 0 0 0-1.503-1.463" fill="#00ced1" opacity="1" data-original="#000000"></path><path d="M22.603 19.451a1.383 1.383 0 1 0 .027 0h-.027m.032 2.608c-.67.011-1.254-.522-1.265-1.192a1.213 1.213 0 1 1 2.426-.04v.02a1.187 1.187 0 0 1-1.161 1.212h-.031" fill="#00ced1" opacity="1" data-original="#000000"></path></g></svg>   </a>
                    <a class="mx-2" href="#!"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path d="M22.465 9.866a9.809 9.809 0 0 1-5.74-1.846v8.385c0 4.188-3.407 7.594-7.594 7.594a7.548 7.548 0 0 1-4.352-1.376 7.59 7.59 0 0 1-3.242-6.218c0-4.188 3.407-7.595 7.595-7.595.348 0 .688.029 1.023.074v4.212a3.426 3.426 0 0 0-1.023-.16 3.472 3.472 0 0 0-3.468 3.469 3.47 3.47 0 0 0 3.469 3.468 3.47 3.47 0 0 0 3.462-3.338L12.598 0h4.126a5.752 5.752 0 0 0 5.74 5.741v4.125z" fill="#00ced1" opacity="1" data-original="#000000"></path></g></svg></a>
              
                </div>
            </div>
        </section>
        <!-- Footer-->
      <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">
          By &copy; ELPRIME SOLUTION 2024
        </div>
      </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
      const mensagens = ["Conheça os nossos serviços.", "São Óptima solução para si!","Não perca mais tempo, conheça-nos!"];
    let indice = 0;
    const intervalo = 5000; // Tempo em milissegundos (10 segundos)

    function escreverTexto() {
      const texto = document.getElementById('texto');
      texto.textContent = mensagens[indice];
      indice = (indice + 1) % mensagens.length;
      setTimeout(apagarTexto, intervalo);
    }

    function apagarTexto() {
      const texto = document.getElementById('texto');
      texto.textContent = '';
      setTimeout(escreverTexto, 1000); // Tempo em milissegundos (1 segundo) antes de começar a escrever a próxima mensagem
    }

    // Iniciar o processo
    escreverTexto(); 
     try {
    
  } catch (error) {
    
  }
    let currentImage = 0;
    const images = document.querySelectorAll('.gallery img');

    function showImage(index) {
      images.forEach(img => img.classList.remove('active'));
      images[index].classList.add('active');
    }

    function nextImage() {
      currentImage = (currentImage + 1) % images.length;
      showImage(currentImage);
    }

    function prevImage() {
      currentImage = (currentImage - 1 + images.length) % s.length;
      showImage(currentImage);
    }

    setInterval(nextImage, 5000) ; // Troca de imagem a cada 5 segundos
  </script>


    </body>
</html>
